@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Compliant Verification Portal</span>
                    <h1>Manual Handling <br>Certificate Ireland</h1>
                    <p class="mh-lead-text">
                        Instant, job compliant **Manual Handling Ireland certification**.
                        Our digital certificates are recognized nationwide, valid for 3 years, and include unique verification IDs for total **work compliant standards**.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Get Your Certificate — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Verify a Certificate</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Is a Digital Manual Handling Certificate Legally Valid?</h2>
            <p>The **Manual Handling Certificate Ireland** issued by our platform is a fully recognized document under workplace safety regulations. Industry-standard guidelines accept digital certification provided the training is comprehensive, appropriate, and meets established regulatory frameworks.</p>

            <p>Our **Manual Handling Online** certificates are identical in professional standing to those issued in classroom settings. Every certificate is generated as a high-resolution PDF and includes a unique verification code, allowing employers to confirm the trainee's credentials in real-time through our global database.</p>

            <div class="mh-feature-list">
                <li><strong>Instant Delivery:</strong> Download your PDF immediately upon passing.</li>
                <li><strong>3-Year Validity:</strong> Fully compliant with refresher guidelines.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🎓</div>
                        <h4>Structured Standard</h4>
                        <p>Modules designed by expert instructors to ensure the highest educational quality in your **manual handling course Ireland**.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🎖️</div>
                        <h4>Compliant Curriculum</h4>
                        <p>Our curriculum is approved by recognized safety boards, providing international prestige.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📱</div>
                        <h4>Digital Wallet</h4>
                        <p>Access your **Manual Handling Ireland certification** anytime, anywhere on your smartphone or tablet.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💰</div>
                        <h4>Refund Policy</h4>
                        <p>We offer a 100% money-back guarantee if your employer does not accept our certificate.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>What Your Certificate Represents: Mastery of Safety</h2>
            <p>Your **Manual Handling Certificate** is more than just a document; it is proof of your mastery over spinal biomechanics. The human spine, specifically the lumbar region, is subjected to immense compression forces during lifting tasks. Failure to apply the **8 Principles of Safe Lifting** can result in permanent intervertebral disc damage.</p>

            https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcS6WHpy0eoeRQcydUm5HdlSi_ckYkSsRp08lC3Bdq0c73_Pv-fdSqpj9qdLPDuJ2juNhatPDCo1it6WEOw

            <p>To earn your **manual handling certification Ireland**, you must demonstrate competency in the TILE risk assessment method. This ensures that before any physical task begins, the worker has evaluated the Task, Individual, Load, and Environment. This proactive approach is what truly builds **job compliance** in the workplace.</p>

            <h3>Core Skills Verified:</h3>
            <ul class="mh-feature-list">
                <li><strong>Hazard Identification:</strong> Spotting risks in the environment before they cause harm.</li>
                <li><strong>Postural Alignment:</strong> Maintaining a neutral spine during lifting and carrying.</li>
                <li><strong>Leverage & Center of Gravity:</strong> Keeping loads close to the body to reduce spinal torque.</li>
                <li><strong>Leg Strength Utilization:</strong> Powering the lift with the quadriceps and glutes.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Enterprise Certificate Management</h2>
            <p>For Dublin HR managers and nationwide enterprises, our platform provides a dedicated Employer Dashboard. This allows for the bulk purchase of **manual handling training online Ireland** licenses, real-time progress tracking, and centralized certificate storage.</p>

            <p>Ensure your company remains audit-ready at all times. Our system automatically alerts you when an employee's **Manual Handling Ireland certification** is nearing its 3-year expiry, allowing for seamless refresher training and continuous work compliance.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('register')}}" class="btn-gold">Get Certified Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
