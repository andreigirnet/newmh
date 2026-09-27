@extends('front.app')
@section('content')
    <div id="mainHero">
{{--        <img src="{{asset('images/banners/BackgroundIreland.webp')}}" class="warehouse" alt="">--}}
{{--        <img src="{{asset('images/banners/BackgroundIrelandMobile.webp')}}" class="warehouseImgMobile" alt="">--}}
{{--        <video autoplay muted loop class="warehouse" >--}}
{{--            <source src="video/bannerVideoBig.mp4" type="video/mp4">--}}
{{--        </video>--}}
        <div class="opacityComponent"></div>
        <div class="heroContent">
            <div class="mainBannerRight">
                <h1 class="mainBannerTitle">Manual Handling Ireland-<br> Online Training & Certificate Provider</h1>
                <div class="trust-badges-container">
                    <div class="trust-badge">
                        <span class="badge-icon">💶</span>
                        <div class="badge-text">
                            <strong>€{{config('global.course_price')}}</strong>
                            <span>No extra fees</span>
                        </div>
                    </div>
                    <div class="trust-badge">
                        <span class="badge-icon">🛡️</span>
                        <div class="badge-text">
                            <strong>Full Online</strong>
                            <span>Training</span>
                        </div>
                    </div>
                    <div class="trust-badge">
                        <span class="badge-icon">⭐</span>
                        <div class="badge-text">
                            <strong>Unlimited test</strong>
                            <span>Attempts</span>
                        </div>
                    </div>
                </div>
                <div class="mainBannerDescription" >Complete our online manual handling training at your own pace with clear lessons, practical guidance and a digital certificate on successful completion.</div>
                <a href="{{route('register')}}" class="modern-glow-btn">
                    Start Now
                </a>
            </div>
        </div>
        <div class="metrics-wrapper bg-brand-deep">
            <div class="metrics-grid">

                <div class="metric-card">
                    <span class="metric-value">100%</span>
                    <span class="metric-caption">ONLINE LEARNING</span>
                </div>

                <div class="metric-card">
                    <span class="metric-value">€{{config('global.course_price')}}</span>
                    <span class="metric-caption">No extra fees</span>
                </div>

                {{--            <div class="metric-card">--}}
                {{--                <span class="metric-value">30</span></span>--}}
                {{--                <span class="metric-caption">Minutes Course</span>--}}
                {{--            </div>--}}

                <div class="metric-card">
                    <span class="metric-value">24/7</span>
                    <span class="metric-caption">Train at your own pace</span>
                </div>

            </div>
        </div>

    </div>



    <div class="title" data-aos="fade-up">
        <div class="titleTextMain" >Manual Handling Training For Employees. Manual Handling Ireland</div>
        <div class="borderTitle"></div>
        <img src="{{asset("images/products/saleOver.png")}}" id="overImgDash" alt="">
    </div>
    <div class="productSection">
        {{-- code for manual handling card --}}
        <div class="course-card">

            <div class="course-image">
                <!-- Replace with actual image -->
                <img src="{{ asset('images/lifting.webp') }}" alt="Manual Handling Course">
            </div>

            <div class="course-content">
                <!-- Existing Content Below -->
                <div class="price-wrapper">
{{--                    <span class="old-price">€47</span>--}}
                    <span class="new-price">€{{ config('global.course_price') }}</span>
{{--                    <span class="discount-badge">30% OFF</span>--}}
                </div>
                <h1 class="course-title">Manual Handling Course</h1>
                <div class="handling-section">
                <span class="shield-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </span>
                    <div class="badges-wrapper">
                        <span class="acc-badge">Fast</span>
                        <span class="acc-badge">Secure</span>
                        <span class="acc-badge">No extra fees</span>
                    </div>
                </div>
                <!-- NEW: Top Green Feature Banner -->
                <div class="course-banner">
                    <div class="banner-left">
                        <span class="badge-pill">2-IN-1</span>
                        <span class="banner-text">Theory + Practical part included</span>
                    </div>
                    <div class="banner-checkmark">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </div>
                </div>

                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">Validity</span>
                        <span class="info-value">3 Years</span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Duration</span>
                        <span class="info-value">30 Minutes</span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Format</span>
                        <span class="info-value">100% Online</span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Certificate</span>
                        <span class="info-value">Included</span>
                    </div>
                </div>

                <a href="/register" class="linkStyle"><button class="course-btn">Buy Now</button></a>
            </div>
        </div>
    </div>

    <div class="langTitle" data-aos="fade-up">
        <div class="languageText">
            At Manual Handling Ireland, our Manual Handling Course is created to be clear, welcoming, and simple for everyone to follow. The Manual Handling Training features straightforward explanations, helpful videos, and easy-to-read materials so learners can feel confident throughout the course. Our training is designed to align with workplace safety concepts and provides an independent Certificate of Completion to confirm your instructional hours. We also provide Manual Handling Refresher materials for individuals who need to renew or update their internal workplace knowledge.
        </div>
        <div class="languagesSection">
            <img src="{{asset('images/flags/en.png')}}" alt="">
            <img src="{{asset('images/flags/pl.png')}}" alt="">
            <img src="{{asset('images/flags/ro.png')}}" alt="">
            <img src="{{asset('images/flags/ru.png')}}" alt="">
            <img src="{{asset('images/flags/sp.png')}}" alt="">
            <img src="{{asset('images/flags/ukr.png')}}" alt="">
        </div>
    </div>

    <section class="premium-bulk-wrapper">
        <div class="premium-bulk-container">

            <div class="premium-info-wing">
                <header class="premium-info-header">
                    <h2 class="premium-main-title" >
                        How Our Manual Handling Course Works: In 4 Easy Steps
                    </h2>
                    <div class="premium-divider"></div>
                </header>

                <div class="premium-step-list">
                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/22.png')}}" alt="Activate">
                        </div>
                        <p class="premium-step-text" >Create your account or login if you already have one</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/11.png')}}" alt="Purchase">
                        </div>
                        <p class="premium-step-text" >Purchase your manual handling course online</p>
                    </div>


                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/33.png')}}" alt="Achieve">
                        </div>
                        <p class="premium-step-text" >Learn & Achieve - Progress through the course, pass the assessment and online practical test and get your certificate</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/44.png')}}" alt="Support">
                        </div>
                        <p class="premium-step-text" >For technical support, please contact us at info@manualhandling-ireland.ie</p>
                    </div>
                </div>
            </div>

            <div class="premium-visual-wing">
                <img src="{{asset('images/landingBulk.webp')}}" class="premium-promo-img" alt="Bulk Purchase Offer">
            </div>

        </div>
    </section>



    <div class="cpdContainer">
        <div class="cpdInner">
            <div class="paddingCpd">
                <h2 class="cpdTitle" >Get Your Manual Handling Certificate Online Today</h2>
                <div class="cpdFlex">
                    <div class="cpdLeft">
                        <div class="cpdItems">
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/1.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Professional Training</div>
                                    <div class="cpdItemContent"  >Professional Course to obtain your  Manual Handling Training!</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/2.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Get your certificate</div>
                                    <div class="cpdItemContent"  >An Manual Handling Ireland Training, validates the skills you have acquired.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/3.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Stand Out From the Crowd</div>
                                    <div class="cpdItemContent"  >Include your Manual Handling Ireland Certification on your resume to outshine competitors.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/4.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Advance in Your Career</div>
                                    <div class="cpdItemContent"  >Showcase your Manual Handling Ireland Certification to prospective employers, highlighting your skills and capabilities.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cpdRight">
                        <img src="{{asset('images/certExample.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="imh-about-section mh-4" data-aos="fade-up">
        <div class="imh-container">
            <div class="imh-header">
                <span class="imh-subtitle">Excellence in Safety</span>
                <h2 class="imh-title">What is Manual Handling Ireland?</h2>
                <div class="imh-divider"></div>
            </div>

            <div class="imh-content-grid">
                <div class="imh-main-text">
                    <p class="imh-lead-para" >
                        Welcome to manualhandling-ireland.ie, your premier destination for top-notch online Manual Handling training in Ireland...
                    </p>
                    <p class="imh-body-para" >
                        At Manual Handling Ireland, we take immense pride in the integrity and excellence of our safety training services...
                    </p>

                    <div class="imh-contact-box">
                        <p >For inquiries, student support, sales, or technical assistance, reach out via chat or email.</p>
                        <a href="mailto:info@manualhandling-ireland.ie" class="imh-email-link">info@manualhandling-ireland.ie</a>
                    </div>
                </div>

                <div class="imh-trust-card">
                    <div class="imh-badge-item">
                        <div class="imh-icon">🌍</div>
                        <div>
                            <strong>Working Compliant</strong>
                            <p>Compliant training skills</p>
                        </div>
                    </div>
                    <div class="imh-badge-item">
                        <div class="imh-icon">🎓</div>
                        <div>
                            <strong>Expertized Instructors</strong>
                            <p>Professionaly trained instructors</p>
                        </div>
                    </div>
                    <div class="imh-badge-item">
                        <div class="imh-icon">🛡️</div>
                        <div>
                            <strong>100% Digital</strong>
                            <p>Secure, efficient, and accessible anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="exclusive-benefits-area">
        <div class="exclusive-benefits-grid">

            <div class="exclusive-col" data-aos="fade-up">
                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #e60b31;">
                        <img src="{{asset('images/logo/home.svg')}}" alt="Home">
                    </div>
                    <h3 class="exclusive-title">LEARN ON YOUR OWN SCHEDULE</h3>
                    <p class="exclusive-text">
                        Complete your <strong>Manual Handling Course in Ireland</strong> online at a time and place that suits your lifestyle while working toward your <strong>Manual Handling Certification</strong>.
                    </p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #c3d600;">
                        <img src="{{asset('images/logo/clock.svg')}}" alt="Clock">
                    </div>
                    <h3 class="exclusive-title">SAVE TIME WITH VIRTUAL LEARNING</h3>
                    <p class="exclusive-text">
                        Take your <strong>Manual Handling Course</strong> online and avoid travel time or waiting for classroom training sessions to begin.
                    </p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #345cb3;">
                        <img src="{{asset('images/logo/wallet.svg')}}" alt="Wallet">
                    </div>
                    <h3 class="exclusive-title">REDUCE COSTS BY STUDYING DIGITALLY</h3>
                    <p class="exclusive-text">
                        Our online <strong>Manual Handling Ireland training</strong> provides an affordable way to achieve your recognised <strong>Manual Handling Certification</strong>.
                    </p>
                </div>
            </div>

            <div class="exclusive-hero-center" data-aos="zoom-in">
                <img src="{{asset('images/indian.png')}}" class="indianimage" alt="Manual Handling Course Ireland">
            </div>

            <div class="exclusive-col" data-aos="fade-up" data-aos-delay="100">
                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f49c12;">
                        <img src="{{asset('images/logo/download.svg')}}" alt="Download">
                    </div>
                    <h3 class="exclusive-title">STUDY WHENEVER YOU WANT</h3>
                    <p class="exclusive-text">
                        Progress through your <strong>Manual Handling Course</strong> at your own pace and complete your <strong>Manual Handling Certification</strong> from anywhere with internet access.
                    </p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #356ce6;">
                        <img src="{{asset('images/logo/internet.svg')}}" alt="Global">
                    </div>
                    <h3 class="exclusive-title">MAXIMIZE EFFICIENCY</h3>
                    <p class="exclusive-text">
                        Our <strong>Manual Handling Ireland training</strong> allows you to skip commuting and focus on learning quickly and efficiently.
                    </p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f91819;">
                        <img src="{{asset('images/logo/high-quality.svg')}}" alt="Quality">
                    </div>
                    <h3 class="exclusive-title">AFFORDABLE TRAINING</h3>
                    <p class="exclusive-text">
                        This online <strong>Manual Handling Course in Ireland</strong> offers a cost-effective way to gain a recognised <strong>Manual Handling Certification</strong>.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <div class="title spaceTop" data-aos="fade-up" >
        <div class="titleText sizeTextMobile" >Expert Online Manual Handling Training | manualhandling-ireland.ie</div>
        <div class="borderTitle"></div>
    </div>

    <section class="imh-expert-section" data-aos="fade-up">
        <div class="imh-expert-container">

            <div class="imh-expert-main-grid">
                <div class="imh-expert-narrative">
                    <p >At manualhandling-ireland.ie, we understand the critical importance...</p>

                    <div class="imh-expert-cta-card">
                        <h3 >Elevate your workplace safety standards...</h3>
                        <a href="mailto:info@manualhandling-ireland.ie" class="imh-expert-btn">Email Us Today</a>
                    </div>
                </div>

                <div class="imh-expert-features">
                    <h4 class="imh-feature-heading" >Why Choose manualhandling-ireland.ie?</h4>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">📋</span>
                        <div>
                            <strong>Modern Curriculum</strong>
                            <p>Latest industry standards and best practices.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">💻</span>
                        <div>
                            <strong>Interactive Learning</strong>
                            <p>Engaging modules that make safety training effective.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">🏅</span>
                        <div>
                            <strong>Completion Certification</strong>
                            <p>Showcase the skills you aquired with us</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">🕒</span>
                        <div>
                            <strong>24/7 Access</strong>
                            <p>Learn at your own pace, anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="imh-expert-footer">
                <p >Ensure your team's safety and efficiency—choose manualhandling-ireland.ie today!</p>
            </div>
        </div>
    </section>
    <section class="mh-faq" x-data="{ search: '' }">
        <div class="mh-faq-wrapper">

            <header class="mh-faq-header">
                <span class="mh-faq-badge">Training Compliance</span>
                <h2 class="mh-faq-title">Manual Handling Ireland: Expert FAQs</h2>
            </header>

            <div class="mh-faq-list">

                <!-- FAQ 1 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'is manual handling training a requirement in ireland?  law'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Is this manual handling course Theory + Practice</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                        Yes, after you purchase the course, you will be able to start it immediately and go through the theory slides. At the end, you will have to <strong>pass a theory test</strong>. After successfully passing the theory test, you will need to record a video of yourself lifting an object while following proper <strong>manual handling techniques</strong> and send it to us via WhatsApp for approval. Our instructor will review the video and, once approved, will issue your certificate.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'how long is a manual handling certificate valid for ireland? expiry date'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">How long is a Manual Handling certificate valid for in Ireland?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                        The manual handling certificate is proof that you have successfully completed the course with us and is valid for <strong>3 years</strong>. You can check your manual handling certificate validity here:  <strong> <a href="{{ route('front.verify') }} "> verify certificate</a>    </strong>               
                    </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'can i do manual handling training online ireland?  compliant'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Can I complete my Manual Handling course fully online?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                    Our course is designed to be completed <strong>100% online</strong>. The theory test and practical assessment can be completed from anywhere. For the practical assessment, you will need to send us a video via WhatsApp of yourself performing a lift while following proper <strong>manual handling techniques.   </strong></p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'what is the tile assessment framework? risk assessment'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">When the certificate is issued?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                           <strong> The certificate </strong> is issued after you successfully submit the <strong>practical video assessment</strong> via WhatsApp <strong>{{ config('global.phone') }}</strong>. Once our instructor has reviewed and approved the video, your certificate will be issued.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'who pays for manual handling training ireland? employer duties'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">What is the instructor review time?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                        After you send us the video, please allow <strong>approximately 10 minutes</strong> for review <strong>during business hours</strong>. In rare cases, there may be a delay of a few hours during peak periods.
                        </p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'do office workers need manual handling training? retailers '.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">How long is this course?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                            Expect around 25 minutes for manual handling theory part and theory test. And another 5 minutes to create the video and send it to us for review for manual handling practical part.
                        </p>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'what if i dont pass from the first time fail test unlimited attempts'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">What if I don't pass the first time?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                            Don't worry if you don't pass right away. You have <strong>unlimited attempts</strong> to retake and pass the test at no extra cost until you successfully complete the course.
                        </p>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'who is issuing the certificate'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Who is issuing the certificate?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                            The certificate is issued directly by our private company as official proof of course completion. It verifies that you have successfully completed our comprehensive training modules and met all necessary safety guidelines.
                        </p>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'manual handling vs people handling patient care'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Are this trainings accepted in ireland?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                            Our courses are designed to meet the <strong>Irish industry standards</strong>. We have got professionally trained instructors who are reviewing your practical skills.
                        </p>
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'can i do the course from mobile phone mobile device smartphone'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Can I complete the course from my mobile phone?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"   x-cloak>
                        <p class="mh-faq-text">
                            Yes, absolutely. Our course is fully optimized for mobile phones and tablets, allowing you to complete your training conveniently on any device. Additionally, the course is available in <strong>5 different languages</strong>.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

