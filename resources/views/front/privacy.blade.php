@extends('front.app')

@section('content')
    <style>
        .privacy-wrapper {
            background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
            min-height: 100vh;
            padding: 4rem 1rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        .privacy-container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .privacy-header {
            background: #0f172a;
            color: #ffffff;
            padding: 3rem 2.5rem;
            position: relative;
        }
        .privacy-header h1 {
            font-size: 2.25rem;
            font-weight: 800;
            letter-spacing: -0.025em;
            margin: 0 0 0.5rem 0;
            line-height: 1.2;
        }
        .privacy-header p {
            color: #94a3b8;
            font-size: 0.95rem;
            margin: 0;
        }
        .privacy-body {
            padding: 2.5rem;
        }
        .privacy-section {
            margin-bottom: 2.5rem;
        }
        .privacy-section h2 {
            font-size: 1.35rem;
            font-weight: 700;
            color: #1e293b;
            margin-top: 2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        .privacy-section h2::before {
            content: "";
            display: inline-block;
            width: 6px;
            height: 20px;
            background: #3b82f6;
            margin-right: 10px;
            border-radius: 3px;
        }
        .privacy-section h1.main-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: #1e293b;
            margin-top: 0;
            margin-bottom: 1.5rem;
        }
        .privacy-text {
            color: #475569;
            line-height: 1.7;
            font-size: 1.05rem;
            margin-bottom: 1rem;
        }
        .privacy-text a {
            color: #2563eb;
            text-decoration: underline;
            font-weight: 500;
        }
        .privacy-text a:hover {
            color: #1d4ed8;
        }
        .privacy-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.75rem;
            box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.01);
            margin-bottom: 1.5rem;
        }
        .privacy-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1rem 0;
        }
        .privacy-list li {
            position: relative;
            padding-left: 1.75rem;
            margin-bottom: 0.75rem;
            color: #475569;
            line-height: 1.6;
        }
        .privacy-list li::before {
            content: "•";
            position: absolute;
            left: 0.5rem;
            color: #2563eb;
            font-weight: 900;
            font-size: 1.25rem;
        }
        .form-group {
            margin-bottom: 1.25rem;
        }
        .form-label {
            display: block;
            font-weight: 600;
            color: #1e293b;
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
        }
        .form-input, .form-textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 1rem;
            color: #1e293b;
            background: #ffffff;
            box-sizing: border-box;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }
        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }
        .form-submit-btn {
            background: #0f172a;
            color: #ffffff;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .form-submit-btn:hover {
            background: #1e293b;
        }
        @media (max-width: 768px) {
            .privacy-wrapper {
                padding: 1.5rem 0.5rem;
            }
            .privacy-header {
                padding: 2rem 1.5rem;
            }
            .privacy-header h1 {
                font-size: 1.75rem;
            }
            .privacy-body {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="privacy-wrapper" data-aos="fade-up">
        <div class="privacy-container">

            <!-- Header -->
            <div class="privacy-header">
                <h1>Privacy Policy</h1>
                <p>{{ config('global.business_name') }}</p>
            </div>

            @if(session('success'))
                <div style="background: #d1fae5; color: #065f46; padding: 1rem; border-radius: 8px; margin: 1.5rem 2.5rem 0 2.5rem; border: 1px solid #a7f3d0;">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Validation Error Messages -->
            @if($errors->any())
                <div style="background: #fee2e2; color: #991b1b; padding: 1rem; border-radius: 8px; margin: 1.5rem 2.5rem 0 2.5rem; border: 1px solid #fecaca;">
                    <ul style="margin: 0; padding-left: 1.25rem;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="privacy-body">
                <div class="privacy-section">

                    <h1 class="main-title">Privacy Policy & Data Protection</h1>

                    <p class="privacy-text">
                        At <strong>{{ config('global.business_name') }}</strong> ("we," "our," or "us"), we are committed to safeguarding your privacy and ensuring that your personal data is protected. This Privacy Policy outlines how we collect, use, disclose, and protect information when you visit our website
                        <a href="https://www.manualhandling-ireland.ie/" target="_blank">https://www.manualhandling-ireland.ie/</a>
                        and utilize our online training services.
                    </p>

                    <div class="privacy-card" style="margin-top: 1.5rem;">
                        <h2 style="margin-top: 0;">Data Controller Contact:</h2>
                        <p class="privacy-text" style="margin-bottom: 0;">
                            <strong>{{ config('global.business_name') }}</strong><br>
                            Support Email: <a href="mailto:info@manualhandling-ireland.ie">info@manualhandling-ireland.ie</a> <br>
                            {{ config('global.business_address') }}
                        </p>
                    </div>

                    <h2>Information We Collect:</h2>
                    <p class="privacy-text">
                        We may collect personal information that you voluntarily provide to us when registering for a course, purchasing services, submitting practical assessments, or contacting support. This includes:
                    </p>
                    <ul class="privacy-list">
                        <li><strong>Identity Data:</strong> Full name and contact credentials.</li>
                        <li><strong>Contact Information:</strong> Email address and telephone/WhatsApp number.</li>
                        <li><strong>Assessment Data:</strong> Practical video tests submitted via WhatsApp for grading and course completion.</li>
                        <li><strong>Transaction & Payment Data:</strong> Details regarding course purchases (processed securely through encrypted payment gateways).</li>
                    </ul>

                    <h2>WhatsApp Assessment Videos (Practical Tests):</h2>
                    <p class="privacy-text">
                        As part of our practical certification process, learners are required to submit a practical video test via WhatsApp to demonstrate manual handling techniques. When you submit your practical assessment through our assessment messaging service, we receive your video, telephone number, any visible profile information and accompanying messages. We use this information to identify your submission, assess your practical skills and communicate the outcome. The messaging provider also processes information under its own privacy policy.
                    </p>
                    <ul class="privacy-list">
                        <li><strong>Purpose:</strong> These videos are collected exclusively to evaluate your practical competency, grade your performance, and fulfill certification requirements.</li>
                        <li><strong>Who Accesses Them:</strong> Access is strictly restricted to our certified professional instructors and essential administrative personnel evaluating your test.</li>
                        <li><strong>Data Retention:</strong>We retain your practical assessment video until the assessment has been reviewed and completed, then delete copies under our control. Assessment results and certification records are retained separately. Deletion from our systems does not necessarily delete copies held on your device or information retained by the messaging provider under its own policy.</li>
                        <li><strong>Deletion Requests:</strong> If you wish to have your submitted assessment video deleted prior to standard retention cycles (note that certification status may be impacted if certification has not been awarded), you may request removal using the data removal form below or by contacting our support team.</li>
                    </ul>

                    <h2>How We Use Your Information:</h2>
                    <p class="privacy-text">
                        The information we collect is utilized for lawful business and educational purposes, including:
                    </p>
                    <ul class="privacy-list">
                        <li>Evaluating practical video assessments and issuing certificates of completion.</li>
                        <li>Processing your course registration and communicating updates.</li>
                        <li>Responding to customer support replies and operational announcements.</li>
                        <li>Fulfilling accounting, compliance, and regulatory tax obligations.</li>
                        <li>Improving website performance and advertising relevance.</li>
                    </ul>

                    <h2>Data Sharing and Disclosure:</h2>
                    <p class="privacy-text">
                        We do not sell, trade or rent your personal information or assessment videos. We use service providers for payment processing, website hosting and assessment communications. We use whts up to receive practical assessment videos and communicate assessment feedback. When you submit a video, we receive your video, telephone number, any visible profile information and accompanying messages. The messaging provider also processes information in accordance with its own privacy policy. Deleting a video from devices and systems under our control does not necessarily delete information retained by the messaging provider or copies stored on your device
                    </p>

                    <h2>Your Data Protection Rights:</h2>
                    <p class="privacy-text">
                        Depending on your jurisdiction (such as the GDPR framework in Europe), you have rights regarding your personal data, including the right to access, correct, or request deletion of your personal information and assessment records stored on our systems. You can submit a request below.
                    </p>

                    <h2>Policy Updates:</h2>
                    <p class="privacy-text">
                        We may update this Privacy Policy from time to time to reflect operational changes or requirements. Any modifications will be posted directly on this page with a revised update date.
                    </p>

                </div>

                <!-- Data Removal Request Form Section -->
                <div class="privacy-section" style="margin-bottom: 0;">
                    <h2>Request Data Removal (Right to be Forgotten)</h2>
                    <p class="privacy-text">
                        If you wish to request the deletion or removal of your personal data and assessment records from our active databases, please fill out the secure form below. We will process your request in accordance with applicable data protection regulations.
                    </p>

                    <div class="privacy-card">
                        <form action="{{ route('privacy.data-removal.submit') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" name="name" class="form-input" required placeholder="Enter your full name" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-input" required placeholder="Enter your registered email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label for="reason" class="form-label">Reason for Request / Specific Data to Remove (e.g., WhatsApp Assessment Video)</label>
                                <textarea id="reason" name="reason" class="form-textarea" placeholder="Please specify the details or context regarding your data removal request...">{{ old('reason') }}</textarea>
                            </div>

                            <button type="submit" class="form-submit-btn">Submit Removal Request</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection