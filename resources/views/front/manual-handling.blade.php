@extends('front.app')

@section('content')
    <div class="mhc-wrapper">
        <!-- Premium Hero Section -->
        <header class="mhc-hero">
            <div class="mhc-container">
                <div class="mhc-hero-inner">
                    <div class="mhc-badge">Job Compliant Training 2026</div>
                    <h1 class="mhc-display-title">Manual Handling Course <br><span class="mhc-highlight">Ireland Certification</span></h1>
                    <p class="mhc-hero-lead">The gold standard in <strong>workplace safety training</strong>. Get certified with our <strong>work compliant manual handling training Ireland</strong>, designed to reduce workplace injuries and ensure full operational standards.</p>
                    <div class="mhc-action-group">
                        <a href="{{route('register')}}" class="mhc-btn mhc-btn-primary">Book Training Now</a>
                        <a href="#compliance" class="mhc-btn mhc-btn-outline">View Regulatory Requirements</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- SEO Content Section -->
        <section id="compliance" class="mhc-section">
            <div class="mhc-container-sm">
                <div class="mhc-section-tag">Regulatory Standards</div>
                <h2 class="mhc-section-title">Manual Handling Legislation Ireland</h2>
                <p>Every employer in the Republic of Ireland is governed by standard workplace guidelines. Our <strong>manual handling training course</strong> is specifically curated to fulfill the requirements set out by major governing bodies and standard safety boards.</p>

                <p>Failure to provide adequate <strong>manual handling certification</strong> can lead to significant liability. We focus on the <strong>prevention of musculoskeletal disorders (MSDs)</strong> through rigorous risk assessment and ergonomic best practices.</p>

                <div class="mhc-visual-callout">
                    <p class="mhc-caption">Mastering the 8-point lifting technique for <strong>safe manual handling Ireland</strong>.</p>
                </div>
            </div>
        </section>

        <!-- Keyword-Rich Feature Grid -->
        <section class="mhc-section mhc-bg-light">
            <div class="mhc-container">
                <div class="mhc-header-center">
                    <h2 class="mhc-section-title">Course Modules & Learning Outcomes</h2>
                    <p>Comprehensive <strong>occupational health and safety</strong> modules for Irish businesses.</p>
                </div>

                <div class="mhc-grid">
                    <div class="mhc-card">
                        <div class="mhc-card-icon">01</div>
                        <h3>Ergonomic Principles</h3>
                        <p>Learn the <strong>mechanics of the spine</strong> and how to apply <strong>ergonomic lifting techniques</strong> to minimize the risk of back injury in the workplace.</p>
                    </div>
                    <div class="mhc-card">
                        <div class="mhc-card-icon">02</div>
                        <h3>TILE Risk Assessment</h3>
                        <p>Our <strong>manual handling online Ireland</strong> theory covers the TILE principle: Task, Individual, Load, and Environment—the industry standard for dynamic risk assessment.</p>
                    </div>
                    <div class="mhc-card">
                        <div class="mhc-card-icon">03</div>
                        <h3>Practical Assessment</h3>
                        <p>Complete your <strong>manual handling practical assessment</strong> with a qualified instructor to validate your safe lifting techniques.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industry Specific Section (High Keyword Value) -->
        <section class="mhc-section">
            <div class="mhc-container">
                <h2 class="mhc-section-title" style="text-align:center;">Who Needs Manual Handling Training?</h2>
                <div class="mhc-grid">
                    <div class="mhc-industry-box">
                        <h4>Healthcare & Nursing</h4>
                        <p>Patient handling and ergonomics for <strong>healthcare assistants (HCA)</strong> and nursing staff across Ireland.</p>
                    </div>
                    <div class="mhc-industry-box">
                        <h4>Construction & Trades</h4>
                        <p>Essential <strong>site safety manual handling</strong> for construction workers, ensuring adherence to job compliant site standards.</p>
                    </div>
                    <div class="mhc-industry-box">
                        <h4>Retail & Warehousing</h4>
                        <p>Safe movement of stock, pallet handling, and <strong>warehouse safety training</strong> for logistics professionals.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed TILE List -->
        <section class="mhc-section mhc-bg-dark-lite">
            <div class="mhc-container-sm">
                <h2 class="mhc-section-title">The TILE Safety Framework</h2>
                <p>During our <strong>manual handling training Ireland</strong>, we break down the four critical factors of every lift:</p>
                <div class="mhc-tile-list">
                    <div class="mhc-tile-item"><strong>Task</strong><span>Does the job involve repetitive movements, strenuous effort, or vertical lifting?</span></div>
                    <div class="mhc-tile-item"><strong>Individual</strong><span>Does the worker have the required strength, height, or specialized <strong>safety training</strong>?</span></div>
                    <div class="mhc-tile-item"><strong>Load</strong><span>Is the load unstable, sharp, or too heavy for a single-person lift?</span></div>
                    <div class="mhc-tile-item"><strong>Environment</strong><span>Are there floor level changes, slippery surfaces, or temperature extremes?</span></div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="mhc-section">
            <div class="mhc-container">
                <div class="mhc-cta-banner">
                    <div class="mhc-cta-content">
                        <h2>Get Your Manual Handling Certificate</h2>
                    
                    </div>
                    <a href="{{route('register')}}" class="mhc-btn mhc-btn-white">Enroll in Course</a>
                </div>
            </div>
        </section>
    </div>
@endsection
