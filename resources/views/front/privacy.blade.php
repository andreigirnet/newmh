@extends('front.app')

@section('content')
    <div class="bg-slate-50 min-h-screen py-16 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-800">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">

            {{-- Header --}}
            <div class="bg-blue-900 text-white p-8 sm:p-12 relative overflow-hidden">
                <div class="relative z-10">
                    <span class="bg-blue-600 text-white font-bold text-xs uppercase px-3 py-1 rounded-full mb-3 inline-block">Data Protection</span>
                    <h1 class="text-3xl sm:text-4xl font-heading font-extrabold tracking-tight mb-2">Privacy Policy & Data Protection</h1>
                    <p class="text-blue-200 text-sm sm:text-base">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</p>
                </div>
                <div class="absolute right-0 bottom-0 opacity-10 transform translate-x-8 translate-y-8">
                    <svg class="w-64 h-64 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                </div>
            </div>

            {{-- Flash Success Message --}}
            @if(session('success'))
                <div class="mx-8 mt-8 bg-emerald-50 text-emerald-800 p-4 rounded-2xl border border-emerald-200 text-sm font-medium flex items-center gap-3">
                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            {{-- Validation Error Messages --}}
            @if($errors->any())
                <div class="mx-8 mt-8 bg-red-50 text-red-800 p-4 rounded-2xl border border-red-200 text-sm font-medium">
                    <div class="flex items-center gap-2 mb-2 font-semibold">
                        <svg class="w-5 h-5 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        <span>Please fix the following errors:</span>
                    </div>
                    <ul class="list-disc pl-5 space-y-1 text-xs">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Body Content --}}
            <div class="p-8 sm:p-12 space-y-10">

                {{-- Intro --}}
                <div>
                    <p class="text-slate-600 text-base leading-relaxed mb-6">
                        At <strong>{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</strong> ("we," "our," or "us"), we are committed to safeguarding your privacy and ensuring that your personal data is protected. This Privacy Policy outlines how we collect, use, disclose, and protect information when you visit our website and utilize our online manual handling training services.
                    </p>

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8">
                        <h2 class="font-heading font-bold text-lg text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                            Data Controller Contact Details:
                        </h2>
                        <div class="text-sm text-slate-600 space-y-1">
                            <p class="font-semibold text-slate-900">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</p>
                            <p>Company Registration Number: <span class="font-medium text-slate-800">{{ config('global.business_number', '822301') }}</span></p>
                            <p>Registered Address: <span class="font-medium text-slate-800">{{ config('global.business_address', '51 Bracken Road, Dublin, D18 CV48 Ireland') }}</span></p>
                            <p>Support Phone: <a href="tel:{{ config('global.phone', '+353899735295') }}" class="text-blue-600 hover:underline font-medium">{{ config('global.phone', '+353 89 973 5295') }}</a></p>
                            <p>Support Email: <a href="mailto:info@manualhandling-ireland.ie" class="text-blue-600 hover:underline font-medium">info@manualhandling-ireland.ie</a></p>
                        </div>
                    </div>
                </div>

                {{-- Information We Collect --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        Information We Collect
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-4">
                        We may collect personal information that you voluntarily provide when registering for a course, purchasing training, submitting practical assessments, or contacting support:
                    </p>
                    <ul class="space-y-3 text-sm text-slate-700">
                        <li class="flex items-start gap-3 bg-slate-50/50 p-3.5 rounded-xl border border-slate-100">
                            <span class="w-2 h-2 rounded-full bg-blue-600 mt-2 flex-shrink-0"></span>
                            <div><strong class="text-slate-900 font-semibold">Identity Data:</strong> Full name and user account credentials.</div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50/50 p-3.5 rounded-xl border border-slate-100">
                            <span class="w-2 h-2 rounded-full bg-blue-600 mt-2 flex-shrink-0"></span>
                            <div><strong class="text-slate-900 font-semibold">Contact Information:</strong> Email address and WhatsApp telephone number.</div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50/50 p-3.5 rounded-xl border border-slate-100">
                            <span class="w-2 h-2 rounded-full bg-blue-600 mt-2 flex-shrink-0"></span>
                            <div><strong class="text-slate-900 font-semibold">Assessment Data:</strong> Practical video tests submitted via WhatsApp for instructor review and certificate issuance.</div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50/50 p-3.5 rounded-xl border border-slate-100">
                            <span class="w-2 h-2 rounded-full bg-blue-600 mt-2 flex-shrink-0"></span>
                            <div><strong class="text-slate-900 font-semibold">Transaction & Payment Data:</strong> Details regarding course purchases processed securely through encrypted payment gateways (flat €30 fee).</div>
                        </li>
                    </ul>
                </div>

                {{-- WhatsApp Assessment Videos --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        WhatsApp Assessment Videos (Practical Tests)
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-4">
                        As part of our practical certification process, learners submit a practical video test via WhatsApp to demonstrate manual handling techniques. When you submit your practical assessment through our messaging service, we receive your video, telephone number, profile information, and accompanying messages. The messaging provider also processes information under its own privacy policy (<a href="https://www.whatsapp.com/legal/privacy-policy" target="_blank" class="text-blue-600 hover:underline font-medium">WhatsApp Privacy Policy</a>).
                    </p>
                    <ul class="space-y-3 text-sm text-slate-700">
                        <li class="flex items-start gap-3 bg-slate-50/50 p-3.5 rounded-xl border border-slate-100">
                            <span class="w-2 h-2 rounded-full bg-blue-600 mt-2 flex-shrink-0"></span>
                            <div><strong class="text-slate-900 font-semibold">Purpose:</strong> Evaluated exclusively by qualified instructors to grade your practical lifting technique.</div>
                        </li>
                        <li class="flex items-start gap-3 bg-slate-50/50 p-3.5 rounded-xl border border-slate-100">
                            <span class="w-2 h-2 rounded-full bg-blue-600 mt-2 flex-shrink-0"></span>
                            <div><strong class="text-slate-900 font-semibold">Data Retention:</strong> We retain your practical assessment video until reviewed and completed, then delete copies under our control. Certification records are retained separately.</div>
                        </li>
                    </ul>
                </div>

                {{-- How We Use Your Information --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        How We Use Your Information
                    </h2>
                    <ul class="space-y-3 text-sm text-slate-700">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Evaluating practical video assessments and issuing certificates of completion upon instructor approval.
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Processing course registration and communicating training updates.
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Fulfilling accounting, tax compliance, and legal record-keeping obligations.
                        </li>
                    </ul>
                </div>

                {{-- Data Removal Request Form Section --}}
                <div class="border-t border-slate-200 pt-10" id="data-removal">
                    <div class="bg-blue-50/60 border border-blue-100 rounded-3xl p-8 sm:p-10">
                        <div class="mb-6">
                            <h2 class="font-heading font-bold text-2xl text-blue-950 mb-2">Request Data Removal (Right to be Forgotten)</h2>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                If you wish to request the deletion or removal of your personal data and assessment records from our active databases, please fill out the secure form below. We will process your request in accordance with applicable data protection regulations.
                            </p>
                        </div>

                        <form action="{{ route('privacy.data-removal.submit') }}" method="POST" class="space-y-5">
                            @csrf

                            <div>
                                <label for="name" class="block font-semibold text-slate-900 text-sm mb-2">Full Name</label>
                                <input type="text" id="name" name="name" required placeholder="Enter your full name" value="{{ old('name') }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all">
                            </div>

                            <div>
                                <label for="email" class="block font-semibold text-slate-900 text-sm mb-2">Email Address</label>
                                <input type="email" id="email" name="email" required placeholder="Enter your registered email" value="{{ old('email') }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all">
                            </div>

                            <div>
                                <label for="reason" class="block font-semibold text-slate-900 text-sm mb-2">Reason for Request / Specific Data to Remove (e.g., WhatsApp Assessment Video)</label>
                                <textarea id="reason" name="reason" rows="4" placeholder="Please specify details regarding your data removal request..." class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all resize-y">{{ old('reason') }}</textarea>
                            </div>

                            <button type="submit" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3.5 rounded-xl shadow-lg shadow-blue-600/20 transition-all text-sm">
                                Submit Removal Request
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection