@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Cork’s Leading Safety Training</span>
                    <h1>Manual Handling <br>Training Cork</h1>
                    <p class="mh-lead-text">
                        Upgrade your workplace safety with trusted **Manual Handling Certification Cork**.
                        Complete your **manual handling course online in Ireland** quickly and stay fully compliant with Irish workplace regulations.
                        Designed for busy professionals, our platform delivers fast, flexible, and fully job compliant training across Cork and beyond.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Training Cork</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Certification Cork: Stay Compliant</h2>
            <p>Across Cork’s growing industries, **manual handling training online** is now a key requirement for workplace safety. According to national safety regulations, employers must ensure that staff involved in lifting or carrying tasks receive proper instruction.</p>

            <p>Standard workplace guidelines further reinforce these obligations across sectors like logistics, healthcare, construction, and hospitality. Our **Manual Handling Course Cork** is designed to fully meet standard safety benchmarks while allowing participants to complete training remotely at their convenience.</p>

            <p>By choosing online certification, Cork businesses reduce downtime, eliminate travel costs, and ensure consistent training standards across teams. Whether you are an individual worker or managing a large workforce, our system simplifies compliance without sacrificing quality.</p>

            <div class="mh-feature-list">
                <li><strong>Recognised Nationwide:</strong> Certificates accepted throughout Ireland.</li>
                <li><strong>Inspection Ready:</strong> Digital proof available instantly for compliance checks.</li>
                <li><strong>Flexible Access:</strong> Train anytime on mobile, tablet, or desktop.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">📍</div>
                        <h4>Train Anywhere in Cork</h4>
                        <p>No need to travel. Complete your **manual handling training Cork** from home, office, or job site anywhere in the county.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⏱️</div>
                        <h4>Quick Certification</h4>
                        <p>Finish your course in under an hour and receive your **manual handling certificate Ireland** immediately after passing.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🏗️</div>
                        <h4>Industry Focused</h4>
                        <p>Content adapted for Cork’s key sectors including construction, warehousing, healthcare, and retail environments.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💳</div>
                        <h4>Affordable Training</h4>
                        <p>Professional certification at just €{{ config('global.course_price') }}, offering excellent value for **manual handling courses online Ireland**.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Understanding Safe Lifting Techniques</h2>
            <p>Our **Manual Handling Training Cork** places strong emphasis on protecting the spine during lifting tasks. Poor handling techniques can lead to serious injuries, particularly affecting the lower back, shoulders, and joints.</p>

            <p>Workplace injuries related to incorrect manual handling remain one of the most common causes of lost productivity in Ireland. That is why our course focuses not only on theory but also on practical, real-world application of safe lifting techniques.</p>

            <p>Through clear demonstrations, learners understand how to apply correct posture, reduce strain, and handle loads safely. The course covers essential lifting practices that support long-term health and ensure **work compliance in Ireland**.</p>

            <p>We also highlight how small adjustments—such as keeping loads close to the body or avoiding twisting movements—can significantly reduce injury risk. These techniques are simple but highly effective when applied consistently in daily work routines.</p>

            <h3>Using the TILE Risk Assessment</h3>
            <p>Before lifting any object, workers are trained to evaluate risks using the TILE method, a proven approach used across Irish workplaces:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> Consider the type of movement required and any awkward positions.</li>
                <li><strong>Individual:</strong> Evaluate personal ability, experience, and limitations.</li>
                <li><strong>Load:</strong> Check size, weight, and stability of the item.</li>
                <li><strong>Environment:</strong> Identify hazards such as uneven surfaces, obstacles, or limited space.</li>
            </ul>

            <p>Applying the TILE assessment helps prevent accidents before they happen, making it an essential part of daily operations in many Cork workplaces.</p>
        </article>

        <article class="mh-container-content">
            <h2>Trusted by Thousands Across Ireland</h2>
            <p>Businesses in Cork are increasingly choosing online training to simplify compliance. Traditional courses often involve scheduling conflicts, travel expenses, and reduced productivity.</p>

            <p>Our **manual handling online Ireland** platform eliminates these challenges by offering a streamlined digital solution. Employees can complete training at their own pace, whether during work hours or from home.</p>

            <p>For employers, this means easier staff management, consistent training records, and full adherence to workplace regulations. For individuals, it means faster certification and improved job opportunities.</p>

            <p>Upon completion, certificates are issued instantly in PDF format, ready to download, print, or share with employers. This ensures you are always prepared for audits, job applications, or workplace requirements.</p>

            <p>Join thousands of workers and companies across Cork who trust our platform for reliable, fast, and professional manual handling training.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('register')}}" class="btn-gold">Get Certified Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
