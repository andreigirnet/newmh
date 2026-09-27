<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Title --}}
    <title>{{ config('app.name', 'Laravel') }}: Manual Handling Training Ireland For Just €30</title>
    
    {{-- Meta description --}}
    <meta name="description" content="Manual Handling Ireland - Manual Handling course online with certification. Get your Manual Handling training in 30 mins and get your certificate immediately.">
    <meta name="keywords" content="Manual Handling Courses Online, Manual Handling Training Ireland, Manual Handling Certification & Courses, Manual Handling Certification, Expert Manual Handling Assessment, Compliance with Manual Handling Regulations, Safety in Manual Handling Techniques, Ergonomic Lifting Practices, Efficient Load Handling Methods, Preventing Manual Handling Injuries, Manual Handling Practices in Ireland, Manual Handling Guidelines and Certification, Advanced Manual Handling Training Solutions, Certified Manual Handling Programs, Affordable Manual Handling Certification in Ireland, Professional Manual Handling Courses">
    
    {{-- Canonical & Localization --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-ie" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-gb" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
    <meta name="format-detection" content="telephone=yes">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Online Safety Courses Ireland | Instant Certificate - {{ config('app.name') }}">
    <meta property="og:description" content="Complete your online safety modules in 1 hour. Includes theory, practical alignment, and an independent certificate of completion.">
    <meta property="og:image" content="{{ asset('images/metaImage.png') }}">
    <meta property="og:image:alt" content="Manual Handling Ireland - Safety Online Training">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow" rel="stylesheet">
    
    {{-- CSS --}}
    <link rel="icon" href="{{ asset('images/logo/flavicons.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/adminProduct.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    {{-- Header Scripts --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- <script src="{{ asset('js/bulkCalculator.js') }}" defer></script> -->

    {{-- Google tag (gtag.js) --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ND836HRGN2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-ND836HRGN2');
    </script>
</head>

<body x-data="app()" class="bodyApp">
    @include("frontIncludes/hamburger")
    @include("frontIncludes/responsiveNav")
    @include("frontIncludes/frontNav")

    @yield('content')

    @include("frontIncludes/footer")
    @include("frontIncludes/brandSwiper")

    {{-- Footer Scripts --}}
    <script src="{{ asset('js/hamburgerAction.js') }}"></script>
    <!-- <script src="{{ asset('js/brandSwiper.js') }}"></script> -->
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="{{ asset('js/review.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/mainScript.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <!-- <script src="{{ asset('js/prevent.js') }}"></script> -->
    <script src="{{ asset('js/cookie.js') }}"></script>
    <script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=FCKWCyQL7PYg"></script>

    {{-- Cookie Prompt Component --}}
    <div id="cookiePrompt" class="cookie-container">
        <div class="cookie-content">
            <div class="cookie-text">
                <h4>&#127850; We protect your privacy</h4>
                <p>We use cookies to enhance your experience. By clicking "Accept", you agree to our terms.</p>
            </div>
            <div class="cookie-actions">
                <button class="btn-decline" onclick="closeCookies()">Decline</button>
                <button class="btn-accept" onclick="acceptCookies()">Accept</button>
            </div>
        </div>
    </div>

    {{-- Sticky CTA Bar --}}
    <div id="sticky-cta-bar" class="sticky-bar">
        <div class="sticky-content">
            <span class="sticky-title">Manual Handling</span>
            <span class="sticky-sub">€{{ config('global.course_price') }} • Certificate included</span>
        </div>
        <a href="{{ route('home') }}" class="sticky-btn">Start now →</a>
    </div>

{{-- FAQ Schema Markup --}}
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is Manual Handling training a requirement in Ireland?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, promoting proper handling education is an important priority for organizations to ensure team members involved in physical tasks receive appropriate guidance and instruction."
              }
            },
            {
              "@type": "Question",
              "name": "How long is a Manual Handling certificate valid for in Ireland?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The industry standard and recommended practice is that a Manual Handling completion certificate remains valid for 3 years, though some specialized environments may encourage refreshers every 2 years."
              }
            },
            {
              "@type": "Question",
              "name": "Can I complete my Manual Handling course fully online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "To meet high standards of comprehensive learning, training combines theoretical modules with practical demonstration awareness to ensure full professional readiness."
              }
            },
            {
              "@type": "Question",
              "name": "What is the TILE risk assessment framework?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "TILE stands for Task, Individual, Load, and Environment. It is a core evaluation tool taught to help employees identify and manage factors before beginning any physical handling activity."
              }
            },
            {
              "@type": "Question",
              "name": "Who is responsible for the cost of manual handling training?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Organizations generally support professional development by providing and coordinating necessary training and educational resources for their team members."
              }
            },
            {
              "@type": "Question",
              "name": "Do office and retail workers require a Manual Handling certificate?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. If office or retail roles involve lifting boxes, moving equipment, or handling inventory, structured manual handling orientation helps ensure safe everyday practices."
              }
            },
            {
              "@type": "Question",
              "name": "What are best practices regarding training standards?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Maintaining up-to-date staff training ensures operational readiness, supports team well-being, and aligns with professional corporate standards."
              }
            },
            {
              "@type": "Question",
              "name": "Is there a maximum weight limit for lifting at work?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Guidelines emphasize evaluating each situation based on the Task, Individual, Load, and Environment rather than relying on a single fixed weight limit."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Manual Handling and People Handling?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Manual Handling applies to inanimate objects, equipment, and general loads. People Handling is a specialized healthcare curriculum focused on patient and resident assistance."
              }
            },
            {
              "@type": "Question",
              "name": "How are Manual Handling certificates recognized?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "All certificates are issued following comprehensive instruction guided by certified professionals, ensuring they are widely recognized by employers and industry standards."
              }
            }
          ]
        }
    </script>
</body>
</html>