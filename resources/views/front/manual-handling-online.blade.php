@extends('front.app')

@section('content')
    <div class="mh-leadership-page">

        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">

                    <span class="mh-top-badge">Online Manual Handling Training</span>

                    <h1>Manual Handling <br>Training Online Ireland</h1>

                    <p class="mh-lead-text">
                        Convenient <strong>Manual Handling Training Online Ireland</strong>
                        for individuals, businesses, and teams. Complete your
                        <strong>Manual Handling Ireland</strong> course online,
                        study at your own pace, and complete the required theory
                        and practical assessments.
                    </p>

                    <div class="mh-btn-row">
                        <a href="{{ route('register') }}" class="btn-exclusive-teal">
                            Enrol Your Team — €{{ config('global.course_price') }}
                        </a>
                    </div>

                </div>
            </div>
        </header>


        <article class="mh-container-content">

            <h2>Is Online Manual Handling Training Available?</h2>

            <p>
                <strong>Manual Handling Online</strong> training provides a
                convenient way to study manual handling principles and safe
                handling techniques remotely. Our course combines online
                theory with a practical assessment completed through video
                submission.
            </p>

            <p>
                The course covers important topics such as manual handling
                risks, safe lifting techniques, posture, load assessment,
                and practical risk awareness. Learners can complete the
                theory component online and then submit their practical
                assessment for instructor review.
            </p>

            <p>
                After completing the theory assessment, learners are required
                to record a video of themselves performing a manual handling
                lift and send it to us via WhatsApp. Our instructor reviews
                the video before the certificate is issued.
            </p>

            <ul class="mh-feature-list">
                <li>
                    <strong>Certificate Verification:</strong>
                    Each certificate includes a unique verification ID that
                    can be checked through our online verification system.
                </li>

                <li>
                    <strong>Digital Records:</strong>
                    Course and certificate information can be accessed through
                    the learner dashboard.
                </li>

                <li>
                    <strong>3-Year Certificate Validity:</strong>
                    Certificates issued through our platform are valid for
                    3 years.
                </li>
            </ul>

        </article>


        <section class="mh-pillar-section">
            <div class="mh-container">

                <div class="mh-pillar-grid">

                    <div class="pillar-card">
                        <div class="pillar-icon">📚</div>

                        <h4>Online Learning</h4>

                        <p>
                            Access your <strong>Manual Handling Ireland</strong>
                            course online and study the theory material at
                            your own pace.
                        </p>
                    </div>


                    <div class="pillar-card">
                        <div class="pillar-icon">📋</div>

                        <h4>Practical Assessment</h4>

                        <p>
                            Demonstrate your manual handling technique by
                            recording a practical lifting video and sending
                            it to us via WhatsApp for instructor review.
                        </p>
                    </div>


                    <div class="pillar-card">
                        <div class="pillar-icon">🛡️</div>

                        <h4>Safety Skills</h4>
                        <p>Practical skills assesed by a instructor online via Whats up. Video is sent after succesfull completion of theory test</p>
                    </div>


                    <div class="pillar-card">
                        <div class="pillar-icon">⚡</div>

                        <h4>Flexible Access</h4>

                        <p>
                            Our <strong>manual handling training online Ireland</strong>
                            platform can be accessed from a computer, tablet,
                            or smartphone.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <article class="mh-container-content">

            <h2>The Science of Safe Manual Handling</h2>

            <p>
                An important part of a professional
                <strong>manual handling course Ireland</strong> is understanding
                how body position, load characteristics, and movement can affect
                physical strain during manual handling activities.
            </p>

            <p>
                Our training introduces learners to practical principles such
                as maintaining appropriate posture, positioning loads safely,
                avoiding unnecessary twisting where possible, and using suitable
                lifting techniques.
            </p>

            <h3>The TILE Principle of Risk Assessment</h3>

            <p>
                <strong>Manual Handling Online</strong> training can help learners
                consider the main factors involved in a manual handling task.
                The TILE approach provides a useful framework for considering:
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
                    characteristics of the object.
                </li>

                <li>
                    <strong>Environment:</strong>
                    Consider the surrounding area, including floors, lighting,
                    obstacles, available space, and other potential hazards.
                </li>

            </ul>

        </article>


        <article class="mh-container-content">

            <h2>Why Choose Our Manual Handling Training Online Ireland?</h2>

            <p>
                For HR managers, business owners, and individual learners,
                online training can make the learning process more convenient.
                There is no need to travel to a physical training location,
                allowing learners to access the course from a suitable location.
            </p>

            <p>
                Learners can access the portal on a smartphone, tablet, or
                desktop computer. After completing the theory assessment,
                learners submit their practical lifting video via WhatsApp
                for review by our instructor.
            </p>

            <p>
                Once the practical assessment has been successfully reviewed,
                the <strong>Manual Handling Certificate Ireland</strong> is
                issued and made available through the learner's dashboard
                for download as a PDF.
            </p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('register') }}" class="btn-gold">
                    Get Your Corporate Quote Today
                </a>
            </div>

        </article>

    </div>
@endsection

