<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Signed Out | {{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</title>
    
    <meta name="description" content="You have been successfully signed out of your manual handling training portal account.">

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
                <a href="/" class="inline-flex items-center gap-2.5 mb-3">
                    <div class="w-12 h-12 rounded-2xl bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg shadow-blue-500/20">
                        P
                    </div>
                </a>
                <div class="font-heading font-extrabold text-slate-900 text-base sm:text-lg tracking-tight">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</div>
                <div class="text-xs text-blue-600 font-semibold tracking-wider uppercase mt-0.5">Manual Handling Training Ireland — €30 Flat</div>
            </div>

            {{-- Auth Card --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-xl p-8 sm:p-10 text-center relative overflow-hidden">
                
                {{-- Logout Success Icon / Illustration --}}
                <div class="w-20 h-20 bg-blue-50 border border-blue-100 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                </div>

                <h1 class="font-heading font-extrabold text-2xl sm:text-3xl text-slate-900 tracking-tight mb-2">See You Again!</h1>
                <p class="text-slate-600 text-sm sm:text-base mb-8 max-w-sm mx-auto leading-relaxed">
                    You have been successfully signed out of your training account.
                </p>

                <div class="space-y-4">
                    <a href="{{ route('login') }}" class="w-full block bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-600/25 transition-all text-sm">
                        Log Back In
                    </a>
                    <a href="/" class="w-full block bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold py-3.5 rounded-xl transition-all text-sm">
                        Return to Home
                    </a>
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