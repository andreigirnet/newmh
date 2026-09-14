@extends('front.app')

@section('content')
    <div class="enterprise-about-wrapper">
        <div class="enterprise-container">

            <!-- Hero Banner Section -->
            <div class="enterprise-hero">
                <div class="hero-badge">
                    <span class="pulse-dot"></span> Regulatory & Compliance
                </div>
                <h1 class="enterprise-main-title">Legal Information & Disclosures</h1>
                <p class="enterprise-lead-text">
                    Official terms, governance policies, and statutory compliance framework for <span class="highlight-domain">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span> via manualhandling-ireland.ie.
                </p>
            </div>

            <!-- Bento Grid Layout -->
            <div class="enterprise-bento-grid">

                <!-- Card 1: Corporate Registration & Jurisdiction (Featured Wide Card) -->
                <div class="bento-card span-two corporate-profile-card">
                    <div class="card-top-row">
                        <div class="icon-badge">🏛️</div>
                        <span class="card-category">Corporate Governance</span>
                    </div>
                    <h3 class="bento-title">Corporate Registration & Jurisdiction</h3>
                    <p class="bento-desc">
                        This digital platform and its associated services are operated and maintained by <strong>PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</strong>, a legally incorporated entity registered under the laws of the Republic of Ireland.
                    </p>

                    <div class="credentials-flex-box">
                        <div class="cred-pill">
                            <span class="c-label">Registered Legal Name</span>
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
                            <span class="c-label">Registered Address</span>
                            <span class="c-val">51 Bracken Road, D18 CV48, Ireland</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Official Verification & Statutory Documents -->
                <div class="bento-card span-two trust-accent-card">
                    <div class="card-top-row">
                        <div class="icon-badge">📂</div>
                        <span class="card-category">Advertiser Verification</span>
                    </div>
                    <h3 class="bento-title text-dark">Official Verification & Statutory Documents</h3>
                    <p class="bento-desc">
                        In compliance with platform transparency and advertiser verification guidelines, direct access to our official corporate registration and financial documentation is provided below for audit and review:
                    </p>
                    <div class="modern-steps-grid three-cols">
                        <a href="{{ asset('legalDocs/certIncorp.pdf') }}" target="_blank" class="step-card-item doc-link-card">
                            <div class="step-number-tag">📄</div>
                            <h4>Certificate of Incorporation</h4>
                            <p>Official CRO corporate formation record. <span class="doc-action-text">View PDF →</span></p>
                        </a>
                        <a href="{{ asset('legalDocs/companyDetails.pdf') }}" target="_blank" class="step-card-item doc-link-card">
                            <div class="step-number-tag">📊</div>
                            <h4>CRO Company Printout</h4>
                            <p>Detailed active company register details. <span class="doc-action-text">View PDF →</span></p>
                        </a>
                        <a href="{{ asset('legalDocs/BankStatement.pdf') }}" target="_blank" class="step-card-item doc-link-card">
                            <div class="step-number-tag">🏦</div>
                            <h4>Corporate Bank Verification</h4>
                            <p>Official entity banking and billing statement. <span class="doc-action-text">View PDF →</span></p>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Educational Scope & Operational Terms -->
                <div class="bento-card">
                    <div class="card-top-row">
                        <div class="icon-badge">📜</div>
                        <span class="card-category">Operational Terms</span>
                    </div>
                    <h3 class="bento-title">Educational Scope & Scope</h3>
                    <p class="bento-desc mb-3">
                        We function exclusively as a digital educational provider offering standardized safety modules, ergonomic training content, and professional development programs via manualhandling-ireland.ie.
                    </p>
                    <div class="address-box-modern">
                        All users agree that course completion grants a digital certificate of training participation, verifying that the user has completed our self-paced online curriculum and passed the integrated testing framework.
                    </div>
                </div>

                <!-- Card 4: Transactions, Pricing & Refunds -->
                <div class="bento-card">
                    <div class="card-top-row">
                        <div class="icon-badge">💳</div>
                        <span class="card-category">Financial Policy</span>
                    </div>
                    <h3 class="bento-title">Transactions & Fulfillment</h3>
                    <p class="bento-desc mb-3">
                        All transactions processed through our platform are billed in Euros (EUR) and are fully itemized prior to checkout.
                    </p>
                    <div class="address-box-modern">
                        Upon successful digital payment processing, automated credentials are issued instantly granting immediate access. Refund requests are evaluated case-by-case before course completion. Contact us at <a href="mailto:info@manualhandling-ireland.ie" style="color:#2563eb; font-weight:600; text-decoration:none;">info@manualhandling-ireland.ie</a> or via live chat.
                    </div>
                </div>

                <!-- Card 5: Official Contact & Inquiry Handling -->
                <div class="bento-card span-two">
                    <div class="card-top-row">
                        <div class="icon-badge">✉️</div>
                        <span class="card-category">Inquiry Handling</span>
                    </div>
                    <h3 class="bento-title">Official Contact & Dispute Resolution</h3>
                    <p class="bento-desc">
                        For any regulatory inquiries, legal notices, or consumer support concerns, official communication channels are actively monitored during regular business hours (Monday through Friday, 9:00 AM – 10:00 PM GMT). You can reach us via email, our contact page, or real-time website live chat.
                    </p>
                    <div class="contact-box-modern">
                        <div class="c-row">
                            <span>Email Support:</span>
                            <a href="mailto:info@manualhandling-ireland.ie">info@manualhandling-ireland.ie</a>
                        </div>
                        <div class="c-row">
                            <span>Instant Assistance:</span>
                            <strong>Available via On-Site Live Chat Widget</strong>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Regulatory Directory & Platform Policies (Full Width Navigation Grid) -->
                <div class="bento-card span-two">
                    <div class="card-top-row">
                        <div class="icon-badge">🔗</div>
                        <span class="card-category">Directory</span>
                    </div>
                    <h3 class="bento-title">Regulatory Directory & Platform Policies</h3>
                    <p class="bento-desc">
                        To ensure total transparency for users, participants, and automated compliance evaluators, please review our comprehensive corporate documentation links below:
                    </p>

                    <div class="modern-steps-grid four-cols">
                        <a href="{{ route('front.about') }}" class="step-card-item nav-pill-item">
                            <h4>About Our Organization</h4>
                        </a>
                        <a href="{{ route('terms') }}" class="step-card-item nav-pill-item">
                            <h4>Terms & Conditions</h4>
                        </a>
                        <a href="{{ route('front.privacy') }}" class="step-card-item nav-pill-item">
                            <h4>Privacy & Data Policy</h4>
                        </a>
                        <a href="{{ route('front.refund') }}" class="step-card-item nav-pill-item">
                            <h4>Refund Policy</h4>
                        </a>
                        <a href="{{ route('front.cookies') }}" class="step-card-item nav-pill-item">
                            <h4>Cookie Policy</h4>
                        </a>
                        <a href="{{ route('front.faq') }}" class="step-card-item nav-pill-item">
                            <h4>Help & FAQ</h4>
                        </a>
                        <a href="{{ route('front.contact') }}" class="step-card-item nav-pill-item">
                            <h4>Contact Department</h4>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <style>
        /* Strict X-Axis Overflow Prevention & Modern Light Bento Theme */
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
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .modern-steps-grid.three-cols {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .modern-steps-grid.four-cols {
            grid-template-columns: repeat(4, minmax(0, 1fr));
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
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .doc-link-card:hover {
            background: #e0f2fe;
            border-color: #bae6fd;
            transform: translateY(-2px);
        }

        .nav-pill-item {
            text-align: center;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .nav-pill-item:hover {
            background: #e0f2fe;
            border-color: #bae6fd;
        }

        .step-number-tag {
            font-size: 0.9rem;
            font-weight: 800;
            color: #2563eb;
            background: #eff6ff;
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
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

        .doc-action-text {
            display: block;
            margin-top: 0.5rem;
            font-size: 0.8rem;
            font-weight: 700;
            color: #2563eb;
        }

        /* Trust Accent Card */
        .trust-accent-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid #cbd5e1;
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
            .modern-steps-grid.three-cols,
            .modern-steps-grid.four-cols {
                grid-template-columns: 1fr;
            }
            .credentials-flex-box {
                grid-template-columns: 1fr;
            }
            .enterprise-about-wrapper {
                padding: 3rem 0.75rem;
            }
        }
    </style>
@endsection