<section class="mh-info-section" x-data="{ activeTab: 1 }">
    <div class="mh-info-container">

        <!-- Left Side: Educational Content -->
        <div class="mh-info-content">
            <span class="mh-info-badge">Manual Handling Training</span>

            <h2 class="mh-info-title">
                The Essential Guide to <strong>Manual Handling in Ireland</strong>
            </h2>

            <p class="mh-info-lead">
                If you are looking for a <strong>Manual Handling Certificate in Ireland</strong>, it is important to understand the general safety principles and training considerations associated with manual handling at work.
            </p>

            <div class="mh-info-text-block">
                <p>
                    <strong>Manual Handling Ireland</strong> involves physical activities such as
                    <i>lifting, putting down, pushing, pulling, carrying, or moving</i>
                    a load by hand or bodily force. These activities can present a risk of injury when performed incorrectly or without appropriate precautions. Whether you are in Dublin, Cork, Galway, or elsewhere in Ireland, safe manual handling practices are an important part of workplace safety.
                </p>

                <p>
                    Irish workplace safety rules place responsibilities on employers to identify and manage risks associated with manual handling activities. Where appropriate, workers may receive <strong>manual handling training</strong> and instruction on safe handling techniques.
                </p>

                <p>
                    Suitable <strong>manual handling training</strong> can help workers understand safer lifting and handling methods and reduce the risk of musculoskeletal injuries, including back and other physical injuries. Completing a <strong>Manual Handling Certificate</strong> can provide evidence that you have completed a manual handling training course.
                </p>
            </div>

        
        </div>

        <!-- Right Side: Interactive Modern Cards -->
        <div class="mh-info-cards">

            <div class="mh-info-card"
                 :class="activeTab === 1 ? 'mh-info-card--active' : ''"
                 @mouseenter="activeTab = 1">
                <div class="mh-info-card-icon">STEP 01</div>

                <h3>Complete Your Training</h3>

                <p>
                    Complete your <strong>Manual Handling Certificate</strong> course through our online learning platform. The course includes <strong>online manual handling theory</strong> followed by an online practical lesson. Read faq's for more info.
                </p>
            </div>

            <div class="mh-info-card"
                 :class="activeTab === 2 ? 'mh-info-card--active' : ''"
                 @mouseenter="activeTab = 2">
                <div class="mh-info-card-icon">STEP 02</div>

                <h3>Understand Workplace Responsibilities</h3>

                <p>
                    Employers have responsibilities for identifying and managing workplace risks. <strong>Manual handling training</strong> can help workers understand safe handling techniques and the risks associated with manual handling activities.
                </p>
            </div>

            <div class="mh-info-card"
                 :class="activeTab === 3 ? 'mh-info-card--active' : ''"
                 @mouseenter="activeTab = 3">
                <div class="mh-info-card-icon">STEP 03</div>

                <h3>Learn Safer Techniques</h3>

                <p>
                    Learn practical principles for safer manual handling, including how to consider the <strong>Task, Individual, Load, and Environment</strong> when preparing to handle a load.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="mh-steps" x-data="{ activeStep: 1 }">
    <div class="mh-steps-wrapper">

        <header class="mh-steps-header">
            <span class="mh-steps-badge">Simple & Fast Process</span>

            <h2 class="mh-steps-title">
                4 Steps to Your <strong>Manual Handling Ireland</strong>
            </h2>

            <p class="mh-steps-subtitle">
                Start your training today and complete your course in four simple steps.
            </p>
        </header>

        <div class="mh-steps-grid">

            <!-- Step 1 -->
            <div class="mh-steps-card"
                 @mouseenter="activeStep = 1"
                 :class="activeStep === 1 ? 'mh-steps-card--active' : ''">

                <div class="mh-steps-number">01</div>

                <h3>Register</h3>

                <p>
                    Create an account on our secure platform to access your
                    <strong>Manual Handling Ireland</strong>. Complete the purchase and start the course immediately.
                </p>
            </div>

            <div class="mh-steps-card"
                 @mouseenter="activeStep = 2"
                 :class="activeStep === 2 ? 'mh-steps-card--active' : ''">

                <div class="mh-steps-number">02</div>

                <h3>Online Training</h3>

                <p>
                    Complete your <strong>Manual Handling Online Training</strong>
                    through our online learning modules. Study manual handling
                    principles, safe lifting techniques, risk awareness, and
                    practical guidance at your own pace.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="mh-steps-card"
                 @mouseenter="activeStep = 3"
                 :class="activeStep === 3 ? 'mh-steps-card--active' : ''">

                <div class="mh-steps-number">03</div>

                <h3>Submit Assessment</h3>

                <p>
                    After completing the theory, <strong>submit the assessment</strong>
                    for review. You will be asked to provide a practical lifting
                    video via WhatsApp, where our instructor will review your
                    manual handling technique.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="mh-steps-card"
                 @mouseenter="activeStep = 4"
                 :class="activeStep === 4 ? 'mh-steps-card--active' : ''">

                <div class="mh-steps-number">04</div>

                <h3>Download Certificate</h3>

                <p>
                    Once your assessment has been successfully reviewed, you can
                    <strong>download your Manual Handling Certificate</strong>
                    from your dashboard. The certificate provides evidence that
                    you have completed the training course and assessment.
                </p>
            </div>

        </div>

        <div class="mh-steps-action">
            <a href="/register" class="mh-steps-btn">
                Register and Start Now
            </a>
        </div>

    </div>
</section>


@endsection
