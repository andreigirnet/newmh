@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Sligo Workplace Safety Training</span>
                    <h1>Manual Handling <br>Training Sligo</h1>
                    <p class="mh-lead-text">
                        Complete your **Manual Handling Certification Sligo** with a flexible online course designed for local workers and businesses.
                        Whether you are in healthcare, retail, or hospitality, our training helps you meet Irish safety requirements quickly and efficiently.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Sligo Staff Training</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Training for Sligo Workplaces</h2>
            <p>Sligo’s workforce includes a mix of healthcare services, retail businesses, tourism, and small enterprises. Many of these roles involve daily lifting, carrying, and moving items, making **manual handling training** essential for safety and compliance.</p>

            <p>Under the **Safety, Health and Welfare at Work Act 2005**, employers must ensure that employees are properly trained to handle loads safely. This applies across hospitals, shops, hotels, and workplaces throughout Sligo.</p>

            <p>Our **Manual Handling Course Sligo** offers a practical solution. Delivered entirely online, it allows individuals and businesses to complete training without needing to travel or attend scheduled sessions.</p>

            <div class="mh-feature-list">
                <li><strong>Accessible Anywhere:</strong> Ideal for workers across Sligo town and surrounding areas.</li>
                <li><strong>Recognised Certification:</strong> Accepted by employers across Ireland.</li>
                <li><strong>Fast Completion:</strong> Get certified quickly and efficiently.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">📍</div>
                        <h4>Train From Any Location</h4>
                        <p>Complete your **manual handling training Sligo** from home, work, or on your mobile device.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⏱️</div>
                        <h4>Quick Certification</h4>
                        <p>Finish your course in under an hour with a simple and user-friendly system.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🏥</div>
                        <h4>Healthcare & Retail Focus</h4>
                        <p>Designed for roles common in Sligo, including hospitals, shops, and service jobs.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💳</div>
                        <h4>Affordable Training</h4>
                        <p>Get certified for €{{ config('global.course_price') }} with no hidden fees.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Reducing Risk in Everyday Work</h2>
            <p>In Sligo, many jobs involve regular manual tasks such as handling deliveries, stocking shelves, or assisting with equipment. Without proper technique, these activities can lead to injuries like back pain and muscle strain.</p>

            <p>Our **Manual Handling Training Sligo** focuses on clear, practical guidance that can be applied immediately in real work situations. Learners are shown how to lift safely, maintain balance, and reduce strain on the body.</p>

            <p>These skills are especially important in smaller teams where every worker plays a key role in daily operations.</p>

            <h3>Using the TILE Method</h3>
            <p>We teach the TILE method to help workers assess risks before lifting:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> What movement is required?</li>
                <li><strong>Individual:</strong> Are you physically prepared?</li>
                <li><strong>Load:</strong> Is the object heavy or difficult to handle?</li>
                <li><strong>Environment:</strong> Are there any hazards nearby?</li>
            </ul>

            <p>This simple approach helps prevent injuries and supports safer working practices across all industries in Sligo.</p>
        </article>

        <article class="mh-container-content">
            <h2>Flexible Certification for Sligo Workers</h2>
            <p>For many people in Sligo, travelling to training centres is not always practical. That is why our course is fully online, giving you the flexibility to complete your **manual handling course online Ireland** whenever it suits you.</p>

            <p>Whether you are starting a new job, updating your certification, or training a team, our platform offers a reliable and efficient solution.</p>

            <p>Employers can ensure staff are trained without interrupting operations, while individuals gain a recognised qualification that can open up new opportunities.</p>

            <p>Your certificate is available instantly after completion, so you are ready to meet job or compliance requirements straight away.</p>

            <p>Join workers across Sligo who are choosing a simpler and more flexible way to complete their manual handling training.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('register')}}" class="btn-gold">Get Certified Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
