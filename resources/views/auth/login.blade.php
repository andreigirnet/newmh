<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sign In | {{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</title>
    
    <meta name="description" content="Sign in to your manual handling training portal account in Ireland.">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    {{-- Tailwind CSS Play CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-600 selection:text-white min-h-full flex flex-col justify-between">

    {{-- Top Announcement Bar --}}
    <div class="bg-blue-900 text-white text-xs sm:text-sm py-2 px-4 text-center font-medium">
        <span>Transparent Pricing: €30 flat fee with zero hidden costs. Ireland-wide availability.</span>
    </div>

    {{-- Main Container --}}
    <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl w-full mx-auto">
            
            {{-- Brand Header --}}
            <div class="text-center mb-8">
                <a href="/" class="inline-flex items-center gap-2.5 mb-3 w-12 h-12">
                   <img src="{{asset('images/logo/smallLogo.webp')}}" alt="">
                </a>
                <div class="font-heading font-extrabold text-slate-900 text-base sm:text-lg tracking-tight">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</div>
                <div class="text-xs text-blue-600 font-semibold tracking-wider uppercase mt-0.5">Manual Handling Training Ireland — €30 Flat</div>
            </div>

            {{-- Auth Card --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-xl p-8 sm:p-10 relative overflow-hidden">
                
                <div class="mb-8 text-center sm:text-left">
                    <span class="bg-blue-100 text-blue-800 font-bold text-xs uppercase px-3 py-1 rounded-full mb-3 inline-block">Secure Sign In</span>
                    <h1 class="font-heading font-extrabold text-2xl sm:text-3xl text-slate-900 tracking-tight mb-1">Welcome Back</h1>
                    <p class="text-slate-600 text-sm">Enter your credentials to access your account.</p>
                </div>

                {{-- Global Success Alert --}}
                @if (session('success'))
                    <div class="mb-6 bg-emerald-50 text-emerald-800 p-4 rounded-2xl border border-emerald-200 text-sm font-medium flex items-center gap-3">
                        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                {{-- Validation Errors Alert --}}
                @if ($errors->any())
                    <div class="mb-6 bg-red-50 text-red-800 p-4 rounded-2xl border border-red-200 text-sm font-medium">
                        <div class="flex items-center gap-2 mb-2 font-semibold">
                            <svg class="w-5 h-5 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                            <span>Please correct the following fields:</span>
                        </div>
                        <ul class="list-disc pl-5 space-y-1 text-xs">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Login Form --}}
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="emailaddress" class="block font-semibold text-slate-900 text-sm mb-2">Email Address</label>
                        <input class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all" 
                               type="email" name="email" id="emailaddress" placeholder="name@company.com" required value="{{ old('email') }}">
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label for="password" class="block font-semibold text-slate-900 text-sm">Password</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs text-blue-600 hover:underline font-medium">Forgot password?</a>
                            @endif
                        </div>
                        <input class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all" 
                               type="password" name="password" id="password" placeholder="••••••••" required>
                    </div>

                    <div class="text-xs text-slate-500 pt-1">
                        By logging up, you agree to our 
                        <a href="{{ route('front.privacy') }}" class="text-blue-600 hover:underline font-medium">Privacy Policy</a> and 
                        <a href="{{ route('terms') ?? '#' }}" class="text-blue-600 hover:underline font-medium">Terms & Conditions</a>.
                    </div>

                    <div>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-600/25 transition-all text-sm" type="submit">
                            Log In to Training Portal
                        </button>
                    </div>
                </form>

                {{-- Footer Register Link --}}
                <div class="text-center mt-8 pt-6 border-t border-slate-100">
                    <p class="text-slate-600 text-sm">
                        Don't have an account? 
                        <a href="{{ route('register') }}" class="text-slate-900 font-bold hover:text-blue-600 transition-colors ml-1 underline underline-offset-4">Sign up</a>
                    </p>
                </div>

            </div>

            {{-- Footer Legal Info --}}
            <div class="text-center mt-8 text-xs text-slate-400 space-y-1">
                <p>&copy; {{ date('Y') }} {{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }} (Reg. {{ config('global.business_number', '822301') }})</p>
                <p>{{ config('global.business_address', '51 Bracken Road, Dublin, D18 CV48 Ireland') }}</p>
            </div>

        </div>
    </main>


</body>
</html>