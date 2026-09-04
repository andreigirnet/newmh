@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Limerick Workplace Safety Training</span>
                    <h1>Manual Handling <br>Training Limerick</h1>
                    <p class="mh-lead-text">
                        Stay compliant and job-ready with **Manual Handling Certification Limerick**.
                        Built for workers across manufacturing, warehousing, and logistics, our online course delivers fast, practical training that meets Irish safety requirements.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Limerick Team Training</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Training in Limerick Work Environments</h2>
            <p>Limerick is a key hub for manufacturing, distribution, and industrial operations in Ireland. Many roles involve physical tasks such as lifting, carrying, and moving goods, making **manual handling training** essential for both safety and compliance.</p>

            <p>Under the **Safety, Health and Welfare at Work Act 2005**, employers are required to provide appropriate training for staff engaged in manual handling activities. This applies across factories, warehouses, construction sites, and service roles throughout Limerick.</p>

            <p>Our **Manual Handling Course Limerick** provides a simple, effective way to meet these legal requirements. Delivered fully online, it allows workers and employers to complete certification without downtime or travel.</p>

            <div class="mh-feature-list">
                <li><strong>Workplace Ready:</strong> Designed for real industrial and warehouse environments.</li>
                <li><strong>Recognised Certification:</strong> Valid across all sectors in Ireland.</li>
                <li><strong>Immediate Results:</strong> Get certified as soon as you finish the course.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">📦</div>
                        <h4>Built for Physical Jobs</h4>
                        <p>Perfect for workers handling goods, equipment, and materials in Limerick industries.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⏱️</div>
                        <h4>Fast Certification</h4>
                        <p>Complete your **manual handling training Limerick** in under an hour with no delays.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🏗️</div>
                        <h4>Industry Relevant</h4>
                        <p>Focused on construction, logistics, and manufacturing roles common in the region.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💳</div>
                        <h4>Cost Effective</h4>
                        <p>Affordable training at €{{ config('global.course_price') }} with no extra costs.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Preventing Injuries in High-Activity Roles</h2>
            <p>In physically demanding jobs, improper lifting techniques can quickly lead to injuries such as back strain, muscle fatigue, and long-term joint issues. These risks are especially common in Limerick’s industrial and warehouse sectors.</p>

            <p>Our **Manual Handling Training Limerick** focuses on practical methods that reduce strain and improve efficiency when handling loads. Workers learn how to lift, carry, and move objects safely while maintaining control and balance.</p>

            <p>By applying correct techniques, employees not only protect their health but also improve productivity and reduce workplace incidents.</p>

            <h3>Using TILE for Safer Work Practices</h3>
            <p>The TILE method is a key part of our training, helping workers assess risks before performing any task:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> Understand the physical effort and movement required.</li>
                <li><strong>Individual:</strong> Assess your strength, experience, and readiness.</li>
                <li><strong>Load:</strong> Identify weight, shape, and stability.</li>
                <li><strong>Environment:</strong> Check for hazards like tight spaces or uneven surfaces.</li>
            </ul>

            <p>This structured approach is essential in busy Limerick workplaces where safety decisions must often be made quickly.</p>
        </article>

        <article class="mh-container-content">
            <h2>Efficient Certification for Limerick Businesses</h2>
            <p>Coordinating traditional training sessions for teams can be costly and time-consuming, especially in industries that operate on tight schedules. Our online platform provides a more efficient alternative.</p>

            <p>Employees can complete their **manual handling course online Ireland** individually, without interrupting daily operations. This flexibility makes it ideal for shift-based work environments common in Limerick.</p>

            <p>For employers, it means consistent training, easy record keeping, and full compliance with Irish safety regulations. For workers, it means faster certification and improved job prospects.</p>

            <p>Certificates are issued instantly upon completion, ensuring you always have proof of training when needed.</p>

            <p>Join companies and workers across Limerick who rely on a faster, more practical approach to manual handling training.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('register')}}" class="btn-gold">Start Your Training — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
