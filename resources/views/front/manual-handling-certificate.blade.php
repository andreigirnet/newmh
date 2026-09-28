@extends('front.app')

@section('content')
    <div class="mh-leadership-page">

        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">

                    <span class="mh-top-badge">Certificate Verification Portal</span>

                    <h1>Manual Handling <br>Certificate Ireland</h1>

                    <p class="mh-lead-text">
                        Complete your <strong>Manual Handling Ireland training</strong>
                        online and receive a digital certificate after successfully
                        completing the required assessments. Certificates are valid
                        for 3 years and include a unique verification ID.
                    </p>

                    <div class="mh-btn-row">
                        <a href="{{ route('register') }}" class="btn-exclusive-teal">
                            Get Your Certificate — €{{ config('global.course_price') }}
                        </a>

                        <a href="{{ route('front.verify') }}" class="btn-exclusive-ghost">
                            Verify a Certificate
                        </a>
                    </div>

                </div>
            </div>
        </header>


        <article class="mh-container-content">

            <h2>Is a Digital Manual Handling Certificate Valid?</h2>

            <p>
                A digital <strong>Manual Handling Certificate</strong> provides
                evidence that you have completed the training course and the
                required assessments with our training platform.
            </p>

            <p>
                Our <strong>Manual Handling Online</strong> course can be completed
                remotely. Following successful completion of the theory and
                practical assessment, your certificate is made available digitally
                as a PDF and includes a unique verification code.
            </p>

            <p>
                Employers and organisations can use the verification system to
                check the certificate details and confirm that the certificate
                was issued through our platform.
            </p>

            <ul class="mh-feature-list">
                <li>
                    <strong>Digital Delivery:</strong>
                    Download your certificate from your dashboard after successful
                    completion.
                </li>

                <li>
                    <strong>3-Year Validity:</strong>
                    The certificate issued by our platform is valid for 3 years.
                </li>

                <li>
                    <strong>Certificate Verification:</strong>
                    Each certificate includes a unique verification ID.
                </li>
            </ul>

        </article>


        <section class="mh-pillar-section">
            <div class="mh-container">

                <div class="mh-pillar-grid">

                    <div class="pillar-card">
                        <div class="pillar-icon">🎓</div>

                        <h4>Structured Training</h4>

                        <p>
                            A structured <strong>manual handling course Ireland</strong>
                            covering important manual handling principles, safe
                            lifting techniques, and practical safety considerations. At the end you will have to pass a theory test in form of a quiz.
                        </p>
                    </div>


                    <div class="pillar-card">
                        <div class="pillar-icon">📚</div>

                        <h4>Practical Learning</h4>

                        <p>
                            The course combines online theory with a practical
                            assessment designed to demonstrate the application of
                            safe manual handling techniques. The practical test is preformed online, by recording a video of yourself lifting correctly an object and sending video to whatsup {{config('global.phone')}} for intructor review.
                        </p>
                    </div>


                    <div class="pillar-card">
                        <div class="pillar-icon">📱</div>

                        <h4>Digital Access</h4>

                        <p>
                            Access your <strong>Manual Handling Ireland certificate</strong>
                            through your dashboard and download it whenever you need it.
                        </p>
                    </div>


                    <div class="pillar-card">
                        <div class="pillar-icon">💰</div>

                        <h4>Refund Policy</h4>

                        <p>
                            Please review our refund policy for information about
                            refunds and course purchases.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <article class="mh-container-content">

            <h2>What Your Certificate Represents</h2>

            <p>
                Your <strong>Manual Handling Certificate</strong> provides evidence
                that you have completed the training and assessment process offered
                through our platform. The course covers important principles related
                to safe lifting, carrying, moving, and handling of loads.
            </p>

            <p>
                As part of the practical assessment, you will demonstrate manual
                handling techniques and submit a video for review by our instructor.
                Successful completion of the assessment is required before the
                certificate is issued.
            </p>

            <h3>Core Skills Covered:</h3>

            <ul class="mh-feature-list">

                <li>
                    <strong>Hazard Identification:</strong>
                    Recognising potential risks before performing a manual handling task.
                </li>

                <li>
                    <strong>Postural Alignment:</strong>
                    Understanding appropriate body positioning during lifting and carrying.
                </li>

                <li>
                    <strong>Load Positioning:</strong>
                    Understanding how keeping a load close to the body can help reduce
                    unnecessary strain.
                </li>

                <li>
                    <strong>Safe Lifting Techniques:</strong>
                    Applying appropriate techniques when lifting, carrying, and moving loads.
                </li>

            </ul>

        </article>


        <article class="mh-container-content">

            <h2>Certificate Management for Employers</h2>

            <p>
                For businesses and organisations, our platform provides an employer
                dashboard that can be used to manage <strong>manual handling training
                online Ireland</strong> courses, monitor training progress, and store
                certificates centrally.
            </p>

            <p>
                Certificate information can be checked through our verification
                system. The platform can also help employers keep track of certificate
                dates and identify when refresher training may be appropriate.
            </p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('register') }}" class="btn-gold">
                    Get Your Certificate — €{{ config('global.course_price') }}
                </a>
            </div>

        </article>

    </div>
@endsection

