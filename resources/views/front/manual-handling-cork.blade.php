@extends('front.app')

@section('content') <div class="mh-leadership-page">

    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">

                <span class="mh-top-badge">Cork Online Manual Handling Training</span>

                <h1>Manual Handling <br>Training Cork</h1>

                <p class="mh-lead-text">
                    Complete your <strong>Manual Handling Training Cork</strong>
                    online with a flexible course designed for individuals,
                    workers, and businesses. Learn practical manual handling
                    techniques and complete the required theory and practical
                    assessments without travelling to a physical training
                    location.
                </p>

                <div class="mh-btn-row">
                    <a href="{{ route('register') }}" class="btn-exclusive-teal">
                        Start Course — €{{ config('global.course_price') }}
                    </a>

                    <a href="{{ route('register') }}" class="btn-exclusive-ghost">
                        Corporate Training Cork
                    </a>
                </div>

            </div>
        </div>
    </header>


    <article class="mh-container-content">

        <h2>Manual Handling Training for Cork Workplaces</h2>

        <p>
            Cork has a wide range of workplaces, including logistics, construction, hospitality, retail, manufacturing,
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
            Our <strong>Manual Handling Course Cork</strong> can be
            completed online, allowing individuals and businesses to access
            the theory training remotely and study at a convenient time.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Online Access:</strong>
                Complete the theory component using a computer, tablet,
                or smartphone from Cork or surrounding areas.
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

                    <h4>Train Anywhere in Cork</h4>

                    <p>
                        Complete your <strong>manual handling training
                        Cork</strong> from home, work, or another convenient
                        location.
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

                    <h4>Industry Relevant</h4>

                    <p>
                        The course covers manual handling principles that
                        can be relevant to construction, warehousing,
                        retail, hospitality, and other workplaces.
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

        <h2>Understanding Safe Lifting Techniques</h2>

        <p>
            Manual handling activities can place physical demands on the
            body, particularly when tasks involve awkward postures,
            repetitive movements, difficult loads, or restricted working
            areas.
        </p>

        <p>
            Our <strong>Manual Handling Training Cork</strong> focuses on
            practical principles that can help learners approach lifting
            and handling activities with greater awareness. Learners review
            body positioning, load assessment, controlled movement, and
            practical risk awareness.
        </p>

        <p>
            The training introduces practical considerations such as
            maintaining appropriate posture, positioning a load close to
            the body where suitable, and avoiding unnecessary twisting or
            awkward movements.
        </p>

        <p>
            Every manual handling task is different, so the appropriate
            approach depends on the characteristics of the task, the load,
            the individual, and the surrounding environment.
        </p>

        <h3>Using the TILE Risk Assessment</h3>

        <p>
            The TILE approach provides a practical framework for considering
            the main factors involved before handling a load.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Task:</strong>
                Consider the type of movement required, including lifting,
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
                Check for uneven surfaces, obstacles, restricted spaces,
                lighting, and other potential hazards.
            </li>

        </ul>

        <p>
            Considering these factors before starting a manual handling
            activity can help learners identify potential hazards and
            prepare for the task.
        </p>

    </article>


    <article class="mh-container-content">

        <h2>A Flexible Way to Complete Manual Handling Training in Cork</h2>

        <p>
            Traditional classroom training may not always fit around busy
            schedules, shift work, or business operations. Our online
            platform provides a convenient way to access
            <strong>manual handling online Ireland</strong> training without
            travelling to a physical training location.
        </p>

        <p>
            Individuals and businesses can access the course using a
            computer, tablet, or smartphone and complete the theory
            assessment at a convenient time.
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
