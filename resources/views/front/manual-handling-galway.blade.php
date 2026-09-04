@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Galway’s Trusted Safety Training</span>
                    <h1>Manual Handling <br>Training Galway</h1>
                    <p class="mh-lead-text">
                        Stay compliant and job-ready with professional **Manual Handling Certification Galway**.
                        Our fully online course is designed for Galway workers and businesses who need fast, reliable,
                        and HSA-aligned **manual handling training in Ireland** without disrupting their schedule.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Galway Business Training</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Certification Galway: Workplace Compliance Made Simple</h2>
            <p>In Galway’s diverse economy—ranging from tourism and hospitality to medical technology and logistics—safe manual handling is a critical part of daily operations. Irish law requires employers to provide appropriate training under the **Safety, Health and Welfare at Work Act 2005**.</p>

            <p>The **General Application Regulations 2007** apply across all industries, ensuring that workers are properly trained to reduce risk and prevent injury. Our **Manual Handling Course Galway** meets these requirements through a flexible online format that fits around your work and lifestyle.</p>

            <p>Whether you are working in a busy Galway city centre business, a warehouse on the outskirts, or a healthcare setting, this course provides the knowledge needed to meet legal obligations and maintain a safe working environment.</p>

            <div class="mh-feature-list">
                <li><strong>Accepted Across Ireland:</strong> Recognised certification for all workplaces.</li>
                <li><strong>Instant Access:</strong> Start training immediately after enrolment.</li>
                <li><strong>Audit Prepared:</strong> Easily present certification when required.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">📍</div>
                        <h4>Flexible Galway Training</h4>
                        <p>Complete your **manual handling training Galway** from anywhere—no need to attend in-person sessions.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⏱️</div>
                        <h4>Fast & Efficient</h4>
                        <p>Get certified quickly with a streamlined course designed for busy professionals and students.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🏗️</div>
                        <h4>Relevant to Your Job</h4>
                        <p>Course material reflects real working conditions across Galway industries, from retail to healthcare.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💳</div>
                        <h4>Simple Pricing</h4>
                        <p>Clear, affordable pricing at €{{ config('global.course_price') }} with no hidden costs.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Reducing Injury Risks Through Proper Technique</h2>
            <p>Manual handling injuries are one of the leading causes of workplace absences in Ireland. In Galway, where many roles involve physical tasks, understanding proper lifting technique is essential for long-term health and productivity.</p>

            <p>Our **Manual Handling Training Galway** focuses on safe movement principles that reduce strain on the body. Learners are guided through correct lifting posture, load positioning, and movement control to minimise risk.</p>

            <p>By applying these techniques consistently, workers can prevent common issues such as back pain, muscle strain, and joint injuries—helping both individuals and employers maintain safer workplaces.</p>

            <h3>Practical Risk Assessment with TILE</h3>
            <p>We teach a structured approach to risk awareness using the TILE method, widely used across Irish workplaces:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> Understand the physical demands and movement involved.</li>
                <li><strong>Individual:</strong> Consider personal capability and experience level.</li>
                <li><strong>Load:</strong> Assess the weight, size, and stability of the object.</li>
                <li><strong>Environment:</strong> Evaluate surroundings for hazards or limitations.</li>
            </ul>

            <p>This approach helps Galway workers make safer decisions before performing any lifting task, reducing the likelihood of injury.</p>
        </article>

        <article class="mh-container-content">
            <h2>A Smarter Way to Get Certified in Galway</h2>
            <p>Traditional classroom-based training can be time-consuming and difficult to schedule, especially in a busy city like Galway. Our online system offers a modern alternative that is both efficient and reliable.</p>

            <p>With 24/7 access, participants can complete their **manual handling course online Ireland** at a time that suits them. This flexibility is ideal for shift workers, students, and businesses managing multiple employees.</p>

            <p>Once completed, your certificate is generated instantly and can be downloaded for immediate use. There are no delays, making it perfect for those who need certification quickly for work or compliance purposes.</p>

            <p>Join professionals across Galway who have already chosen a faster, more practical way to complete their manual handling training.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('register')}}" class="btn-gold">Start Your Certification — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
