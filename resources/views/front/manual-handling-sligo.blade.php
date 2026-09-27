@extends('front.app')

@section('content') <div class="mh-leadership-page">

    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">

                <span class="mh-top-badge">Sligo Online Manual Handling Training</span>

                <h1>Manual Handling <br>Training Sligo</h1>

                <p class="mh-lead-text">
                    Complete your <strong>Manual Handling Training Sligo</strong>
                    online with a flexible course designed for local workers,
                    individuals, and businesses. Learn practical manual
                    handling techniques and complete the required theory
                    and practical assessments.
                </p>

                <div class="mh-btn-row">
                    <a href="{{ route('register') }}" class="btn-exclusive-teal">
                        Start Course — €{{ config('global.course_price') }}
                    </a>

                    <a href="{{ route('register') }}" class="btn-exclusive-ghost">
                        Sligo Staff Training
                    </a>
                </div>

            </div>
        </div>
    </header>


    <article class="mh-container-content">

        <h2>Manual Handling Training for Sligo Workplaces</h2>

        <p>
            Sligo has a wide range of workplaces, including healthcare,
            retail, hospitality, tourism, logistics, and other service
            environments. Many roles can involve lifting, carrying,
            pushing, pulling, or moving loads as part of everyday work.
        </p>

        <p>
            <strong>Manual Handling Training</strong> can help learners
            understand the potential risks associated with these activities
            and learn practical principles for safer handling.
        </p>

        <p>
            Our <strong>Manual Handling Course Sligo</strong> can be
            completed online, allowing individuals and businesses to access
            the theory training without travelling to a physical training
            location.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Accessible Anywhere:</strong>
                Complete the online theory from Sligo town or surrounding
                areas using a suitable device.
            </li>

            <li>
                <strong>Practical Assessment:</strong>
                Record a video of yourself performing a manual handling
                lift and send it via WhatsApp for instructor review.
            </li>

            <li>
                <strong>Digital Certificate:</strong>
                Receive your certificate in your dashboard after successfully
                completing the required assessments.
            </li>

        </ul>

    </article>


    <section class="mh-pillar-section">

        <div class="mh-container">

            <div class="mh-pillar-grid">

                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Train From Any Location</h4>

                    <p>
                        Complete your <strong>manual handling training
                        Sligo</strong> from home, work, or another
                        convenient location.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Flexible Learning</h4>

                    <p>
                        Study the online course material at your own pace
                        and complete the theory assessment through the
                        training platform.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Healthcare and Retail</h4>

                    <p>
                        The course covers manual handling principles that
                        can be relevant to healthcare, retail, hospitality,
                        logistics, and other working environments.
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

        <h2>Reducing Risk in Everyday Work</h2>

        <p>
            Many jobs involve regular manual handling activities such as
            handling deliveries, stocking shelves, moving equipment, or
            carrying materials. Awkward postures, unsuitable techniques,
            and difficult working environments can increase physical strain.
        </p>

        <p>
            Our <strong>Manual Handling Training Sligo</strong> focuses on
            practical guidance that can help learners approach manual
            handling activities with greater awareness. The course covers
            body positioning, load assessment, controlled movement, and
            practical risk awareness.
        </p>

        <p>
            These principles can be useful across different workplaces
            where lifting, carrying, pushing, pulling, or moving loads
            forms part of everyday activities.
        </p>

        <h3>Using the TILE Method</h3>

        <p>
            The TILE approach provides a practical framework for considering
            the main factors involved before handling a load.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Task:</strong>
                Consider what movement is required and how the task will
                be performed.
            </li>

            <li>
                <strong>Individual:</strong>
                Consider the person's ability, experience, and any relevant
                limitations.
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

        <h2>Flexible Training for Sligo Workers</h2>

        <p>
            For many people in Sligo, travelling to a training centre may
            not be convenient. Our online course provides a flexible way
            to access the training material without travelling to a
            physical location.
        </p>

        <p>
            Whether you are starting a new role, reviewing your manual
            handling knowledge, or arranging training for a team, you can
            access your <strong>manual handling course online Ireland</strong>
            through a computer, tablet, or smartphone.
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
                Start Training — €{{ config('global.course_price') }}
            </a>

        </div>

    </article>

</div>

@endsection
