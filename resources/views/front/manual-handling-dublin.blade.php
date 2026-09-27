
@extends('front.app')

@section('content')
    <div class="mh-leadership-page">

        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">

                    <span class="mh-top-badge">Online Manual Handling Training</span>

                    <h1>Manual Handling <br>Training Dublin</h1>

                    <p class="mh-lead-text">
                        Convenient <strong>Manual Handling Training Dublin</strong>
                        for individuals and teams. Complete your
                        <strong>Manual Handling Ireland</strong> course online,
                        study at your own pace, and complete the required
                        theory and practical assessments.
                    </p>

                    <div class="mh-btn-row">
                        <a href="{{ route('register') }}" class="btn-exclusive-teal">
                            Start Online Now — €{{ config('global.course_price') }}
                        </a>

                        <a href="{{ route('register') }}" class="btn-exclusive-ghost">
                            Dublin Team Training
                        </a>
                    </div>

                </div>
            </div>
        </header>


        <article class="mh-container-content">

            <h2>Manual Handling Training Dublin: What the Course Covers</h2>

            <p>
                In Dublin workplaces, manual handling activities can involve
                lifting, carrying, pushing, pulling, lowering, and moving loads.
                Appropriate training can help workers understand the risks
                associated with these activities and learn safer handling techniques.
            </p>

            <p>
                Our <strong>Manual Handling Online</strong> course provides
                training that can be completed remotely. The course covers
                important manual handling principles, safe lifting techniques,
                risk awareness, and practical considerations for handling loads.
            </p>

            <p>
                The <strong>Manual Handling Course Dublin</strong> can be completed
                online without travelling to a physical training location. After
                completing the theory and practical assessment requirements,
                participants can access their certificate through their dashboard.
            </p>

            <ul class="mh-feature-list">
                <li>
                    <strong>Online Access:</strong>
                    Complete the training remotely from Dublin or anywhere else.
                </li>

                <li>
                    <strong>Digital Certificate:</strong>
                    Download your certificate after successfully completing the
                    required assessments.
                </li>

                <li>
                    <strong>Certificate Verification:</strong>
                    Certificates include a unique verification ID that can be
                    checked through our verification system.
                </li>
            </ul>

        </article>


        <section class="mh-pillar-section">
            <div class="mh-container">

                <div class="mh-pillar-grid">

                    <div class="pillar-card">
                        <div class="pillar-icon">📍</div>

                        <h4>No Dublin Traffic</h4>

                        <p>
                            Avoid travelling to a training centre. Complete your
                            <strong>Manual Handling Course Dublin</strong> online
                            from a convenient location.
                        </p>
                    </div>


                    <div class="pillar-card">
                        <div class="pillar-icon">⏱️</div>

                        <h4>Flexible Learning</h4>

                        <p>
                            Study the course material at your own pace and complete
                            the required assessments when you are ready.
                        </p>
                    </div>


                    <div class="pillar-card">
                        <div class="pillar-icon">🏗️</div>

                        <h4>Practical Safety Skills</h4>

                        <p>
                            Learn practical principles for safer manual handling,
                            including lifting techniques, risk awareness, and
                            load assessment. Asses your skills with our online program.
                        </p>
                    </div>


                    <div class="pillar-card">
                        <div class="pillar-icon">💳</div>

                        <h4>Affordable Training</h4>

                        <p>
                            At €{{ config('global.course_price') }}, our
                            <strong>manual handling training online Ireland</strong>
                            course provides a convenient way to complete your
                            training remotely.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <article class="mh-container-content">

            <h2>Learning Safe Manual Handling Techniques</h2>

            <p>
                An important part of our <strong>Manual Handling Training Dublin</strong>
                course is understanding how the body is positioned when lifting,
                carrying, pushing, pulling, or moving loads. Using appropriate
                techniques can help reduce unnecessary strain and the risk of
                manual handling injuries.
            </p>

            <p>
                The training covers practical principles such as maintaining
                appropriate posture, keeping loads close to the body where suitable,
                assessing the load before lifting, and considering the surrounding
                environment.
            </p>

            <h3>Dynamic Risk Assessment (TILE)</h3>

            <p>
                Before performing a manual handling task, workers can consider
                the following factors:
            </p>

            <ul class="mh-feature-list">

                <li>
                    <strong>Task:</strong>
                    Consider the type of movement required, including lifting,
                    carrying, twisting, pushing, or pulling.
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
                    Check the surrounding area for obstacles, uneven or slippery
                    surfaces, restricted spaces, and other potential hazards.
                </li>

            </ul>

        </article>


        <article class="mh-container-content">

            <h2>Convenient Online Manual Handling Training</h2>

            <p>
                For Dublin workers, HR managers, and business owners, online
                <strong>Manual Handling Online</strong> training provides a
                convenient alternative to travelling to a physical training
                location. The course can be accessed using a computer, smartphone,
                or tablet.
            </p>

            <p> After completing the theory assessment, you will need to record a video of yourself performing a manual handling lift and send it to us via WhatsApp {{ config('global.phone') }} for review. Once our instructor has reviewed and approved your practical assessment, your <strong>Manual Handling Ireland certificate</strong> will be available for download as a PDF through your dashboard. </p>

            <p>
                The certificate provides evidence that you have completed the
                training course and the required assessment process through our
                platform.
            </p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('register') }}" class="btn-gold">
                    Enrol Today — €{{ config('global.course_price') }}
                </a>
            </div>

        </article>

    </div>
@endsection
