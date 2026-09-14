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
                            <span>Instant Access</span>
                        </div>
                    </div>
                    <div class="trust-badge">
                        <span class="badge-icon">🛡️</span>
                        <div class="badge-text">
                            <strong>100% Refund</strong>
                            <span>Guarantee</span>
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
                    <span class="metric-caption">Course & certificate</span>
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
        <div class="titleTextMain" >Manual Handling Ireland Online Manual Handling Training for employees</div>
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
                    <span class="new-price">€30</span>
{{--                    <span class="discount-badge">30% OFF</span>--}}
                </div>
                <h1 class="course-title">Manual Handling Course</h1>
                <div class="accreditation-section">
                <span class="shield-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </span>
                    <div class="badges-wrapper">
                        <span class="acc-badge">Fast</span>
                        <span class="acc-badge">Secure</span>
                        <span class="acc-badge">Instant</span>
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
                        <span class="info-value">Instant</span>
                    </div>
                </div>

                <a href="/register" class="linkStyle"><button class="course-btn">Buy Now</button></a>
            </div>
        </div>
    </div>

    <div class="langTitle" data-aos="fade-up">
        <div class="languageText">
            At Manual Handling Ireland, our Manual Handling Course is created to be clear, welcoming, and simple for everyone to follow. The Manual Handling Training features straightforward explanations, helpful videos, and easy-to-read materials so learners can feel confident throughout the course. Our training is designed to align with workplace safety concepts and provides an independent Certificate of Completion issued by Progressive Velocity Fast Solutions Limited to document your instructional hours. We also provide Manual Handling Refresher materials for individuals who need to renew or update their internal workplace knowledge.
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
                            <img src="{{asset('images/icons/11.png')}}" alt="Purchase">
                        </div>
                        <p class="premium-step-text" >Purchase your training license online.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/22.png')}}" alt="Activate">
                        </div>
                        <p class="premium-step-text" >Activate your account and begin your Manual Handling modules immediately.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/33.png')}}" alt="Achieve">
                        </div>
                        <p class="premium-step-text" >Learn & Achieve - Progress through the course, pass the assessment, and instantly download your Manual Handling Certificate.</p>
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
                <h2 class="cpdTitle" >Get Your Manual Handling Certificate Online Today - Instant Downloand</h2>
                <div class="cpdFlex">
                    <div class="cpdLeft">
                        <div class="cpdItems">
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/1.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Compliant Training</div>
                                    <div class="cpdItemContent"  >Compliant Course to obtain your  Manual Handling Training!</div>
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

    <section class="imh-about-section" data-aos="fade-up">
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
                            <p>Fully compliant certifications for you job.</p>
                        </div>
                    </div>
                    <div class="imh-badge-item">
                        <div class="imh-icon">🎓</div>
                        <div>
                            <strong>Expertized Instructors</strong>
                            <p>Vaslty experienced instructors</p>
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

    <div class="title">
        <div class="titleText sizeTextMobile" >Get your Certificate</div>
        <div class="borderTitle"></div>
        <a href="{{route('register')}}"><div class="pulse-button" data-aos="fade-up">Pay / Register Here</div></a>
    </div>

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
                            <strong>Instant Certification</strong>
                            <p>Showcase compliance with recognized safety regulations.</p>
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
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'is manual handling training a legal requirement in ireland?  law'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Is Manual Handling training a legal requirement in Ireland?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
                        <p class="mh-faq-text">
                            Yes, under the <strong>Safety, Health and Welfare at Work (General Application) Regulations 2007</strong>, it is a strict legal requirement for Irish employers to provide manual handling training. The statutory workplace body mandates that staff must be trained if they are required to move, lift, or support loads that pose a risk of back injury or other musculoskeletal disorders (MSDs). Failure to comply can result in regulatory prosecutions and heavy fines for the business.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'how long is a manual handling certificate valid for ireland? expiry date'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">How long is a Manual Handling certificate valid for in Ireland?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
                        <p class="mh-faq-text">
                            In the Irish workplace, the industry standard and regulatory best practice guideline is that a Manual Handling certificate remains valid for <strong>3 years</strong>. However, some insurance companies and high-risk industries (like construction or patient handling) may require a refresher course every 2 years to stay compliant with <strong>Safe Pass</strong> standards and safety audits. Always check your company’s safety statement for specific internal requirements.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'can i do manual handling training online ireland?  compliant'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Can I complete my Manual Handling course fully online?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
                        <p class="mh-faq-text">
                            To be 100% compliant in Ireland, your training must include a practical assessment. We provide a "Blended Learning" solution where you complete the <strong>manual handling theory online</strong> and then perform a practical lifting demonstration. This is assessed by a <strong> Manual Handling Instructor</strong> either in-person or via a secure video link. A "theory-only" certificate is usually not sufficient for workplace inspections.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'what is the tile assessment framework? risk assessment'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">What is the TILE risk assessment framework?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
                        <p class="mh-faq-text">
                            The <strong>TILE framework</strong> is a key risk assessment tool taught in our Irish training courses to prevent workplace injuries. It stands for <strong>Task, Individual, Load, and Environment</strong>. By evaluating the complexity of the task, the physical capability of the individual, the weight/shape of the load, and the surrounding environment (like floor surface or lighting), employees can make informed decisions to prevent <strong>back injuries</strong> and ensure safe lifting practices.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'who pays for manual handling training ireland? employer duties'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Who is responsible for the cost of manual handling training?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
                        <p class="mh-faq-text">
                            Under the <strong>Safety, Health and Welfare at Work Act 2005</strong>, the employer is legally responsible for providing and paying for all safety training for their employees. Employers must ensure that training is provided during paid working hours and at no financial cost to the staff member. This is a core duty of care to ensure a safe working environment and reduce the risk of workplace accidents in Ireland.
                        </p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'do office workers need manual handling training? retailers '.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Do office and retail workers require a Manual Handling certificate?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
                        <p class="mh-faq-text">
                            Yes. A common misconception in Ireland is that only warehouse or construction workers need training. However, <strong>office staff and retail workers</strong> often lift heavy boxes of files, water bottles for coolers, or handle deliveries. If an employee is required to lift any load that could cause injury, the employer must provide a <strong>certified manual handling course</strong> to satisfy regulatory requirements and prevent long-term back pain or strains.
                        </p>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'what if i dont pass from the first time fail test unlimited attempts'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">What if I don't pass the first time?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
                        <p class="mh-faq-text">
                            Don't worry if you don't pass right away. You have <strong>unlimited attempts</strong> to retake and pass the test at no extra cost until you successfully complete the course.
                        </p>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'is there a maximum weight limit for lifting ireland? legal weight'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Is there a legal maximum weight limit for lifting at work?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
                        <p class="mh-faq-text">
                            Irish law does not specify a "one-size-fits-all" maximum weight limit in kilograms. Instead, <strong>manual handling legislation</strong> focuses on the <strong>risk assessment</strong>. What is safe for one person may be unsafe for another depending on the height of the lift, the distance, and the individual's physical capability. Our training teaches employees how to use the TILE method to determine if a load is too heavy and when to use <strong>mechanical aids</strong> like trolleys or hoists.
                        </p>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'manual handling vs people handling patient care'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">What is the difference between Manual Handling and People Handling?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
                        <p class="mh-faq-text">
                            <strong>Manual Handling</strong> training focuses on the movement of inanimate objects like boxes, kegs, or equipment. <strong>People Handling</strong> (or Patient Handling) is a specialized healthcare course required for nurses, carers, and hospital staff. It involves the use of specialized equipment like slidesheets and hoists to move patients safely. While both follow the same safety principles, the techniques and risks associated with moving a person are significantly different.
                        </p>
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'can i do the course from mobile phone mobile device smartphone'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Can I complete the course from my mobile phone?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-collapse x-cloak>
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

            <!-- Left Side: Educational Content (SEO Goldmine) -->
            <div class="mh-info-content">
                <span class="mh-info-badge">Top Safety Provider</span>
                <h2 class="mh-info-title">The Essential Guide to <strong>Manual Handling in Ireland</strong></h2>

                <p class="mh-info-lead">
                    If you are looking for a <strong>Manual Handling Certificate in Ireland</strong>, it is vital to understand the legal definitions and safety requirements set out by the Health and Safety Authority.
                </p>

                <div class="mh-info-text-block">
                    <p><strong>Manual Handling Ireland</strong> regulations define this work as any physical activity involving the <i>lifting, putting down, pushing, pulling, carrying, or moving</i> of a load by hand or bodily force. Whether you are in Dublin, Cork, or Galway, the law remains the same: any task that poses a risk of back injury requires a valid <strong>Manual Handling Certificate</strong>.</p>

                    <p>Under the <strong>Safety, Health and Welfare at Work Regulations 2007</strong>, every employer is legally obligated to provide <strong>manual handling training</strong> to staff. This training is the primary defense against <strong>Musculoskeletal Disorders (MSDs)</strong>, which account for a massive percentage of work-related illness in the Irish workforce. Obtaining your <strong>Manual Handling Certificate</strong> ensures you are compliant with <strong> working stantards</strong> and equipped with safe lifting techniques.</p>
                </div>

                <div class="mh-info-stats">
                    <div class="mh-info-stat-item">
                        <strong>Compliant</strong>
                        <span>Recognized <strong>Manual Handling Training</strong> nationwide.</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Interactive Modern Cards -->
            <div class="mh-info-cards">

                <div class="mh-info-card" :class="activeTab === 1 ? 'mh-info-card--active' : ''" @mouseenter="activeTab = 1">
                    <div class="mh-info-card-icon">STEP 01</div>
                    <h3>Get Certified</h3>
                    <p>Earn your <strong>Manual Handling Certificate</strong> through our blended learning platform. Our <strong>online manual handling theory</strong> combined with practical assessment meets all Irish legal requirements.</p>
                </div>

                <div class="mh-info-card" :class="activeTab === 2 ? 'mh-info-card--active' : ''" @mouseenter="activeTab = 2">
                    <div class="mh-info-card-icon">STEP 02</div>
                    <h3>Employer Duties</h3>
                    <p>In <strong>Manual Handling Ireland</strong> law, the employer must ensure a <strong>Safety Statement</strong> is in place. Providing <strong>certified training</strong> reduces liability and protects your insurance standing.</p>
                </div>

                <div class="mh-info-card" :class="activeTab === 3 ? 'mh-info-card--active' : ''" @mouseenter="activeTab = 3">
                    <div class="mh-info-card-icon">STEP 03</div>
                    <h3>Avoid Injuries</h3>
                    <p>Prevent <strong>workplace injuries</strong> by learning the TILE method. A <strong>Manual Handling Certificate</strong> proves you understand how to assess the Task, Individual, Load, and Environment safely.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="mh-steps" x-data="{ activeStep: 1 }">
        <div class="mh-steps-wrapper">

            <header class="mh-steps-header">
                <span class="mh-steps-badge">Simple & Fast Process</span>
                <h2 class="mh-steps-title">4 Steps to Your <strong>Manual Handling Certificate Ireland</strong></h2>
                <p class="mh-steps-subtitle">Start your training today and receive your compliant certification in four easy steps.</p>
            </header>

            <div class="mh-steps-grid">
                <!-- Step 1 -->
                <div class="mh-steps-card" @mouseenter="activeStep = 1" :class="activeStep === 1 ? 'mh-steps-card--active' : ''">
                    <div class="mh-steps-number">01</div>
                    <h3>Register</h3>
                    <p>Begin your journey by creating an account on our secure platform. It takes less than a minute to sign up for your <strong>Manual Handling Certificate Ireland</strong> and get instant access to your training dashboard.</p>
                </div>

                <!-- Step 2 -->
                <div class="mh-steps-card" @mouseenter="activeStep = 2" :class="activeStep === 2 ? 'mh-steps-card--active' : ''">
                    <div class="mh-steps-number">02</div>
                    <h3>Online Training</h3>
                    <p>Complete your <strong>Manual Handling Online Training</strong> through our high-definition video modules. Learn essential Irish safety legislation, the TILE framework, and spinal anatomy at your own pace.</p>
                </div>

                <!-- Step 3 -->
                <div class="mh-steps-card" @mouseenter="activeStep = 3" :class="activeStep === 3 ? 'mh-steps-card--active' : ''">
                    <div class="mh-steps-number">03</div>
                    <h3>Submit Assessment</h3>
                    <p>After finishing the theory, <strong>submit the assessment</strong> for review. Our instructors will evaluate your practical lifting technique via our secure video upload portal to ensure 100% compliance.</p>
                </div>

                <!-- Step 4 -->
                <div class="mh-steps-card" @mouseenter="activeStep = 4" :class="activeStep === 4 ? 'mh-steps-card--active' : ''">
                    <div class="mh-steps-number">04</div>
                    <h3>Download Certificate</h3>
                    <p>Once approved, you can instantly <strong>Download your Manual Handling Certificate</strong>. Our certificates are fully compliant by the work requirments , and major employers across Ireland.</p>
                </div>
            </div>

            <div class="mh-steps-action">
                <a href="/register" class="mh-steps-btn">Register and Start Now</a>
            </div>
        </div>
    </section>
@endsection
