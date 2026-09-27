@extends('front.app')

@section('content') <div class="mh-leadership-page">

    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">

                <span class="mh-top-badge">Kilkenny Online Manual Handling Training</span>

                <h1>Manual Handling <br>Training Kilkenny</h1>

                <p class="mh-lead-text">
                    Complete your <strong>Manual Handling Training Kilkenny</strong>
                    online with a simple and flexible course designed for
                    individuals, workers, and local businesses. Learn practical
                    manual handling techniques and complete the required
                    theory and practical assessments.
                </p>

                <div class="mh-btn-row">
                    <a href="{{ route('register') }}" class="btn-exclusive-teal">
                        Start Course — €{{ config('global.course_price') }}
                    </a>

                    <a href="{{ route('register') }}" class="btn-exclusive-ghost">
                        Kilkenny Business Training
                    </a>
                </div>

            </div>
        </div>
    </header>


    <article class="mh-container-content">

        <h2>Manual Handling Training for Kilkenny Workplaces</h2>

        <p>
            Kilkenny has a wide range of workplaces, including retail,
            hospitality, tourism, logistics, services, and local businesses.
            Many roles can involve lifting, carrying, pushing, pulling,
            moving stock, or handling equipment as part of everyday work.
        </p>

        <p>
            <strong>Manual Handling Training</strong> can help learners
            understand the potential risks associated with these activities
            and learn practical principles for safer handling.
        </p>

        <p>
            Our <strong>Manual Handling Course Kilkenny</strong> can be
            completed online, allowing individuals and businesses to access
            the theory training without attending scheduled in-person
            sessions.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Suitable for Local Businesses:</strong>
                Useful for workers in retail, hospitality, tourism, services,
                logistics, and other working environments.
            </li>

            <li>
                <strong>Online Access:</strong>
                Complete the theory component remotely using a computer,
                tablet, or smartphone.
            </li>

            <li>
                <strong>Practical Assessment:</strong>
                Record a video of yourself performing a manual handling
                lift and send it via WhatsApp for instructor review.
            </li>

        </ul>

    </article>


    <section class="mh-pillar-section">

        <div class="mh-container">

            <div class="mh-pillar-grid">

                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Train Anywhere in Kilkenny</h4>

                    <p>
                        Complete your <strong>manual handling training
                        Kilkenny</strong> from home, work, or another
                        convenient location.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Quick and Simple</h4>

                    <p>
                        Study the course material online at your own pace
                        and complete the required theory and practical
                        assessment process.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Hospitality and Retail</h4>

                    <p>
                        The training covers manual handling principles that
                        can be relevant to hotels, restaurants, shops,
                        tourism, and other service-based workplaces.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Affordable Training</h4>

                    <p>
                        Complete the course for €{{ config('global.course_price') }}
                        with no additional training charges.
                    </p>

                </div>

            </div>
        </div>

    </section>


    <article class="mh-container-content">

        <h2>Safe Handling in Everyday Roles</h2>

        <p>
            Many roles in Kilkenny can involve lifting deliveries, moving
            stock, carrying materials, or handling equipment throughout
            the working day. Awkward postures, unsuitable techniques, and
            difficult working environments can increase physical strain.
        </p>

        <p>
            Our <strong>Manual Handling Training Kilkenny</strong> focuses
            on practical, easy-to-follow principles that can help learners
            approach these activities with greater awareness.
        </p>

        <p>
            Learners review body positioning, load assessment, controlled
            movement, and practical ways of considering potential hazards
            before beginning a manual handling task.
        </p>

        <h3>Using TILE for Safer Work Decisions</h3>

        <p>
            The TILE approach provides a practical framework for considering
            the main factors involved before handling a load.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Task:</strong>
                Consider what movement is required, including lifting,
                carrying, pushing, pulling, reaching, or twisting.
            </li>

            <li>
                <strong>Individual:</strong>
                Consider the person's ability, experience, and any relevant
                limitations before performing the task.
            </li>

            <li>
                <strong>Load:</strong>
                Consider the weight, size, shape, grip, and stability of
                the load.
            </li>

            <li>
                <strong>Environment:</strong>
                Check for obstacles, uneven surfaces, restricted spaces,
                lighting, and other potential hazards.
            </li>

        </ul>

        <p>
            Considering these factors before starting a manual handling
            activity can help learners prepare for the task and identify
            potential hazards.
        </p>

    </article>


    <article class="mh-container-content">

        <h2>Flexible Training for Kilkenny Workers</h2>

        <p>
            With busy work schedules and different working patterns,
            travelling to a training centre may not always be convenient.
            Our online platform provides a flexible way to access manual
            handling training without travelling to a physical location.
        </p>

        <p>
            Whether you are starting a new role, reviewing your manual
            handling knowledge, or arranging training for staff, you can
            complete your <strong>manual handling course online Ireland</strong>
            using a computer, tablet, or smartphone.
        </p>

        <p>
            After completing the theory assessment, you will need to record
            a video of yourself performing a manual handling lift and send
            it to us via WhatsApp for practical assessment.
        </p>

        <p>
            Our instructor reviews the submitted video. Once the practical
            assessment has been successfully approved, your
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
                Start Your Training — €{{ config('global.course_price') }}
            </a>

        </div>

    </article>

</div>

@endsection
