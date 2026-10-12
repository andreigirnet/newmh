@extends('front.app')

@section('content')
    <div class="bg-slate-50 min-h-screen py-16 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-800">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
            
            {{-- Header --}}
            <div class="bg-blue-900 text-white p-8 sm:p-12 relative overflow-hidden">
                <div class="relative z-10">
                    <span class="bg-blue-600 text-white font-bold text-xs uppercase px-3 py-1 rounded-full mb-3 inline-block">Legal Agreement</span>
                    <h1 class="text-3xl sm:text-4xl font-heading font-extrabold tracking-tight mb-2">Terms & Conditions</h1>
                    <p class="text-blue-200 text-sm sm:text-base">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</p>
                </div>
                <div class="absolute right-0 bottom-0 opacity-10 transform translate-x-8 translate-y-8">
                    <svg class="w-64 h-64 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                </div>
            </div>

            <div class="p-8 sm:p-12 space-y-10">

                {{-- Intro & Company Info Card --}}
                <div>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                        Welcome to Online Manual Handling Ireland! These terms and conditions outline the rules and regulations for using our website at <a href="https://www.manualhandling-ireland.ie/" target="_blank" class="text-blue-600 hover:underline font-medium">https://www.manualhandling-ireland.ie/</a>. By accessing this platform, you agree to comply with these terms. If you do not agree with any part of these terms, please discontinue use of our website immediately.
                    </p>

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8">
                        <h2 class="font-heading font-bold text-lg text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                            Company Information:
                        </h2>
                        <div class="text-sm text-slate-600 space-y-1">
                            <p class="font-semibold text-slate-900">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }} (Reg. No. {{ config('global.business_number', '822301') }})</p>
                            <p>Email: <a href="mailto:info@manualhandling-ireland.ie" class="text-blue-600 hover:underline font-medium">info@manualhandling-ireland.ie</a></p>
                            <p>Registered Address: <span class="font-medium text-slate-800">{{ config('global.business_address', '51 Bracken Road, Dublin, D18 CV48 Ireland') }}</span></p>
                        </div>
                    </div>
                </div>

                {{-- Services & Access --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        Services & Access
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        We provide professional, online manual handling training modules designed for individuals and businesses across Ireland. Purchasing a course grants you personal access to complete your training online through our secure browser platform.
                    </p>
                </div>

                {{-- Intellectual Property & Content Protection --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        Intellectual Property & Content Protection
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        All course content, training videos, graphics, text, and logos hosted on this website are the exclusive intellectual property of <strong>{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</strong>. None of our training materials, videos, or course contents may be copied, redistributed, resold, or shared publicly under any circumstances.
                    </p>
                </div>

                {{-- User Responsibilities --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        User Responsibilities
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Users agree to provide accurate information during registration and to complete their training courses individually. Account sharing or allowing unauthorized individuals to access training modules under another user's profile is strictly prohibited.
                    </p>
                </div>

                {{-- Contact Us --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        Contact Us
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        If you have any questions or require support regarding these terms and conditions, please reach out to our team at <a href="mailto:info@manualhandling-ireland.ie" class="text-blue-600 hover:underline font-medium">info@manualhandling-ireland.ie</a> or call us at <a href="tel:{{ config('global.phone', '+353899735295') }}" class="text-blue-600 hover:underline font-medium">{{ config('global.phone', '+353 89 973 5295') }}</a>.
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection