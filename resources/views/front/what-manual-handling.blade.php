@extends('front.app')

@section('content') <div class="mh-leadership-page">
    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">

                <span class="mh-top-badge">Manual Handling Explained</span>

                <h1>What is <br>Manual Handling?</h1>

                <p class="mh-lead-text">
                    Learn what <strong>Manual Handling</strong> means,
                    understand common manual handling activities, and
                    explore practical principles for safer lifting and
                    handling techniques.
                </p>

                <div class="mh-btn-row">
                    <a href="{{ route('register') }}" class="btn-exclusive-teal">
                        Start Online Training — €{{ config('global.course_price') }}
                    </a>

                    <a href="/" class="btn-exclusive-ghost">
                        More Details
                    </a>
                </div>

            </div>
        </div>
    </header>


    <article class="mh-container-content">

        <h2>What Does Manual Handling Mean?</h2>

        <p>
            <strong>Manual Handling</strong> generally refers to activities
            where a person uses physical force to lift, lower, carry, push,
            pull, move, or otherwise handle a load.
        </p>

        <p>
            Manual handling activities can take place in many different
            workplaces and may involve different types of loads. The level
            of risk can depend on factors such as the weight and shape of
            the load, the task being performed, the person carrying out
            the activity, and the surrounding environment.
        </p>

        <p>
            Understanding these factors is an important part of
            <strong>Manual Handling Training Ireland</strong>. Training can
            help learners recognise potential hazards and understand
            practical techniques for handling loads more safely.
        </p>

        <ul class="mh-feature-list">

            <li>
                <strong>Broad Scope:</strong>
                Manual handling can include lifting, carrying, pushing,
                pulling, lowering, and moving different types of loads.
            </li>

            <li>
                <strong>Risk Awareness:</strong>
                The potential risk can depend on the task, individual,
                load, and environment.
            </li>

        </ul>

    </article>


    <section class="mh-pillar-section">

        <div class="mh-container">

            <h2 style="text-align: center; margin-bottom: 50px;">
                Examples of Manual Handling
            </h2>

            <div class="mh-pillar-grid">

                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Boxes and Equipment</h4>

                    <p>
                        Boxes, tools, equipment, materials, and other
                        objects that may need to be lifted, carried,
                        lowered, or moved.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>People and Animals</h4>

                    <p>
                        Certain workplaces may involve assisting or
                        repositioning people or animals as part of
                        everyday work activities.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Trolleys and Carts</h4>

                    <p>
                        Pushing or pulling equipment such as trolleys,
                        carts, and other handling aids can also involve
                        manual handling activities.
                    </p>

                </div>


                <div class="pillar-card">

                    <div class="pillar-icon"></div>

                    <h4>Different Load Characteristics</h4>

                    <p>
                        Weight is only one consideration. Size, shape,
                        stability, grip, and the position of the load
                        can also affect how it should be handled.
                    </p>

                </div>

            </div>
        </div>

    </section>


    <article class="mh-container-content">

        <h2>Why Is Manual Handling Training Important?</h2>

        <p>
            Manual handling activities can place physical demands on the
            body, particularly when tasks involve awkward postures,
            repetitive movements, heavy or unstable loads, or restricted
            working areas.
        </p>

        <p>
            <strong>Manual Handling Training</strong> can help learners
            understand these risks and develop practical habits for
            approaching manual handling activities more safely.
        </p>

        <p>
            Training can cover topics such as body position, load
            assessment, lifting technique, movement, posture, and
            awareness of the surrounding environment.
        </p>

        <h3>The TILE Risk Assessment Model</h3>

        <p>
            Our <strong>Manual Handling Course Ireland</strong> introduces
            the TILE approach as a practical way of considering the main
            factors involved in a manual handling task.
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
                Consider the weight, size, shape, stability, grip, and
                other characteristics of the load.
            </li>

            <li>
                <strong>Environment:</strong>
                Consider the surrounding area, including floors, lighting,
                obstacles, available space, and other potential hazards.
            </li>

        </ul>

    </article>


    <article class="mh-container-content">

        <h2>Complete Your Manual Handling Ireland Training</h2>

        <p>
            Our <strong>Manual Handling Training Online Ireland</strong>
            course combines online theory with a practical assessment.
            Learners can study the course material online and complete
            the theory assessment through the platform.
        </p>

        <p>
            After successfully completing the theory assessment, you will
            need to record a video of yourself performing a manual handling
            lift and send it to us via WhatsApp for review.
        </p>

        <p>
            Our instructor reviews the practical video. Once the practical
            assessment has been successfully approved, your
            <strong>Manual Handling certificate</strong> will be issued
            and made available in your dashboard as a PDF.
        </p>

        <p>
            Certificates issued through our platform are valid for
            3 years and include a unique verification ID that can be
            checked through our certificate verification system.
        </p>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('register') }}" class="btn-gold">
                Start Your Training Today — €{{ config('global.course_price') }}
            </a>
        </div>

    </article>

</div>

@endsection
