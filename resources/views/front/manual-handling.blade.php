@extends('front.app')

@section('content')
    <div class="mhc-wrapper">
        <!-- Hero Section -->
        <header class="mhc-hero">
            <div class="mhc-container">
                <div class="mhc-hero-inner">
                    <div class="mhc-badge">Manual Handling Training 2026</div>
                    <h1 class="mhc-display-title">Manual Handling Course <br><span class="mhc-highlight">Ireland</span></h1>
                    <p class="mhc-hero-lead">Practical <strong>workplace safety training</strong> for staff and employers. Our <strong>manual handling training in Ireland</strong> is designed to help reduce workplace injuries and build safer lifting habits.</p>
                    <div class="mhc-action-group">
                        <a href="{{route('register')}}" class="mhc-btn mhc-btn-primary">Book Training Now</a>
                        <a href="#compliance" class="mhc-btn mhc-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Information Section -->
        <section id="compliance" class="mhc-section">
            <div class="mhc-container-sm">
                <div class="mhc-section-tag">Background</div>
                <h2 class="mhc-section-title">Manual Handling in Irish Workplaces</h2>
                <p>Employers in Ireland have general duties to protect the health and safety of their employees, which includes managing manual handling risks. Our <strong>manual handling training course</strong> is an independent training program that covers safe lifting principles and risk awareness.</p>

                <p>Inadequate <strong>manual handling training</strong> can increase the risk of injury and potential liability. We focus on helping reduce the risk of <strong>musculoskeletal disorders (MSDs)</strong> through risk assessment and ergonomic good practice.</p>

                <p><em>Please note: we are an independent training provider. We are not a government body, and this course is not endorsed by or affiliated with any regulator or statutory authority. Please check your own employer's or industry's specific training requirements.</em></p>

                <div class="mhc-visual-callout">
                    <p class="mhc-caption">Learning the 8-point lifting technique for <strong>safe manual handling</strong>.</p>
                </div>
            </div>
        </section>

        <!-- Feature Grid -->
        <section class="mhc-section mhc-bg-light">
            <div class="mhc-container">
                <div class="mhc-header-center">
                    <h2 class="mhc-section-title">Course Modules & Learning Outcomes</h2>
                    <p>Practical <strong>health and safety</strong> modules for Irish businesses.</p>
                </div>

                <div class="mhc-grid">
                    <div class="mhc-card">
                        <div class="mhc-card-icon">01</div>
                        <h3>Ergonomic Principles</h3>
                        <p>Learn the <strong>mechanics of the spine</strong> and how to apply <strong>ergonomic lifting techniques</strong> to help minimize the risk of back injury in the workplace.</p>
                    </div>
                    <div class="mhc-card">
                        <div class="mhc-card-icon">02</div>
                        <h3>TILE Risk Assessment</h3>
                        <p> Our <strong>online manual handling</strong> theory covers the TILE principle: Task, Individual, Load and Environment—a framework for assessing manual handling risks. At the end of the theory modules, you will take a multiple-choice test. You must pass this test before proceeding to the practical assessment.</p>
                    </div>
                    <div class="mhc-card">
                        <div class="mhc-card-icon">03</div>
                        <h3>Practical Assessment</h3>
                        <p>After passing the theory test, submit a video demonstrating the required manual handling technique to our assessment number, {{config('global.phone')}}, using whats up. An instructor will review your submission. Your certificate will be issued only after your practical assessment has been approved.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industry Section -->
        <section class="mhc-section">
            <div class="mhc-container">
                <h2 class="mhc-section-title" style="text-align:center;">Who Can Benefit From Manual Handling Training?</h2>
                <div class="mhc-grid">
                    <div class="mhc-industry-box">
                        <h4>Warehouse</h4>
                        <p>General object handling and avoiding injuries in warehouses environment</p>
                    </div>
                    <div class="mhc-industry-box">
                        <h4>Construction & Trades</h4>
                        <p>Useful <strong>site safety manual handling</strong> guidance for construction workers and tradespeople.</p>
                    </div>
                    <div class="mhc-industry-box">
                        <h4>Retail & Warehousing</h4>
                        <p>Safe movement of stock, pallet handling, and <strong>warehouse safety training</strong> for logistics professionals.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TILE List -->
        <section class="mhc-section mhc-bg-dark-lite">
            <div class="mhc-container-sm">
                <h2 class="mhc-section-title">The TILE Safety Framework</h2>
                <p>During our <strong>manual handling training</strong>, we break down the four key factors of every lift:</p>
                <div class="mhc-tile-list">
                    <div class="mhc-tile-item"><strong>Task</strong><span>Does the job involve repetitive movements, strenuous effort, or vertical lifting?</span></div>
                    <div class="mhc-tile-item"><strong>Individual</strong><span>Does the worker have the strength, height, or <strong>training</strong> needed for the task?</span></div>
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
                        <h2>Get Your Certificate of Completion</h2>
                        <p>Certificate issued by us on completion of the course.</p>
                    </div>
                    <a href="{{route('register')}}" class="mhc-btn mhc-btn-white">Enroll in Course</a>
                </div>
            </div>
        </section>
    </div>
@endsection