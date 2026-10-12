@extends('front.app')

@section('content')
    <div class="bg-slate-50 min-h-screen py-16 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-800">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
            
            {{-- Header --}}
            <div class="bg-blue-900 text-white p-8 sm:p-12 relative overflow-hidden">
                <div class="relative z-10">
                    <span class="bg-blue-600 text-white font-bold text-xs uppercase px-3 py-1 rounded-full mb-3 inline-block">Transparent Terms</span>
                    <h1 class="text-3xl sm:text-4xl font-heading font-extrabold tracking-tight mb-2">Refund & Cancellation Policy</h1>
                    <p class="text-blue-200 text-sm sm:text-base">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</p>
                </div>
                <div class="absolute right-0 bottom-0 opacity-10 transform translate-x-8 translate-y-8">
                    <svg class="w-64 h-64 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 14h-2v-2h2v2zm0-4h-2V7h2v5z"/></svg>
                </div>
            </div>

            <div class="p-8 sm:p-12 space-y-10">

                {{-- Intro & Contact Card --}}
                <div>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                        At <strong>{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</strong>, operating as manualhandling-ireland.ie, we aim to provide a clear and transparent process for course purchases, cancellations, and refund requests. You may be eligible for a refund under the following conditions, in accordance with applicable consumer protection laws.
                    </p>

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8">
                        <h2 class="font-heading font-bold text-lg text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                            Support Contact for Refunds:
                        </h2>
                        <div class="text-sm text-slate-600 space-y-1">
                            <p class="font-semibold text-slate-900">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</p>
                            <p>Email: <a href="mailto:info@manualhandling-ireland.ie" class="text-blue-600 hover:underline font-medium">info@manualhandling-ireland.ie</a></p>
                            <p>Live Chat available via our support portal</p>
                            <p>Registered Address: <span class="font-medium text-slate-800">{{ config('global.business_address', '51 Bracken Road, Dublin, D18 CV48 Ireland') }}</span></p>
                        </div>
                    </div>
                </div>

                {{-- Eligibility for Refunds --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        Eligibility for Refunds
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                        Refund requests should normally be submitted within <strong>14 days of purchase</strong>. Refund eligibility is assessed according to the conditions below, subject to any mandatory consumer rights that may apply.
                    </p>
                    
                    <ul class="space-y-4 text-sm text-slate-700">
                        <li class="bg-slate-50/50 p-4 rounded-xl border border-slate-100 flex items-start gap-3">
                            <span class="w-2 h-2 rounded-full bg-blue-600 mt-2 flex-shrink-0"></span>
                            <div>
                                <strong class="text-slate-900 font-semibold block mb-1">Change-of-mind refunds:</strong>
                                You may request a refund within 14 days of purchase, provided you have not completed the course and no certificate has been issued. Your statutory consumer rights remain unaffected.
                            </div>
                        </li>
                        <li class="bg-slate-50/50 p-4 rounded-xl border border-slate-100 flex items-start gap-3">
                            <span class="w-2 h-2 rounded-full bg-blue-600 mt-2 flex-shrink-0"></span>
                            <div>
                                <strong class="text-slate-900 font-semibold block mb-1">Employer Non-Acceptance:</strong>
                                Please confirm your employer’s training requirements before purchasing. If your employer confirms that our course will not meet their requirements, you may request a refund within 14 days of purchase, provided you have not completed the course and no certificate has been issued. This refund option does not apply after course completion or certificate issuance. Your statutory consumer rights remain unaffected.
                            </div>
                        </li>
                        <li class="bg-slate-50/50 p-4 rounded-xl border border-slate-100 flex items-start gap-3">
                            <span class="w-2 h-2 rounded-full bg-blue-600 mt-2 flex-shrink-0"></span>
                            <div>
                                <strong class="text-slate-900 font-semibold block mb-1">Duplicate Charges:</strong>
                                If the same purchase is charged more than once due to a verified billing error, the duplicate payment will be reviewed for refund.
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- Employer Acceptance --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        Employer Acceptance
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-4">
                        Our certificate provides evidence that the learner has completed the training and assessment process through our platform. Employers and organisations may have their own training requirements and may decide whether to accept a particular certificate.
                    </p>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        If you need the certificate for a specific employer, we recommend confirming the employer's requirements before purchasing the course. Where the employer does not accept the certificate, a refund request may be submitted in accordance with the conditions of this policy.
                    </p>
                </div>

                {{-- How to Request a Refund --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        How to Request a Refund
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-4">
                        To submit a refund request, please email our support team directly at <a href="mailto:info@manualhandling-ireland.ie" class="text-blue-600 hover:underline font-medium">info@manualhandling-ireland.ie</a> with your full name, registered email address, transaction reference, and the reason for your request.
                    </p>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        You may also contact us through our Live Chat support. Refund requests are reviewed according to this policy and any applicable consumer protection requirements.
                    </p>
                </div>

                {{-- Processing Times --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        Processing Times
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Once a refund is approved by our team, please allow <strong>5 to 10 business days</strong> for the funds to appear on your card statement. The exact timing may depend on your bank, card issuer, or payment provider.
                    </p>
                </div>

                {{-- Consumer Rights --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        Consumer Rights
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Nothing in this Refund & Cancellation Policy is intended to remove, restrict, or exclude any consumer rights or protections that may apply to your purchase. Where applicable consumer protection rules provide a right to cancel, obtain a refund, or receive another remedy, those rights remain unaffected by this policy.
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection