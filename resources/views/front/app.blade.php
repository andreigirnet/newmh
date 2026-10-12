<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Title --}}
    <title>{{ config('app.name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}: Manual Handling Training Course Ireland | €30</title>
    
    {{-- Meta description (Super Claim Safe & Factually Verified) --}}
    <meta name="description" content="Online Manual Handling training course in Ireland provided by Progressive Velocity Fast Solutions Limited. Complete theory modules online and submit a practical lift video for instructor review. €30 flat fee.">
    
    {{-- Canonical & Localization --}}
    <link rel="canonical" href="{{ config('app.url') }}{{ request()->getRequestUri() }}">
    <link rel="alternate" hreflang="en-ie" href="{{ config('app.url') }}{{ request()->getRequestUri() }}">
    <link rel="alternate" hreflang="en-gb" href="{{ config('app.url') }}{{ request()->getRequestUri() }}">
    <link rel="alternate" hreflang="x-default" href="{{ config('app.url') }}{{ request()->getRequestUri() }}">
    <meta name="format-detection" content="telephone=yes">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Online Manual Handling Course Ireland | €30 - {{ config('app.name') }}">
    <meta property="og:description" content="Complete your online safety theory modules, pass the test, submit your practical lift video via WhatsApp for human instructor review, and receive your certificate of completion. €30 flat.">
    <meta property="og:image" content="{{ asset('images/metaImage.png') }}">
    <meta property="og:image:alt" content="Manual Handling Training Ireland">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    {{-- Tailwind CSS Play CDN (Fixes missing styles instantly) --}}
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

    {{-- CSS & Icons --}}
    <link rel="icon" href="{{ asset('images/logo/flavicons.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    {{-- Header Scripts --}}
    <script src="//unpkg.com/alpinejs" defer></script>


</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-600 selection:text-white" x-data="{ mobileMenuOpen: false }">

    
   @include('frontIncludes.nav')

   @yield('content')

   @include('frontIncludes.footer')

    {{-- AOS Initialization --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>
</body>
</html>