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
{{--    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>--}}
{{--    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>



</head>
<!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ND836HRGN2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ND836HRGN2');
</script>
<body x-data="app()" class="bodyApp">
@include("frontIncludes/hamburger")
@include("frontIncludes/responsiveNav")
@include("frontIncludes/frontNav")
@include("frontIncludes/subNav")
{{--@include("frontIncludes/subNavMobile")--}}

@yield('content')

<script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=FCKWCyQL7PYg"></script>
{{--<script>--}}
{{--    window.replainSettings = { id: 'b5006bb6-d4d8-4b22-9e0c-9486aea3ca22' };--}}
{{--    (function(u){var s=document.createElement('script');s.async=true;s.src=u;--}}
{{--        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);--}}
{{--    })('https://widget.replain.cc/dist/client.js');--}}
{{--</script>--}}
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

<script src="{{asset('js/prevent.js')}}"></script>

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
<div id="sticky-cta-bar" class="sticky-bar">
    <div class="sticky-content">
        <span class="sticky-title">Manual Handling</span>
        <span class="sticky-sub">€{{config('global.course_price')}} • Certificate included</span>
    </div>
    <a href="{{route('home')}}" class="sticky-btn">Start now →</a>
</div>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is Manual Handling training a legal requirement in Ireland?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, under the Safety, Health and Welfare at Work (General Application) Regulations 2007, it is a strict legal requirement for Irish employers to provide manual handling training to staff at risk of injury."
          }
        },
        {
          "@type": "Question",
          "name": "How long is a Manual Handling certificate valid for in Ireland?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The industry standard and HSA best practice guideline is that a Manual Handling certificate remains valid for 3 years, though some high-risk sectors may require refreshers every 2 years."
          }
        },
        {
          "@type": "Question",
          "name": "Can I complete my Manual Handling course fully online?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To be HSA compliant in Ireland, training must include a practical assessment. We provide a blended learning solution: online theory followed by a practical demonstration assessed by a QQI Level 6 Instructor."
          }
        },
        {
          "@type": "Question",
          "name": "What is the TILE risk assessment framework?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TILE stands for Task, Individual, Load, and Environment. It is the core risk assessment tool taught in Ireland to help employees identify hazards before beginning any manual handling activity."
          }
        },
        {
          "@type": "Question",
          "name": "Who is responsible for the cost of manual handling training?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the Safety, Health and Welfare at Work Act 2005, the employer is legally responsible for providing and paying for all health and safety training for their employees."
          }
        },
        {
          "@type": "Question",
          "name": "Do office and retail workers require a Manual Handling certificate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. If office or retail roles involve lifting boxes, moving equipment, or handling deliveries that could cause injury, the HSA requires a certified manual handling course."
          }
        },
        {
          "@type": "Question",
          "name": "What are the penalties for non-compliance with HSA training?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non-compliance can result in HSA prosecutions, heavy fines, and the potential voiding of Employer Liability Insurance in the event of an accident claim."
          }
        },
        {
          "@type": "Question",
          "name": "Is there a legal maximum weight limit for lifting at work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Irish law does not set a fixed weight limit. Instead, it requires a risk assessment based on the Task, Individual, Load, and Environment to determine safe lifting limits."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Manual Handling and People Handling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Manual Handling applies to inanimate objects (boxes, tools). People Handling is a specialized healthcare course for moving patients and residents safely."
          }
        },
        {
          "@type": "Question",
          "name": "Are your Manual Handling certificates recognized by the HSA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All certificates are issued following training by QQI Level 6 Certified Instructors, ensuring they are recognized by the HSA, insurers, and Irish employers."
          }
        }
      ]
    }
</script>
</body>
</html>
