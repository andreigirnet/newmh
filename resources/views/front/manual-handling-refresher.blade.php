@extends('front.app')

@section('content') <div class="mh-leadership-page">
    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">

                <span class="mh-top-badge">Manual Handling Refresher Training</span>

                <h1>Manual Handling <br>Refresher Training</h1>

                <p class="mh-lead-text">
                    Refresh your <strong>Manual Handling Ireland</strong> training
                    through our convenient online course. Review key manual
                    handling principles, complete the required assessments,
                    and receive a new certificate after successful completion.
                </p>

                <div class="mh-btn-row">
                    <a href="{{ route('register') }}" class="btn-exclusive-teal">
                        Start Refresher Training — €{{ config('global.course_price') }}
                    </a>

                    <a href="{{ route('register') }}" class="btn-exclusive-ghost">
                        Corporate Training
                    </a>
                </div>

            </div>
        </div>
    </header>


    <article class="mh-container-content">

        <h2>What Is Manual Handling Refresher Training?</h2>

        <p>
            <strong>Manual Handling Refresher Training</strong> provides an
            opportunity to review important manual handling principles and
            safe handling techniques. Refresher training can be useful for
            people who have previously completed manual handling training
            and want to review their knowledge and practical technique.
        </p>

        <p>
            Our <strong>Manual Handling Online</strong> refresher course
            covers key topics including safe lifting techniques, posture,
            load assessment, risk awareness, and practical considerations
            when lifting, carrying, pushing, pulling, or moving loads.
        </p>

        <p>
            After completing the theory assessment, you will need to record
            a video of yourself performing a manual handling lift and send
            it to us via WhatsApp for review. Our instructor will review
            the practical assessment before your certificate is issued.
        </p>

        <ul class="mh-feature-list">
            <li>
                <strong>Online Learning:</strong>
                Review the training material through our online platform
                at your own pace.
            </li>

            <li>
                <strong>Practical Assessment:</strong>
                Submit a video of yourself performing a manual handling lift
                via WhatsApp for instructor review.
            </li>

            <li>
                <strong>Digital Certificate:</strong>
                Receive your certificate in your dashboard after successfully
                completing the required assessments.
            </li>

            <li>
                <strong>Certificate Verification:</strong>
                Your certificate includes a unique verification ID that can
                be checked through our online verification system.
            </li>
        </ul>

    </article>


    <section class="mh-pillar-section">
        <div class="mh-container">

            <div class="mh-pillar-grid">

                <div class="pillar-card">
                    <div class="pillar-icon">🔄</div>

                    <h4>Refresh Your Knowledge</h4>

                    <p>
                        Review important <strong>manual handling training
                        Ireland</strong> principles, including safer lifting,
                        carrying, pushing, and pulling techniques.
                    </p>
                </div>


                <div class="pillar-card">
                    <div class="pillar-icon">📱</div>

                    <h4>WhatsApp Practical Assessment</h4>

                    <p>
                        After the theory assessment, record a practical lifting
                        video and send it to us via WhatsApp. Our instructor
                        will review your technique before the certificate is issued.
                    </p>
                </div>


                <div class="pillar-card">
                    <div class="pillar-icon">📑</div>

                    <h4>Digital Certificate</h4>

                    <p>
                        Once your practical assessment has been successfully
                        reviewed, your <strong>Manual Handling certificate</strong>
                        will be available in your dashboard as a PDF.
                    </p>
                </div>


                <div class="pillar-card">
                    <div class="pillar-icon">🌍</div>

                    <h4>Online Access</h4>

                    <p>
                        Complete your <strong>manual handling training online
                        Ireland</strong> course from a convenient location using
                        a computer, tablet, or smartphone.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <article class="mh-container-content">

        <h2>Reviewing Safe Manual Handling Techniques</h2>

        <p>
            A <strong>manual handling course Ireland</strong> can help learners
            review how body position, load characteristics, and the surrounding
            environment can affect a manual handling task.
        </p>

        <p>
            The refresher training focuses on practical principles such as
            maintaining appropriate posture, assessing the load before lifting,
            keeping a load close to the body where suitable, and avoiding
            unnecessary twisting or awkward movements.
        </p>

        <h3>The TILE Approach to Risk Assessment</h3>

        <p>
            As part of the refresher training, learners review the TILE
            approach to help consider the main factors involved in a manual
            handling activity:
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Task:</strong>
                Consider the type of movement required, including lifting,
                carrying, pushing, pulling, twisting, or reaching.
            </li>

            <li>
                <strong>Individual:</strong>
                Consider the person's ability, experience, and any relevant
                limitations before performing the task.
            </li>

            <li>
                <strong>Load:</strong>
                Consider the weight, size, shape, stability, and other
                characteristics of the load.
            </li>

            <li>
                <strong>Environment:</strong>
                Consider the surrounding area, including floors, lighting,
                obstacles, available space, and other potential hazards.
            </li>

        </ul>

    </article>


    <article class="mh-container-content">

        <h2>Online Manual Handling Refresher Training</h2>

        <p>
            Our <strong>manual handling training online Ireland</strong>
            refresher course provides a convenient way to review manual
            handling principles without travelling to a physical training
            location.
        </p>

        <p>
            Learners can access the course through a computer, tablet, or
            smartphone. After completing the theory assessment, the practical
            assessment is completed by recording a lifting video and sending
            it to us via WhatsApp.
        </p>

        <p>
            Our instructor reviews the submitted video. Once the practical
            assessment has been successfully approved, your
            <strong>Manual Handling certificate</strong> is issued
            and made available through your dashboard for download as a PDF.
        </p>

        <p>
            Certificates issued through our platform are valid for 3 years
            and include a unique verification ID that can be checked through
            our certificate verification system.
        </p>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('register') }}" class="btn-gold">
                Start Refresher Training — €{{ config('global.course_price') }}
            </a>
        </div>

    </article>

</div>

@endsection
