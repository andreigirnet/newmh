@extends('front.app')

@section('content') <div class="mh-leadership-page">

    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">

                <span class="mh-top-badge">Online Manual Handling Training Waterford</span>

                <h1>Manual Handling <br>Training Waterford</h1>

                <p class="mh-lead-text">
                    Complete your <strong>Manual Handling Training Waterford</strong>
                    online with a convenient course designed for individuals,
                    workers, and businesses. Study at your own pace and
                    complete the required theory and practical assessments.
                </p>

                <div class="mh-btn-row">
                    <a href="{{ route('register') }}" class="btn-exclusive-teal">
                        Start Course — €{{ config('global.course_price') }}
                    </a>

                    <a href="{{ route('register') }}" class="btn-exclusive-ghost">
                        Waterford Staff Training
                    </a>
                </div>

            </div>
        </div>
    </header>


    <article class="mh-container-content">

        <h2>Manual Handling Training Across Waterford Workplaces</h2>

        <p>
            Manual handling activities can be part of many different jobs
            in Waterford, including retail, manufacturing, logistics,
            warehousing, hospitality, and other working environments.
            Activities may include lifting, carrying, pushing, pulling,
            lowering, or moving loads.
        </p>

        <p>
            <strong>Manual Handling Training</strong> can help learners
            understand the risks associated with these activities and
            learn practical principles for safer handling. Our course
            covers safe lifting techniques, posture, load assessment,
            and practical risk awareness.
        </p>

        <p>
            Our <strong>Manual Handling Course Waterford</strong> can be
            completed online, allowing individuals and teams to access
            the training without travelling to a physical training
            location.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Suitable for Different Workplaces:</strong>
                Training covering common manual handling activities across
                different sectors.
            </li>

            <li>
                <strong>Online Access:</strong>
                Complete the theory component remotely using a computer,
                tablet, or smartphone.
            </li>

            <li>
                <strong>Practical Assessment:</strong>
                Submit a lifting video via WhatsApp for review by our
                instructor after completing the theory assessment.
            </li>

        </ul>

    </article>


    <section class="mh-pillar-section">

        <div class="mh-container">

            <div class="mh-pillar-grid">

                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Train Anywhere in Waterford</h4>

                    <p>
                        Complete your <strong>manual handling training
                        Waterford</strong> course from home, your workplace,
                        or another suitable location.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Flexible Learning</h4>

                    <p>
                        Study the online course material at your own pace
                        and complete the required theory assessment through
                        the platform.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Practical Assessment</h4>

                    <p>
                        Record yourself performing a manual handling lift
                        and send the video via WhatsApp for instructor
                        review.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Transparent Pricing</h4>

                    <p>
                        The course price is €{{ config('global.course_price') }}
                        with no additional training charges.
                    </p>

                </div>

            </div>
        </div>

    </section>


    <article class="mh-container-content">

        <h2>Safe Lifting for Everyday Work in Waterford</h2>

        <p>
            Manual handling can be part of everyday work, whether you are
            stocking shelves, moving equipment, handling deliveries,
            working in a warehouse, or carrying materials.
        </p>

        <p>
            Our <strong>Manual Handling Training Waterford</strong> course
            introduces practical techniques for safer lifting and handling.
            Learners review body positioning, load assessment, controlled
            movement, and ways to consider potential hazards before
            beginning a task.
        </p>

        <p>
            The training is designed to help learners develop greater
            awareness when performing manual handling activities in
            different working environments.
        </p>

        <h3>Understanding Risk with TILE</h3>

        <p>
            The TILE approach provides a practical framework for considering
            the main factors involved in a manual handling task.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Task:</strong>
                Consider the type of movement required and the effort
                involved.
            </li>

            <li>
                <strong>Individual:</strong>
                Consider the person's ability, experience, and any relevant
                limitations.
            </li>

            <li>
                <strong>Load:</strong>
                Consider the size, weight, shape, grip, and stability
                of the load.
            </li>

            <li>
                <strong>Environment:</strong>
                Check for obstacles, uneven surfaces, restricted spaces,
                lighting, and other potential hazards.
            </li>

        </ul>

        <p>
            Considering these factors before handling a load can help
            learners approach manual handling activities with greater
            awareness.
        </p>

    </article>


    <article class="mh-container-content">

        <h2>A Flexible Training Option for Waterford Workers</h2>

        <p>
            Online training provides a convenient way for Waterford workers
            and businesses to access manual handling course material without
            travelling to a physical training location.
        </p>

        <p>
            With online access, you can complete your
            <strong>manual handling course online Ireland</strong> using
            a computer, tablet, or smartphone at a convenient time.
        </p>

        <p>
            After completing the theory assessment, you will need to record
            a video of yourself performing a manual handling lift and send
            it to us via WhatsApp for practical assessment.
        </p>

        <p>
            Our instructor will review the submitted video. Once the
            practical assessment has been successfully approved, your
            <strong>Manual Handling Ireland certificate</strong> will be
            issued and made available in your dashboard as a PDF.
        </p>

        <p>
            Certificates issued through our platform are valid for 3 years
            and include a unique verification ID that can be checked through
            our certificate verification system.
        </p>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('register') }}" class="btn-gold">
                Start Training — €{{ config('global.course_price') }}
            </a>
        </div>

    </article>

</div>

@endsection
