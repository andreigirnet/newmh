@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
@include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
<div class="homePageAdminContent" x-data="{ cartAlert: false }">
    <div
        x-show="cartAlert"
        class="alert alert-info shadow-sm cartAlert"
        x-cloak
    >
        <strong>Item</strong> added to the cart
    </div>
    @if (session('created'))
    <div class="mhi-unique-overlay">
        <div class="mhi-unique-shell modalRegisterComplete" id="modalRegisterEmployer">
            <!-- Header -->
            <div class="mhi-unique-header" style="padding-bottom: 8px;">
                <div class="mhi-unique-badge">Registration Complete</div>
                <h2 style="margin: 6px 0 2px; font-size: 1.2rem; font-weight: 800; color: #0f172a; text-align: center;">Hi there! 👋</h2>
                <p style="margin: 0; font-size: 0.85rem; color: #475569; text-align: center;">
                    It's <a href="{{route('home')}}" style="color: #2563eb; text-decoration: none; font-weight: 600;" target="_blank">manualhandlingireland.ie</a> Training Centre here.
                </p>
            </div>

            <!-- Body Content -->
            <div class="mhi-unique-body" style="padding-top: 6px; padding-bottom: 6px;">
                <div style="font-size: 0.85rem; color: #334155; line-height: 1.3; margin-bottom: 8px;">
                    If you require assistance, reach out via the chat feature on our website.
                </div>

                <!-- Card 1: Course Access -->
                <div class="mhi-unique-card" style="padding: 8px 10px; margin-bottom: 8px;">
                    <div class="mhi-unique-card-header" style="margin-bottom: 2px;">
                        <div class="mhi-unique-icon" style="width: 24px; height: 24px; font-size: 0.8rem;">🔑</div>
                        <h4 style="margin: 0; font-size: 0.9rem; font-weight: 700; color: #1e293b;">Accessing Your Course</h4>
                    </div>
                    <p style="margin: 0; font-size: 0.8rem; color: #64748b; line-height: 1.3;">
                        After payment check courses section and press start
                    </p>
                </div>

                <!-- Card 2: Multi-Language -->
                <div class="mhi-unique-card" style="border-left-color: #10b981; padding: 8px 10px; margin-bottom: 8px;">
                    <div class="mhi-unique-card-header" style="margin-bottom: 2px;">
                        <div class="mhi-unique-icon" style="background: #ecfdf5; color: #10b981; width: 24px; height: 24px; font-size: 0.8rem;">🌍</div>
                        <h4 style="margin: 0; font-size: 0.9rem; font-weight: 700; color: #1e293b;">Language Selection</h4>
                    </div>
                    <p style="margin: 0; font-size: 0.8rem; color: #64748b; line-height: 1.3;">
                        Choose after payment: <strong>English, Polish, Spanish, Russian, Romanian, Ukrainian</strong>.
                    </p>
                </div>

                <!-- Support Info Note -->
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 6px 10px; border-radius: 8px; font-size: 0.8rem; color: #475569; text-align: center;">
                    🕒 Support available <strong>6 am to 10 pm</strong> daily (incl. weekends).
                </div>
            </div>

            <!-- Footer -->
            <div class="mhi-unique-footer" style="padding-top: 8px;">
                <div style="font-size: 0.8rem; color: #64748b; margin-bottom: 4px; font-weight: 500;">Best regards</div>
                <button class="mhi-unique-btn adminButtonModal" id="understoodButton" style="padding: 8px 16px; font-size: 0.85rem;">
                    UNDERSTOOD
                </button>
            </div>
        </div>
    </div>
    @endif
{{--        <img src="{{asset("images/products/saleOver.png")}}" class="overImgDashBack" alt="">--}}
    <div class="trustBadge">
        <div class="trustBadge__icon">
            🍀
        </div>
        <div class="trustBadge__text">
            <div class="trustBadge__eyebrow">Nr.1 rated</div>
            <div class="trustBadge__label">Irish Safety Provider</div>
        </div>
    </div>
        <div class="adminProductsBack">
            @foreach($products as $product)
                @if($product->status == 0)
                    <div class="adminProductBack">
                        <img src="{{ asset('images/lifting.webp') }}" class="adminProductImageBack" alt="Manual Handling Course">
                        <div class="adminProductBottomBack">
                            <div class="adminProductNameBack">{{$product->name}}</div>
                            @if (!in_array($product->id, [13, 14, 15, 16]))
                                <div style="color: #397b21; font-weight: bold" class="elearning">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Theory + Practice</div>
                            @endif
                            <hr style="border: 1px solid gray; opacity: 0.8">
                            <div class="product-info-icons">
                                @if($product->id == 14)
                                    <div class="product-icons-back">
                                        <img src="images/icons/back-in-time.png" alt="">
                                        <div>Duration: {{$product->durationTraining}} Day(Half day)</div>
                                    </div>
                                @else
                                    <div class="product-icons-back">
                                        <img src="images/icons/back-in-time.png" alt="">
                                        <div style="font-weight: 600; display: flex; align-items: center; column-gap: 5px">Duration: <span style="font-weight: 500">{{$product->durationTraining}} Minutes</span></div>
                                    </div>
                                @endif
                                <div class="product-icons-back">
                                    <img src="images/icons/certificate.png" alt="">
                                    <div style="font-weight: 600; display: flex; align-items: center; column-gap: 5px">Validity: <span style="font-weight: 500">{{$product->certificateValidity}} Years</span></div>
                                </div>
                                <div class="product-icons-back">
                                    <img src="images/icons/money.png" alt="">
                                    <div style="font-weight: bold">Price:
{{--                                        <del style="color: gray">47€</del> --}}
                                        <span style="color: red; font-size: 30px">{{$product->price}} €</span></div>
                                </div>
                            </div>
                            @if($product->status == 0)
                                <button
                                    type="button"
                                    class="buttonProductAdminAddBack"
                                    @click="
                                $store.cart.addItem({
                                    id: 1,
                                    title: 'Manual Handling',
                                    image: '{{ asset('images/lifting.webp') }}',
                                    price: {{ config('global.course_price') }},
                                    quantity: 1
                                });
                                cartAlert = true;
                                setTimeout(() => { cartAlert = false }, 1000);
                            ">
                                    Add To Basket &#10140;
                                </button>
                            @else
                                <div class="productButtons">
                                    <button type="submit" class="buttonProductAdminAdd">Coming Soon</button>
                                    @if($product->description)
                                        <a href="{{route('front.product', $product->id)}}" class="homeStartCourseButton">Info</a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

