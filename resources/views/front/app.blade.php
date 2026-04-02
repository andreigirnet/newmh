<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>{{ config('app.name', 'Laravel') }}: Manual Handling Training Ireland For Just €25</title>
    {{-- Meta description --}}
    <meta name="description" content="Manual Handling Ireland - Manual Handling course online with instant certification. Get your Manual Handling training in 45 mins and get your certificate immediately.">
    <meta name="keywords" content="Manual Handling Courses Online, Best Manual Handling Training Ireland, Manual Handling Certification & Courses, Manual Handling Instructor Certification, Expert Manual Handling Assessment, Compliance with Manual Handling Regulations, Safety in Manual Handling Techniques, Ergonomic Lifting Practices, Efficient Load Handling Methods, Preventing Manual Handling Injuries, Top-Rated Manual Handling Practices in Ireland, Manual Handling Guidelines and Certification, Advanced Manual Handling Training Solutions, Certified Manual Handling Programs, Affordable Manual Handling Certification in Ireland, Professional Manual Handling Courses">
    {{-- Open Graph / Facebook --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-ie" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-gb" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
    <meta name="format-detection" content="telephone=yes">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Online Safety Courses Ireland | CPD Certified - {{ config('app.name') }}">
    <meta property="og:description" content="Get certified in 1 hour with our fully online safety courses. Recognized in Ireland, UK, and Europe. Unlimited exam attempts included.">
    <meta property="og:image:alt" content="Ireland Safety Course - Accredited Online Training">
    <meta property="og:image" content="https://www.irelandsafetycourse.com/images/metaImage.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow" rel="stylesheet">
    {{-- Css --}}
    <link rel = "icon" href ="{{asset('images/logo/flavicons.ico')}}" type = "image/x-icon">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/adminProduct.css")}}">
    <script src="js/bulkCalculator.js" defer></script>
    <script src="js/bulkLightCalc.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<meta name="google-site-verification" content="LzejX2Dd-6oj32ZQRq5981tz74cTlalGjMXEwe6ZeiI" />


</head>
<body x-data="app()">

@include("frontIncludes/hamburger")
@include("frontIncludes/responsiveNav")
@include("frontIncludes/frontNav")
{{--@include("frontIncludes/subNav")--}}
{{--@include("frontIncludes/subNavMobile")--}}

@yield('content')


<script>
    window.replainSettings = { id: 'b5006bb6-d4d8-4b22-9e0c-9486aea3ca22' };
    (function(u){var s=document.createElement('script');s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');
</script>
@include("frontIncludes/registerInclude")
@include("frontIncludes/footer")
@include("frontIncludes/brandSwiper")
<script src="{{asset("js/hamburgerAction.js")}}"></script>
<script src="{{asset("js/brandSwiper.js")}}"></script>
<script src="{{asset("js/accordion.js")}}"></script>
<script src="{{asset("js/review.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset("js/swiper.js")}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{asset('js/mainScript.js')}}"></script>
<script>
    AOS.init();
</script>
{{--<script src="{{asset('js/prevent.js')}}"></script>--}}
<div id="cookiePrompt" class="cookie-container">
    <div class="cookie-content">
        <div class="cookie-text">
            <h4>&#127850 We protect your privacy</h4>
            <p>We use cookies to enhance your experience. By clicking "Accept", you agree to our terms.</p>
        </div>
        <div class="cookie-actions">
            <button class="btn-decline" onclick="closeCookies()">Decline</button>
            <button class="btn-accept" onclick="acceptCookies()">Accept</button>
        </div>
    </div>
</div>
<script src="{{asset('js/cookie.js')}}"></script>
</body>
</html>
