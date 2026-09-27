@extends('front.app')

@section('content') <div class="mh-leadership-page">

    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">

                <span class="mh-top-badge">Limerick Online Manual Handling Training</span>

                <h1>Manual Handling <br>Training Limerick</h1>

                <p class="mh-lead-text">
                    Complete your <strong>Manual Handling Training Limerick</strong>
                    online with a convenient course designed for workers,
                    individuals, and businesses. Learn practical manual
                    handling techniques and complete the required theory
                    and practical assessments.
                </p>

                <div class="mh-btn-row">
                    <a href="{{ route('register') }}" class="btn-exclusive-teal">
                        Start Course — €{{ config('global.course_price') }}
                    </a>

                    <a href="{{ route('register') }}" class="btn-exclusive-ghost">
                        Limerick Team Training
                    </a>
                </div>

            </div>
        </div>
    </header>


    <article class="mh-container-content">

        <h2>Manual Handling Training in Limerick Work Environments</h2>

        <p>
            Limerick has a wide range of workplaces where manual handling
            activities may be part of everyday work, including manufacturing,
            warehousing, logistics, retail, construction, hospitality, and
            other service environments.
        </p>

        <p>
            <strong>Manual Handling Training</strong> can help workers
            understand the risks associated with lifting, carrying,
            pushing, pulling, lowering, and moving loads. Training can
            introduce practical techniques for approaching these activities
            with greater awareness.
        </p>

        <p>
            Our <strong>Manual Handling Course Limerick</strong> can be
            completed online, allowing learners to study the theory without
            travelling to a physical training location.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Workplace Relevant:</strong>
                Covers common manual handling activities found across
                different working environments.
            </li>

            <li>
                <strong>Online Training:</strong>
                Complete the theory component remotely using a computer,
                tablet, or smartphone.
            </li>

            <li>
                <strong>Practical Assessment:</strong>
                Submit a video of yourself performing a manual handling
                lift via WhatsApp for instructor review.
            </li>

        </ul>

    </article>


    <section class="mh-pillar-section">

        <div class="mh-container">

            <div class="mh-pillar-grid">

                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Built for Physical Jobs</h4>

                    <p>
                        Learn practical principles for handling goods,
                        equipment, materials, and other loads in different
                        workplace environments.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Flexible Learning</h4>

                    <p>
                        Complete your <strong>manual handling training
                        Limerick</strong> online and study the course
                        material at a convenient time.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>WhatsApp Assessment</h4>

                    <p>
                        Record yourself performing a manual handling lift
                        and send the video to us via WhatsApp for practical
                        assessment by our instructor.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Transparent Pricing</h4>

                    <p>
                        Complete the course for €{{ config('global.course_price') }}
                        with no additional training charges.
                    </p>

                </div>

            </div>
        </div>

    </section>


    <article class="mh-container-content">

        <h2>Preventing Injuries in High-Activity Roles</h2>

        <p>
            Physically demanding work can involve repeated lifting,
            carrying, pushing, pulling, and moving of loads. Awkward
            postures, unsuitable lifting techniques, and difficult working
            environments can increase physical strain.
        </p>

        <p>
            Our <strong>Manual Handling Training Limerick</strong> course
            focuses on practical methods for approaching manual handling
            activities more safely. Learners review body positioning,
            load assessment, controlled movement, and risk awareness.
        </p>

        <p>
            The training can help learners develop greater awareness when
            performing manual handling tasks in different working
            environments.
        </p>

        <h3>Using TILE for Safer Work Practices</h3>

        <p>
            The TILE approach provides a practical framework for considering
            the main factors involved before handling a load.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Task:</strong>
                Consider the physical effort and movement required.
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
                Check for hazards such as obstacles, uneven surfaces,
                restricted spaces, and poor lighting.
            </li>

        </ul>

        <p>
            Considering these factors can help learners approach manual
            handling activities with greater awareness and preparation.
        </p>

    </article>


    <article class="mh-container-content">

        <h2>Flexible Training for Limerick Businesses and Workers</h2>

        <p>
            Coordinating traditional training sessions can be difficult for
            businesses with busy schedules or shift-based teams. Our online
            platform provides a convenient way to access manual handling
            training without travelling to a physical training location.
        </p>

        <p>
            Employees can complete their
            <strong>manual handling course online Ireland</strong> through
            the online platform using a computer, tablet, or smartphone.
        </p>

        <p>
            After completing the theory assessment, learners record a video
            of themselves performing a manual handling lift and send it to
            us via WhatsApp for review.
        </p>

        <p>
            Our instructor reviews the submitted practical video. Once the
            assessment has been successfully approved, the
            <strong>Manual Handling Ireland certificate</strong> is issued
            and made available in the learner's dashboard as a PDF.
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
