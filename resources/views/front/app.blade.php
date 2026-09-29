<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Title --}}
    <title>{{ config('app.name', 'Laravel') }}: Manual Handling Training Ireland For Just €30</title>
    
    {{-- Meta description --}}
    <meta name="description" content="Manual Handling Ireland - Manual Handling Course Online. Get your Manual Handling Training in 30 Mins Online">
    <meta name="keywords" content="Manual Handling Courses Online, Manual Handling Training Ireland, Manual HandlingOnline Courses, Expert Manual Handling Assessment, Safety in Manual Handling Techniques, Ergonomic Lifting Practices, Efficient Load Handling Methods, Preventing Manual Handling Injuries, Manual Handling Practices in Ireland, Manual Handling Guidelines, Advanced Manual Handling Training Solutions, Certified Manual Handling Programs, Affordable Manual Handling Training in Ireland, Professional Manual Handling Courses">
    
    {{-- Canonical & Localization --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-ie" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-gb" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
    <meta name="format-detection" content="telephone=yes">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Online Manual Handling Ireland | Manual Handling Course - {{ config('app.name') }}">
    <meta property="og:description" content="Complete your online safety modules in 30 minutes. Includes theory, practical assesment, and an independent certificate of completion.">
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ND836HRGN2" type="text/plain" data-cookie-category="analytics"></script>
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
        <a href="{{ route('register') }}" class="sticky-btn">Start now →</a>
    </div>

{{-- FAQ Schema Markup --}}
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is this manual handling course Theory + Practice",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, after you purchase the course, you will be able to start it immediately and go through the theory slides. At the end, you will have to pass a theory test. After successfully passing the theory test, you will need to record a video of yourself lifting an object while following proper manual handling techniques and send it to us via WhatsApp for approval. Our instructor will review the video and, once approved, will issue your certificate."
      }
    },
    {
      "@type": "Question",
      "name": "How long is a Manual Handling certificate valid for in Ireland?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The manual handling certificate is proof that you have successfully completed the course with us and is valid for 3 years. You can check your manual handling certificate validity on our verification page."
      }
    },
    {
      "@type": "Question",
      "name": "Can I complete my Manual Handling course fully online?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our course is designed to be completed 100% online. The theory test and practical assessment can be completed from anywhere. For the practical assessment, you will need to send us a video via WhatsApp of yourself performing a lift while following proper manual handling techniques."
      }
    },
    {
      "@type": "Question",
      "name": "When the certificate is issued?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The certificate is issued after you successfully submit the practical video assessment via WhatsApp. Once our instructor has reviewed and approved the video, your certificate will be issued."
      }
    },
    {
      "@type": "Question",
      "name": "What is the instructor review time?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "After you send us the video, please allow approximately 10 minutes for review during business hours. In rare cases, there may be a delay of a few hours during peak periods."
      }
    },
    {
      "@type": "Question",
      "name": "How long is this course?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Expect around 25 minutes for manual handling theory part and theory test. And another 5 minutes to create the video and send it to us for review for manual handling practical part."
      }
    },
    {
      "@type": "Question",
      "name": "What if I don't pass the first time?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Don't worry if you don't pass right away. You have unlimited attempts to retake and pass the test at no extra cost until you successfully complete the course."
      }
    },
    {
      "@type": "Question",
      "name": "Who is issuing the certificate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The certificate is issued directly by our private company as official proof of course completion. It verifies that you have successfully completed our comprehensive training modules and met all necessary safety guidelines."
      }
    },
    {
      "@type": "Question",
      "name": "Are this trainings accepted in ireland?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our courses are designed to meet the Irish industry standards. We have got professionally trained instructors who are reviewing your practical skills."
      }
    },
    {
      "@type": "Question",
      "name": "Can I complete the course from my mobile phone?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, absolutely. Our course is fully optimized for mobile phones and tablets, allowing you to complete your training conveniently on any device. Additionally, the course is available in 6 different languages."
      }
    }
  ]
}
</script>
</body>
</html>