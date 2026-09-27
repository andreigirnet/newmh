@extends('front.app')

@section('content') <div class="mh-leadership-page">

    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">

                <span class="mh-top-badge">Practical Safety Guide</span>

                <h1>Safe Lifting <br>Techniques & Principles</h1>

                <p class="mh-lead-text">
                    Learn practical <strong>Safe Lifting Techniques</strong>
                    for lifting, carrying, pushing, pulling, and moving loads.
                    Our training helps learners understand safer manual
                    handling practices and practical risk awareness.
                </p>

                <div class="mh-btn-row">
                    <a href="{{ route('register') }}" class="btn-exclusive-teal">
                        Start Training — €{{ config('global.course_price') }}
                    </a>

                    <a href="/" class="btn-exclusive-ghost">
                        Start Now
                    </a>
                </div>

            </div>
        </div>
    </header>


    <article class="mh-container-content">

        <h2>Understanding a Safe Lift</h2>

        <p>
            Safe lifting involves considering the load, your body position,
            the movement required, and the surrounding environment before
            beginning the task. Keeping a load in a suitable position and
            avoiding unnecessary reaching or twisting can help reduce
            physical strain.
        </p>

        <p>
            Our <strong>Manual Handling Online</strong> course introduces
            learners to practical principles such as maintaining appropriate
            posture, positioning the load close to the body where suitable,
            and using controlled movements when lifting and carrying.
        </p>

        <p>
            Every manual handling task is different, so the appropriate
            approach depends on the characteristics of the task, the load,
            the individual, and the environment.
        </p>

    </article>


    <section class="mh-pillar-section">

        <div class="mh-container">

            <h2 style="text-align: center; margin-bottom: 50px;">
                Key Manual Handling Principles
            </h2>

            <div class="mh-pillar-grid">

                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>1. Stable Position</h4>

                    <p>
                        Position your feet securely and maintain a stable
                        base before beginning a lift.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>2. Appropriate Posture</h4>

                    <p>
                        Maintain an appropriate body position and avoid
                        unnecessary bending or awkward postures.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>3. Controlled Movement</h4>

                    <p>
                        Use controlled movements and avoid sudden or
                        unnecessary movements while handling a load.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>4. Secure Grip</h4>

                    <p>
                        Use a suitable grip and make sure the load can be
                        handled securely before moving it.
                    </p>

                </div>

            </div>
        </div>

    </section>


    <article class="mh-container-content">

        <h2>Risk Assessment: The TILE Principle</h2>

        <p>
            A safe manual handling task starts before you begin lifting.
            The TILE approach provides a practical framework for considering
            the main factors that may affect a manual handling activity.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Task:</strong>
                Consider the movement required, including lifting,
                carrying, pushing, pulling, reaching, or twisting.
            </li>

            <li>
                <strong>Individual:</strong>
                Consider the person's ability, experience, and any relevant
                limitations before performing the task.
            </li>

            <li>
                <strong>Load:</strong>
                Consider the weight, size, shape, stability, grip, and
                other characteristics of the load.
            </li>

            <li>
                <strong>Environment:</strong>
                Check the surrounding area for obstacles, uneven surfaces,
                restricted spaces, lighting, and other potential hazards.
            </li>

        </ul>

    </article>


    <article class="mh-container-content">

        <h2>Common Manual Handling Mistakes</h2>

        <p>
            Manual handling can become more difficult when a person uses
            awkward postures, moves too quickly, reaches unnecessarily,
            or attempts to handle a load without first considering the
            task and surrounding environment.
        </p>

        <p>
            Our <strong>Manual Handling Training Online Ireland</strong>
            course introduces learners to practical ways of approaching
            manual handling activities, including maintaining suitable
            posture, positioning loads appropriately, and using controlled
            movements.
        </p>

        <div style="background: #f1f5f9; padding: 30px; border-radius: 12px; margin-top: 40px;">

            <h4 style="color: var(--corporate-teal-dark); margin-top: 0;">
                Practical Tip: Keep the Load Close
            </h4>

            <p style="margin-bottom: 0;">
                Where appropriate, keeping a load close to your body can
                help reduce unnecessary reaching and physical strain.
                Always consider the characteristics of the load and the
                task before deciding how it should be positioned.
            </p>

        </div>

    </article>


    <article class="mh-container-content">

        <h2>Learn Safe Lifting Techniques</h2>

        <p>
            Understanding <strong>Safe Lifting Techniques</strong> can help
            you approach manual handling activities with greater awareness.
            These principles can be useful in different working environments
            and during everyday activities involving lifting and moving loads.
        </p>

        <p>
            Our <strong>Manual Handling Course Ireland</strong> combines
            online theory with a practical assessment. After completing
            the theory assessment, you will need to record a video of
            yourself performing a manual handling lift and send it to us
            via WhatsApp for review.
        </p>

        <p>
            Our instructor reviews the practical video. Once the assessment
            has been successfully approved, your
            <strong>Manual Handling certificate</strong> will be issued
            and made available in your dashboard as a PDF.
        </p>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('register') }}" class="btn-gold">
                Enrol Now — €{{ config('global.course_price') }}
            </a>
        </div>

    </article>

</div>

@endsection
