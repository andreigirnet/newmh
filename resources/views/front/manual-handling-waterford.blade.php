@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Waterford Safety Training Experts</span>
                    <h1>Manual Handling <br>Training Waterford</h1>
                    <p class="mh-lead-text">
                        Complete your **Manual Handling Certification Waterford** with a fast, reliable online course.
                        Designed for workers across retail, manufacturing, and logistics, our training helps you stay compliant while fitting around your daily routine.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Waterford Staff Training</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Training Across Waterford Workplaces</h2>
            <p>Waterford has a strong mix of industries, including retail, pharmaceutical production, manufacturing, and port-related logistics. Many of these roles involve regular lifting and moving of goods, making **manual handling training** essential for safe daily operations.</p>

            <p>Irish legislation, including the **Safety, Health and Welfare at Work Act 2005**, requires employers to provide proper training for staff engaged in manual handling tasks. This ensures both legal compliance and a safer working environment.</p>

            <p>Our **Manual Handling Course Waterford** provides a simple solution. Delivered entirely online, it allows individuals and businesses to complete training without travel, delays, or disruption to work schedules.</p>

            <div class="mh-feature-list">
                <li><strong>Suitable for All Sectors:</strong> From retail stores to industrial sites.</li>
                <li><strong>Recognised Certification:</strong> Accepted by employers across Ireland.</li>
                <li><strong>Immediate Access:</strong> Start and finish the course on your own schedule.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">📍</div>
                        <h4>Train Anywhere in Waterford</h4>
                        <p>Complete your **manual handling training Waterford** from home, workplace, or on the go.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⏱️</div>
                        <h4>Quick & Convenient</h4>
                        <p>Finish your certification in under an hour with no need for classroom sessions.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🏭</div>
                        <h4>Industry Relevant</h4>
                        <p>Training designed for Waterford’s retail, pharma, and logistics environments.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💳</div>
                        <h4>Transparent Pricing</h4>
                        <p>Only €{{ config('global.course_price') }} with no hidden fees or extra charges.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Safe Lifting for Everyday Work in Waterford</h2>
            <p>In many Waterford jobs, manual handling is part of daily routines—whether it’s stocking shelves, moving equipment, or handling deliveries. Without proper training, these tasks can lead to injuries such as back pain and muscle strain.</p>

            <p>Our **Manual Handling Training Waterford** teaches practical techniques that reduce these risks. Learners are shown how to lift correctly, position loads safely, and move efficiently in real working conditions.</p>

            <p>By applying these methods, workers can protect their health while maintaining productivity and confidence in their role.</p>

            <h3>Understanding Risk with TILE</h3>
            <p>The TILE approach is a key part of workplace safety, helping workers assess each situation before lifting:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> Identify the type of movement and level of effort required.</li>
                <li><strong>Individual:</strong> Consider your physical ability and experience.</li>
                <li><strong>Load:</strong> Evaluate size, weight, and stability.</li>
                <li><strong>Environment:</strong> Look for hazards such as obstacles or limited space.</li>
            </ul>

            <p>This method helps prevent accidents and ensures safer handling practices across all types of work environments in Waterford.</p>
        </article>

        <article class="mh-container-content">
            <h2>A Flexible Training Option for Waterford Workers</h2>
            <p>Traditional manual handling courses can be difficult to fit into busy schedules. Our online platform offers a more flexible solution that works around your time, not the other way around.</p>

            <p>With full 24/7 access, you can complete your **manual handling course online Ireland** whenever it suits you—before work, after shifts, or during free time.</p>

            <p>Employers benefit from an easy way to train teams without interrupting operations, while individuals gain a recognised qualification that can support career opportunities across multiple sectors.</p>

            <p>Once completed, your certificate is available instantly, ensuring you always have proof of training when required.</p>

            <p>Join workers and businesses across Waterford who are choosing a faster, simpler approach to manual handling certification.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('home')}}" class="btn-gold">Get Certified Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
