@extends('front.app')
@section('content')
    <script src="js/bulkLightCalc.js" defer></script>
    <div class="tmt-page-container">

        <!-- HERO SECTION -->
        <div class="tmt-hero-banner">
            <h1 class="tmt-hero-title">Team Manual Handling Training Solutions in Ireland</h1>
        </div>

        <!-- INTRO SECTION -->
        <div class="tmt-intro-section">
            <div class="tmt-intro-text">
                We provide online manual handling training for teams. Each learner completes the theory modules, passes the theory test and submits a practical assessment video for instructor review. A Certificate of Completion is issued after successful practical assessment approval. Employers should confirm that the course meets their workplace requirements before purchasing.
            </div>
        </div>
        <div class="light-calc-wrapper">
            <div class="slim-calc-card-light">

                <div class="calc-section-light qty-picker">
                    <div class="single-buyer-notice-light">
                        Need just one? <a href="/register" class="blue-link">Get 1 Course</a>
                    </div>
                    <span class="mini-label-light">TOTAL COURSES</span>
                    <div class="qty-focus-light">
                        <span id="qtyValLight">10</span>
                    </div>
                    <input type="range" min="1" max="100" value="10" class="modern-slider-light" id="bulkSliderLight" oninput="calculateBulkLight()">
                </div>

                <div class="calc-section-light">
                    <span class="mini-label-light">RETAIL PRICE</span>
                    <span class="text-red-strike-light" id="oldTotalLight">€250.00</span>
                </div>

                <div class="calc-section-light">
                    <span class="mini-label-light">BULK DISCOUNT (10% OFF)</span>
                    <span class="text-green-success" id="newTotalLight">€225.00</span>
                    <div class="save-tag-light"><span id="savingsAlertLight">€25.00 Saved!</span></div>
                </div>

                <div class="calc-section-light">
                    <a href="/register"><button class="buy-button-light">Enroll Now</button></a>
                </div>

            </div>
        </div>
        <div class="tmt-main-wrapper">

            <!-- BULK DISCOUNT -->
            <div class="tmt-feature-row">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title">Volume Certification for Employers</h2>
                    <div class="tmt-section-description">
                        Save 10% when purchasing 10 or more courses. Each learner must complete the theory and practical assessment requirements before receiving a certificate. Contact us to discuss larger team bookings. Contact our team via Online Chat to discuss custom pricing.
                    </div>
                </div>
                <div class="tmt-column-image">
                    <div class="tmt-img-container">
                        <img src="{{asset('images/training/tr-img-1.png')}}" class="tmt-feature-img" alt="Training Support">
                    </div>
                </div>
            </div>

            <!-- INVOICE PAYMENT -->
            <div class="tmt-feature-row tmt-row-reverse">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title">Corporate Invoicing & 30-Day Terms</h2>
                    <div class="tmt-section-description">
                        We support B2B invoicing for companies requiring structured payment processes. Benefits include 30-day payment terms, PO number integration, and immediate access to online training modules*. This allows your team to begin their manual handling certification without delay. <span class="tmt-footnote">*Certificates are released once payment has been confirmed.</span>
                    </div>
                </div>
                <div class="tmt-column-image">
                    <div class="tmt-img-container">
                        <img src="{{asset('images/training/tr-img-2.png')}}" class="tmt-feature-img" alt="Invoice Payment">
                    </div>
                </div>
            </div>

            <!-- URGENT CERTIFICATION -->
            <div class="tmt-feature-row">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title">Need Manual Handling Training for Your Team?</h2>
                    <div class="tmt-section-description">
                        Learners can begin after course access is activated. Certificate availability depends on successful completion of the theory test and instructor approval of the practical assessment. Submission does not guarantee approval.
                    </div>
                </div>
                <div class="tmt-column-image">
                    <div class="tmt-img-container">
                        <img src="{{asset('images/training/tr-img-3.png')}}" class="tmt-feature-img" alt="Urgent Training">
                    </div>
                </div>
            </div>

            <!-- MINIMISE DISRUPTION -->
            <div class="tmt-feature-row tmt-row-reverse">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title">Minimise Operational Downtime with Online Training</h2>
                    <div class="tmt-section-description">
                        Traditional classroom-based training disrupts workflow and increases travel costs. Our online manual handling training removes logistical barriers by allowing staff to complete modules from any location, at any time. Progress is saved automatically, enabling flexible completion during scheduled work periods or outside standard hours.
                    </div>
                </div>
                <div class="tmt-column-image">
                    <div class="tmt-img-container">
                        <img src="{{asset('images/training/tr-img-4.png')}}" class="tmt-feature-img" alt="Efficient Learning">
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
