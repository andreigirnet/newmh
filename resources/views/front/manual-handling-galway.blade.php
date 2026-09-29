@extends('front.app')

@section('content') <div class="mh-leadership-page">

    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">

                <span class="mh-top-badge">Galway Online Manual Handling Training</span>

                <h1>Manual Handling <br>Training Galway</h1>

                <p class="mh-lead-text">
                    Complete your <strong>Manual Handling Training Galway</strong>
                    online with a flexible course designed for workers,
                    individuals, and businesses. Learn practical manual
                    handling techniques and complete the required theory
                    and practical assessments.
                </p>

                <div class="mh-btn-row">
                    <a href="{{ route('register') }}" class="btn-exclusive-teal">
                        Start Course — €{{ config('global.course_price') }}
                    </a>

                    <a href="{{ route('register') }}" class="btn-exclusive-ghost">
                        Galway Business Training
                    </a>
                </div>

            </div>
        </div>
    </header>


    <article class="mh-container-content">

        <h2>Manual Handling Training for Galway Workplaces</h2>

        <p>
            Galway has a diverse range of workplaces, including tourism,
            hospitality, retail, logistics, manufacturing,
            and other service environments. Many roles can involve lifting,
            carrying, pushing, pulling, or moving loads as part of everyday
            work.
        </p>

        <p>
            <strong>Manual Handling Training</strong> can help learners
            understand the potential risks associated with these activities
            and learn practical principles for safer handling.
        </p>

        <p>
            Our <strong>Manual Handling Course Galway</strong> can be
            completed online, allowing individuals and businesses to access
            the theory training without travelling to a physical training
            location.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Online Access:</strong>
                Complete the theory component remotely from Galway city or
                surrounding areas.
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

                    <h4>Flexible Galway Training</h4>

                    <p>
                        Complete your <strong>manual handling training
                        Galway</strong> from home, work, or another
                        convenient location.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Flexible Learning</h4>

                    <p>
                        Study the course material online at your own pace
                        and complete the required theory assessment through
                        the training platform.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Workplace Relevant</h4>

                    <p>
                        The course covers manual handling principles that
                        can be relevant to retail, hospitality,
                        logistics, manufacturing, and other workplaces.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Simple Pricing</h4>

                    <p>
                        Complete the course for €{{ config('global.course_price') }}
                        with no additional training charges.
                    </p>

                </div>

            </div>
        </div>

    </section>


    <article class="mh-container-content">

        <h2>Reducing Risk Through Practical Technique</h2>

        <p>
            Manual handling activities can place physical demands on the
            body, particularly when tasks involve awkward postures,
            repetitive movements, difficult loads, or restricted working
            areas.
        </p>

        <p>
            Our <strong>Manual Handling Training Galway</strong> focuses on
            practical principles that can help learners approach manual
            handling activities with greater awareness. Learners review
            body positioning, load assessment, controlled movement, and
            practical risk awareness.
        </p>

        <p>
            Understanding how to position the body, assess a load, and
            consider the surrounding environment can help learners prepare
            more effectively before performing a manual handling task.
        </p>

        <h3>Practical Risk Assessment with TILE</h3>

        <p>
            The TILE approach provides a practical framework for considering
            the main factors involved before handling a load.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Task:</strong>
                Consider the physical demands and movement involved,
                including lifting, carrying, pushing, or pulling.
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
                Check the surrounding area for obstacles, uneven surfaces,
                restricted spaces, lighting, and other potential hazards.
            </li>

        </ul>

        <p>
            Considering these factors before starting a manual handling
            activity can help learners identify potential hazards and
            approach the task with greater awareness.
        </p>

    </article>


    <article class="mh-container-content">

        <h2>A Flexible Way to Complete Training in Galway</h2>

        <p>
            Traditional classroom training may not always fit around busy
            schedules, shift work, or business operations. Our online
            platform provides a convenient way to access manual handling
            training without travelling to a physical training location.
        </p>

        <p>
            Participants can complete their
            <strong>manual handling course online Ireland</strong> using
            a computer, tablet, or smartphone at a convenient time.
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
