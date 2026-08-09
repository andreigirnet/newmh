<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\CertificateMail;
use App\Mail\ConfirmPaymentMail;
use App\Models\Basket;
use App\Models\Certificate;
use App\Models\Order;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Jackiedo\Cart\Cart;
use Stripe\PaymentIntent;
use Stripe\Stripe;



class CheckoutController extends Controller
{
    protected Cart $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $cartDetails = $this->cart->getDetails();
        return view("pages.back.checkout")->with('cartDetails',$cartDetails);
    }

    public function indexS(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $cartDetails = $this->cart->getDetails();
        return view("admin.administrator.checkoutS")->with('cartDetails',$cartDetails);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function setPayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $json_str = file_get_contents('php://input');
        $json_obj = json_decode($json_str);
        $amountToInt = round($request->cartTotal * 100, 0, PHP_ROUND_HALF_UP);

        $intent = null;

        try {
            // CASE A: If the frontend is posting back the payment_intent_id after finishing 3DS popup
            if (isset($json_obj->payment_intent_id)) {
                $intent = \Stripe\PaymentIntent::retrieve($json_obj->payment_intent_id);

                // After 3DS popup finishes, manual confirmation requires one final confirm call to settle the charge
                if ($intent->status == 'requires_confirmation' || $intent->status == 'requires_action') {
                    $intent = $intent->confirm();
                }
            }
            // CASE B: Initial payment submission with the payment_method_id from frontend
            else if (isset($json_obj->payment_method_id)) {
                $customer = \Stripe\Customer::create([
                    'email' => auth()->user()->email,
                    'description' => 'New customer',
                    'metadata' => [
                        'name' => auth()->user()->name,
                    ],
                ]);
                $cartItemsJson = $request->cart_items; // Or encode your cart details here
                $intent = \Stripe\PaymentIntent::create([
                    'payment_method' => $json_obj->payment_method_id,
                    'amount' => $amountToInt,
                    'currency' => 'eur',
                    'confirm' => true,
                    'customer' => $customer->id,
                    'description' => 'Payment made by '. auth()->user()->email,
                    'return_url' => url('/payment/success'),
                    'metadata' => [
                        'user_id' => auth()->id(),
                        'cart_items' => $cartItemsJson,
                        'cart_qty' => $request->cartQty,
                        'address' => $request->address,
                        'city' => $request->city,
                        'county' => $request->county,
                        'country' => $request->country,
                    ]
                ]);
            }

            if (!$intent) {
                http_response_code(400);
                echo json_encode(['error' => 'Invalid payment request.']);
                return;
            }

            $this->generateResponse($intent, $request);

        } catch (\Stripe\Exception\ApiErrorException $e) {
            http_response_code(400);
            echo json_encode([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function generateResponse($intent, Request $request) {
        // 1. If 3DS action is required, tell frontend JS to open the verification popup
        if ($intent->status == 'requires_action') {
            echo json_encode([
                'requires_action' => true,
                'payment_intent_client_secret' => $intent->client_secret,
                'redirect_url' => $intent->next_action->redirect_to_url->url ?? null
            ]);
            return;
        }

        // 2. If payment succeeds immediately or after confirmation
        if ($intent->status == 'succeeded' || $intent->status == 'requires_capture' || $intent->status == 'processing') {

            $existingOrder = Order::where('charge_id', $intent->id)->first();
            if (!$existingOrder) {
                $cartItems = json_decode($request->cart_items, true);

                $orderTitles = '';
                if (!empty($cartItems)) {
                    foreach ($cartItems as $cartItem) {
                        $orderTitles .= ($cartItem['title'] ?? 'Course') . ', ';
                    }
                    $orderTitles = rtrim($orderTitles, ', ');
                } else {
                    $orderTitles = 'Course Purchase';
                }

                Order::create([
                    'user_id' => auth()->user()->id,
                    'product_name' => $orderTitles,
                    'quantity' => $request->cartQty,
                    'paid' => $request->cartTotal,
                    'charge_id' => $intent->id,
                    'invoice_id' => $intent->id,
                    'address' => $request->address,
                    'city' => $request->city,
                    'county' => $request->county,
                    'country' => $request->country,
                    'status' => 'paid',
                ]);

                if (!empty($cartItems)) {
                    foreach ($cartItems as $cartItem) {
                        $qty = $cartItem['quantity'] ?? 1;
                        for ($i = 0; $i < $qty; $i++) {
                            $package = new Package();
                            $package->product_id = $cartItem['id'] ?? 1;
                            $package->user_id = auth()->user()->id;
                            $package->course_name = $cartItem['title'] ?? 'Course';
                            $package->status = "purchased";
                            $package->save();
                        }
                    }
                }

                Mail::to(auth()->user()->email)->send(new ConfirmPaymentMail());
            }

            if (session()->isStarted()) {
                $request->session()->flash('success', 'Payment has been received successfully');
            }

            echo json_encode([
                "success" => true
            ]);
            return;
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Invalid PaymentIntent status: ' . $intent->status]);
        }
    }
    public function paymentSuccess(Request $request)
    {
        $paymentIntentId = $request->query('payment_intent');

        if ($paymentIntentId) {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            try {
                $intent = PaymentIntent::retrieve($paymentIntentId);
                // Verify the payment actually succeeded after 3DS redirect
                if ($intent->status == 'succeeded') {
                    $existingOrder = Order::where('charge_id', $intent->id)->first();

                    if (!$existingOrder) {
                        $metadata = $intent->metadata;
                        $userId = $metadata->user_id ?? auth()->id();
                        $cartItems = json_decode($metadata->cart_items ?? '[]', true);
                        $orderTitles = '';
                        if (!empty($cartItems)) {
                            foreach ($cartItems as $cartItem) {
                                $orderTitles .= ($cartItem['title'] ?? 'Course') . ', ';
                            }
                            $orderTitles = rtrim($orderTitles, ', ');
                        } else {
                            $orderTitles = $metadata->product_name ?? 'Course Purchase';
                        }

                        // 1. Create the Order
                        Order::create([
                            'user_id' => $userId,
                            'product_name' => $orderTitles,
                            'quantity' => $metadata->cart_qty ?? 1,
                            'paid' => $intent->amount / 100,
                            'charge_id' => $intent->id,
                            'invoice_id' => $intent->id,
                            'address' => $metadata->address ?? null,
                            'city' => $metadata->city ?? null,
                            'county' => $metadata->county ?? null,
                            'country' => $metadata->country ?? null,
                            'status' => 'paid',
                        ]);

                        // 2. Create the Packages
                        if (!empty($cartItems)) {
                            foreach ($cartItems as $cartItem) {
                                $qty = $cartItem['quantity'] ?? 1;

                                for ($i = 0; $i < $qty; $i++) {
                                    $package = new Package();
                                    $package->product_id = $cartItem['id'] ?? 1;
                                    $package->user_id = $userId;
                                    $package->course_name = $cartItem['title'] ?? 'Course';
                                    $package->status = "purchased";
                                    $package->save();
                                }
                            }
                        }
                        // 3. Send Confirmation Email
                        $user = User::find($userId);
                        if ($user) {
                            Mail::to($user->email)->send(new ConfirmPaymentMail());
                        }
                    }
                }
            } catch (\Stripe\Exception\ApiErrorException $e) {
                // Handle Stripe API errors if retrieval fails
                \Log::error('Stripe payment success retrieval error: ' . $e->getMessage());
            }
        }

        // Flash session message for your view if needed
        if (session()->isStarted()) {
            session()->flash('success', 'Payment has been received successfully');
        }

        return view('pages.back.payment');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