{{--        <div class="homeActionButtons">--}}
{{--            @if($userPackageId)--}}
{{--                <a href="{{route('course.index', $userPackageId[0]->id)}}" class="homeStartCourseButton">Start Course</a>--}}
{{--            @else--}}
{{--                <form action="{{route('basket.add')}}" method="POST">--}}
{{--                    @csrf--}}
{{--                    <input type="hidden" value="1" name="productId">--}}
{{--                    <button type="submit" class="homeStartCourseButton">Buy a course</button>--}}
{{--                </form>--}}
{{--            @endif--}}
{{--            @if($certificateId)--}}
{{--                <a href="{{route('certificate.download', $certificateId[0]->id)}}" class="homeDownloadButton">Downloand Certificate</a>--}}
{{--            @endif--}}
{{--        </div>--}}

    <div class="luxury-card brand-intro-card">

        <div class="brand-content-text">
            <h2 class="brand-title">
                <span class="exclusive-icon" s>&#x1F340;</span>
                <span class="gradient-text">{{env('APP_NAME')}}</span>
            </h2>
            <p class="brand-description">
                Ireland’s <strong>Leader</strong> in accessible Online Manual Handling Training. We offer compliant online training and exceptional service to a global customers via our seamless digital platform. <strong>Best Price</strong> on market guarantee
            </p>
        </div>
    </div>
{{--    @if($userPackageId)--}}
{{--        <div class="notice">--}}
{{--            <div class="noticeTitle">Notice:</div>--}}
{{--            <div class="noticeText">--}}
{{--                You have received the course/courses, either through your own purchase or from your employer.--}}
{{--                <br>--}}
{{--                To commence the training, please activate it by clicking the link below and then proceed by pressing the "Start Course" button to get started.--}}
{{--                <br><br>--}}
{{--                Follow the link bellow--}}
{{--                <br>--}}
{{--            </div>--}}
{{--            <a class="homeDownloadButton" href="{{route('package.index')}}">Link</a>--}}
{{--        </div>--}}
{{--    @endif--}}

       <div class="homeManualProduct">
            <div class="course-card">

                <div class="course-image">
                    <!-- Replace with actual image -->
                    <img src="{{ asset('images/lifting.webp') }}" alt="Manual Handling Course">
                </div>

                <div class="course-content">

                    <div class="price-wrapper">
{{--                        <span class="old-price">€43</span>--}}
                        <span class="new-price">€{{config('global.course_price')}}</span>
{{--                        <span class="discount-badge">30% OFF</span>--}}
                    </div>

                    <h1 class="course-title">Manual Handling Course</h1>

                    <div class="info-grid">
                        <div class="info-item">
                            <span class="info-label">Validity</span>
                            <span class="info-value">3 Years</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Duration</span>
                            <span class="info-value">1 Hour</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Format</span>
                            <span class="info-value">100% Online</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Certificate</span>
                            <span class="info-value">Instant</span>
                        </div>
                    </div>
                    <button
                        type="button"
                        class="course-btn"
                        @click="
                                $store.cart.addItem({
                                    id: 1,
                                    title: 'Manual Handling',
                                    image: '{{ asset('images/lifting.webp') }}',
                                    price: {{ config('global.course_price') }},
                                    quantity: 1
                                });
                                cartAlert = true;
                                setTimeout(() => { cartAlert = false }, 1000);
                            ">
                        Add To Basket &#10140;
                    </button>

                </div>
            </div>

       </div>
</div>



        {{--    <div class="langTitle">--}}
{{--        <div class="languageText">When you start the course, you'll have the opportunity to choose from that 6 languages:</div>--}}
{{--        <div class="languagesSection">--}}
{{--            <img src="{{asset('images/flags/en.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/pl.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/ro.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/ru.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/sp.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/ukr.png')}}" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
<script src="{{asset('js/showModalRegisterEmployee.js')}}"></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
