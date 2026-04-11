@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Kilkenny Workplace Safety Training</span>
                    <h1>Manual Handling <br>Training Kilkenny</h1>
                    <p class="mh-lead-text">
                        Get your **Manual Handling Certification Kilkenny** with a simple and flexible online course.
                        Ideal for retail, hospitality, and local businesses, our training helps you stay compliant while working around your daily routine.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Kilkenny Business Training</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Training for Kilkenny Workplaces</h2>
            <p>Kilkenny’s economy is built on a strong mix of retail, hospitality, tourism, and small to medium-sized businesses. From busy cafés and hotels to stockrooms and local shops, **manual handling** plays a key role in everyday work.</p>

            <p>Under the **Safety, Health and Welfare at Work Act 2005**, employers must ensure that staff are properly trained in safe handling techniques. This applies to both full-time employees and part-time or seasonal workers across Kilkenny.</p>

            <p>Our **Manual Handling Course Kilkenny** provides an easy way to meet these requirements. Delivered fully online, it allows you to complete training at your own pace without attending in-person sessions.</p>

            <div class="mh-feature-list">
                <li><strong>Perfect for Local Businesses:</strong> Designed for shops, cafés, and service roles.</li>
                <li><strong>Recognised Across Ireland:</strong> Certification accepted nationwide.</li>
                <li><strong>Instant Certificate:</strong> Download immediately after completion.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">📍</div>
                        <h4>Train Anywhere in Kilkenny</h4>
                        <p>Complete your **manual handling training Kilkenny** from home, work, or on your mobile device.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⏱️</div>
                        <h4>Quick & Simple</h4>
                        <p>Finish your certification in under an hour with a straightforward online process.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🏨</div>
                        <h4>Hospitality Focused</h4>
                        <p>Relevant for hotels, restaurants, and tourism-based jobs across Kilkenny.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💳</div>
                        <h4>Affordable Option</h4>
                        <p>Get certified for just €{{ config('global.course_price') }} with no hidden costs.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Safe Handling in Everyday Roles</h2>
            <p>In Kilkenny, many roles involve lifting deliveries, moving stock, or handling equipment throughout the day. Without proper training, these routine tasks can lead to injuries such as back strain or fatigue.</p>

            <p>Our **Manual Handling Training Kilkenny** focuses on practical, easy-to-follow techniques that help reduce these risks. Learners are guided through safe lifting methods that can be applied immediately in real work situations.</p>

            <p>Understanding how to position your body, control loads, and avoid unnecessary strain can make a significant difference in long-term health and workplace safety.</p>

            <h3>Using TILE for Safer Work Decisions</h3>
            <p>The TILE method is a simple way to assess risk before lifting:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> What movement is required and how often?</li>
                <li><strong>Individual:</strong> Are you capable and prepared for the task?</li>
                <li><strong>Load:</strong> Is it heavy, awkward, or unstable?</li>
                <li><strong>Environment:</strong> Are there obstacles or tight spaces?</li>
            </ul>

            <p>This approach helps workers across Kilkenny make safer decisions in busy, fast-paced environments.</p>
        </article>

        <article class="mh-container-content">
            <h2>Flexible Training for Kilkenny Workers</h2>
            <p>With many people in Kilkenny balancing work, family, and varying schedules, flexibility is key. Our online platform allows you to complete your **manual handling course online Ireland** whenever it suits you.</p>

            <p>Whether you are starting a new job, updating your certification, or training staff, this course provides a convenient and reliable solution.</p>

            <p>Employers benefit from a simple way to ensure compliance, while workers gain a recognised qualification that can support opportunities across retail, hospitality, and other sectors.</p>

            <p>Your certificate is issued instantly upon completion, so you are ready for work without delays.</p>

            <p>Join individuals and businesses across Kilkenny who are choosing a more efficient way to complete their manual handling training.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('home')}}" class="btn-gold">Start Your Certification — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
