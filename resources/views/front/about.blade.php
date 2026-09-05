@extends('front.app')

@section('content')
    <div class="enterprise-about-wrapper">
        <div class="enterprise-container">

            <!-- Hero Banner Section -->
            <div class="enterprise-hero">
                <div class="hero-badge">
                    <span class="pulse-dot"></span> Authorized Corporate Entity
                </div>
                <h1 class="enterprise-main-title">About Our Organization</h1>
                <p class="enterprise-lead-text">
                    Providing standardized workplace safety education, material handling instruction, and corporate compliance training across Ireland via <span class="highlight-domain">manualhandling-ireland.ie</span>.
                </p>
            </div>

            <!-- Bento Grid Layout -->
            <div class="enterprise-bento-grid">

                <!-- Card 1: Legal Entity & Registration (Featured Wide Card) -->
                <div class="bento-card span-two corporate-profile-card">
                    <div class="card-top-row">
                        <div class="icon-badge">🏛️</div>
                        <span class="card-category">Corporate Governance</span>
                    </div>
                    <h3 class="bento-title">Official Identity & Statutory Credentials</h3>
                    <p class="bento-desc">
                        Our digital instruction infrastructure is legally owned, operated, and maintained by our primary corporate entity, ensuring absolute transparency for institutional clients, automated safety reviewers, and participants nationwide.
                    </p>

                    <div class="credentials-flex-box">
                        <div class="cred-pill">
                            <span class="c-label">Legal Name</span>
                            <span class="c-val">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span>
                        </div>
                        <div class="cred-pill">
                            <span class="c-label">Registration Office</span>
                            <span class="c-val">CRO Ireland</span>
                        </div>
                        <div class="cred-pill">
                            <span class="c-label">Company Number</span>
                            <span class="c-val highlight-num">822301</span>
                        </div>
                        <div class="cred-pill">
                            <span class="c-label">Operational Scope</span>
                            <span class="c-val">Republic of Ireland</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Headquarters & Location -->
                <div class="bento-card">
                    <div class="card-top-row">
                        <div class="icon-badge">📍</div>
                        <span class="card-category">Registered Office</span>
                    </div>
                    <h3 class="bento-title">Headquarters</h3>
                    <p class="bento-desc mb-3">
                        Official administrative location for institutional paperwork, regulatory compliance notices, and management operations.
                    </p>
                    <div class="address-box-modern">
                        <strong>PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</strong><br>
                        51 Bracken Road,<br>
                        Dublin, D18 CV48,<br>
                        Ireland
                    </div>
                </div>

                <!-- Card 3: Communication & Support Hours -->
                <div class="bento-card">
                    <div class="card-top-row">
                        <div class="icon-badge">💬</div>
                        <span class="card-category">Direct Support</span>
                    </div>
                    <h3 class="bento-title">Communication Hub</h3>
                    <p class="bento-desc mb-3">
                        Active help desks and real-time support channels for corporate accounts and individual students.
                    </p>
                    <div class="contact-box-modern">
                        <div class="c-row">
                            <span>Email Desk:</span>
                            <a href="mailto:info@manualhandling-ireland.ie">info@manualhandling-ireland.ie</a>
                        </div>
                        <div class="c-row">
                            <span>Live Assistance:</span>
                            <strong>On-site Live Chat Active</strong>
                        </div>
                        <div class="c-row">
                            <span>Hours:</span>
                            <strong>Mon – Fri, 9:00 AM – 10:00 PM</strong>
                        </div>
                    </div>
                </div>

                <!-- Card 4: End-to-End Digital Workflow -->
                <div class="bento-card span-two workflow-card-modern">
                    <div class="card-top-row">
                        <div class="icon-badge">⚡</div>
                        <span class="card-category">Training Methodology</span>
                    </div>
                    <h3 class="bento-title">The Complete Digital Learning & Certification Pathway</h3>
                    <p class="bento-desc">
                        Our automated portal delivers a frictionless pathway from initial enrollment to instant certification download.  The trainee can create an account, buy a course, instantly start it, pass a test and get a certificate.
                    </p>

                    <div class="modern-steps-grid">
                        <div class="step-card-item">
                            <div class="step-number-tag">01</div>
                            <h4>Secure Enrollment</h4>
                            <p>Register your account and checkout securely to instantly activate automated portal access.</p>
                        </div>
                        <div class="step-card-item">
                            <div class="step-number-tag">02</div>
                            <h4>Video Modules</h4>
                            <p>Learn at your own pace through structured instructional videos optimized for all devices 24/7.</p>
                        </div>
                        <div class="step-card-item">
                            <div class="step-number-tag">03</div>
                            <h4>Interactive Test</h4>
                            <p>Pass integrated multi-choice evaluations designed to verify practical safety comprehension.</p>
                        </div>
                        <div class="step-card-item">
                            <div class="step-number-tag">04</div>
                            <h4>Instant Certificate</h4>
                            <p>Download your verified digital certificate of completion immediately upon passing.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Transparency Trust Statement -->
                <div class="bento-card span-two trust-accent-card">
                    <div class="trust-content-wrapper">
                        <div class="trust-icon">🛡️</div>
                        <div>
                            <h3 class="bento-title text-dark">Transparency & Trust Assurance</h3>
                            <p class="bento-desc text-muted">
                                This platform functions strictly as a compliant educational network. All billing operations, data safety frameworks, and course completions are backed by verifiable Ireland corporate records.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <style>
        /* Absolute X-Axis Overflow Prevention */
        html, body {
            max-width: 100%;
            overflow-x: hidden !important;
        }

        .enterprise-about-wrapper *,
        .enterprise-about-wrapper *::before,
        .enterprise-about-wrapper *::after {
            box-sizing: border-box;
        }

        .enterprise-about-wrapper {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
            padding: 5rem 1rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #1e293b;
        }

        .enterprise-container {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            overflow-x: hidden;
        }

        /* Hero Section */
        .enterprise-hero {
            text-align: center;
            margin-bottom: 4rem;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #e0f2fe;
            border: 1px solid #bae6fd;
            color: #0369a1;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            margin-bottom: 1.5rem;
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            background-color: #0284c7;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(2, 132, 199, 0.4); }
            70% { box-shadow: 0 0 0 8px rgba(2, 132, 199, 0); }
            100% { box-shadow: 0 0 0 0 rgba(2, 132, 199, 0); }
        }

        .enterprise-main-title {
            font-size: clamp(2.2rem, 5vw, 3.5rem);
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.03em;
            margin-bottom: 1rem;
        }

        .enterprise-lead-text {
            font-size: 1.15rem;
            color: #475569;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .highlight-domain {
            color: #2563eb;
            font-weight: 600;
            word-break: break-all;
        }

        /* Bento Grid Architecture */
        .enterprise-bento-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.5rem;
            width: 100%;
        }

        .bento-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            min-width: 0;
        }

        .bento-card:hover {
            border-color: #cbd5e1;
            transform: translateY(-3px);
            box-shadow: 0 15px 35px -10px rgba(0, 0, 0, 0.08);
        }

        .bento-card.span-two {
            grid-column: span 2;
        }

        .card-top-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
            gap: 1rem;
        }

        .icon-badge {
            font-size: 1.4rem;
            background: #f8fafc;
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            flex-shrink: 0;
        }

        .card-category {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #64748b;
            background: #f1f5f9;
            padding: 0.3rem 0.75rem;
            border-radius: 20px;
            text-align: right;
        }

        .bento-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: #0f172a;
            letter-spacing: -0.02em;
            margin-bottom: 0.75rem;
        }

        .bento-desc {
            font-size: 1rem;
            line-height: 1.6;
            color: #475569;
            margin-bottom: 1.25rem;
        }

        /* Credentials Grid inside Bento */
        .credentials-flex-box {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            margin-top: auto;
            background: #f8fafc;
            padding: 1.25rem;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
        }

        .cred-pill {
            display: flex;
            flex-direction: column;
            gap: 0.2rem;
            min-width: 0;
        }

        .c-label {
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
        }

        .c-val {
            font-size: 0.9rem;
            font-weight: 700;
            color: #0f172a;
            word-break: break-word;
        }

        .highlight-num {
            color: #2563eb;
            font-size: 1rem;
        }

        /* Address & Contact boxes */
        .address-box-modern, .contact-box-modern {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 1rem;
            font-size: 0.9rem;
            line-height: 1.5;
            color: #334155;
            margin-top: auto;
            word-break: break-word;
        }

        .contact-box-modern {
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
        }

        .c-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px dashed #e2e8f0;
            padding-bottom: 0.4rem;
            gap: 0.5rem;
        }

        .c-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .c-row a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
            word-break: break-all;
        }

        .c-row a:hover {
            text-decoration: underline;
        }

        /* Modern Steps Grid inside Bento */
        .modern-steps-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .step-card-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 1.25rem 1rem;
            display: flex;
            flex-direction: column;
            position: relative;
            min-width: 0;
        }

        .step-number-tag {
            font-size: 0.75rem;
            font-weight: 800;
            color: #2563eb;
            background: #eff6ff;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            margin-bottom: 0.75rem;
        }

        .step-card-item h4 {
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.4rem;
        }

        .step-card-item p {
            font-size: 0.8rem;
            color: #475569;
            line-height: 1.4;
            margin: 0;
        }

        /* Trust Accent Card */
        .trust-accent-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid #cbd5e1;
        }

        .trust-content-wrapper {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .trust-icon {
            font-size: 2.5rem;
            background: #eff6ff;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            flex-shrink: 0;
            border: 1px solid #bfdbfe;
        }

        .text-dark { color: #0f172a !important; }
        .text-muted { color: #475569 !important; }
        .mb-3 { margin-bottom: 1rem; }

        /* Responsive Breakpoints */
        @media (max-width: 900px) {
            .enterprise-bento-grid {
                grid-template-columns: 1fr;
            }
            .bento-card.span-two {
                grid-column: span 1;
            }
            .modern-steps-grid {
                grid-template-columns: 1fr;
            }
            .credentials-flex-box {
                grid-template-columns: 1fr;
            }
            .trust-content-wrapper {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            .enterprise-about-wrapper {
                padding: 3rem 0.75rem;
            }
        }
    </style>
@endsection
