@extends('front.app')

@section('content')
{{-- Navigation Bar --}}
   

    {{-- Hero Section --}}
    <section class="relative pt-16 pb-16 lg:pt-24 lg:pb-20 bg-gradient-to-b from-blue-50/60 to-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100 text-blue-800 text-xs sm:text-sm font-semibold mb-6">
                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                    Ireland Workplace Safety Training Provider
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-slate-900 tracking-tight leading-[1.15] mb-6">
                    Manual Handling Training Course Online for Ireland
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mb-10 leading-relaxed">
                    Manual Handling Ireland is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{route('register')}}" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-bold text-base px-8 py-4 rounded-2xl shadow-xl shadow-blue-600/25 transition-all transform hover:-translate-y-0.5">
                        Register Now
                    </a>
                    <a href="#how-it-works" class="w-full sm:w-auto bg-white hover:bg-slate-50 text-slate-700 font-semibold text-base px-8 py-4 rounded-2xl border border-slate-200 transition-all">
                        See How It Works
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Product Card Section Straight After Hero Message --}}
    <section class="py-12 bg-white border-y border-slate-200" id="pricing">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-slate-900 mb-3">Course Registration Package</h2>
                <p class="text-slate-600">                    Manual Handling Ireland is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand.</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-5 bg-gradient-to-br from-blue-100 to-slate-100 flex flex-col justify-between relative min-h-[300px] overflow-hidden">
                    <!-- Full-bleed Image Container -->
                    <div class="absolute inset-0">
                        <img src="{{ asset('images/lifting.webp') }}" alt="Lifting Image" class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Standard Tier Badge -->
                    <div class="relative z-10 m-6 self-start">
                        <span class="bg-blue-600 text-white font-bold text-xs uppercase px-3 py-1 rounded-full shadow-md">Standard Tier</span>
                    </div>
                </div>

                {{-- Product Details --}}
                <div class="lg:col-span-7 p-8 sm:p-10 flex flex-col justify-between">
                    <div>
                        <div class="flex items-baseline justify-between mb-4">
                            <h3 class="font-heading font-bold text-2xl text-slate-900">Manual Handling Certification Course</h3>
                            <div class="text-3xl font-extrabold text-blue-600">€30</div>
                        </div>
                        <p class="text-slate-600 text-sm sm:text-base mb-6 leading-relaxed">
                            Complete training package designed for individuals and workers across Ireland. Includes online theory modules, theory examination, and practical video assessment review by our instructor.
                        </p>
                        
                        <ul class="space-y-3 mb-8 text-sm text-slate-700">
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Full online theory access (approx. 30–45 mins)
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Interactive theory test with a quiz at the end
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Practical lift video review via WhatsApp
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Certificate of completion issued upon instructor approval
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Flat €30 fee with zero hidden costs
                            </li>
                        </ul>
                    </div>

                    <div>
                        <a href="{{route('register')}}" class="w-full block text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-600/20 transition-all">
                            Get Started Now (€30)
                        </a>
                        <p class="text-center text-xs text-slate-400 mt-3">Secure checkout · Issued by Progressive Velocity Fast Solutions Limited</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Course Overview Section --}}
    <section class="py-20 bg-slate-50" id="overview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Curriculum & Details</span>
                <h2 class="text-3xl sm:text-4xl font-heading font-bold text-slate-900 mt-2 mb-4">What You Will Learn</h2>
                <p class="text-slate-600">Designed to educate workers on proper ergonomic principles, injury prevention, and safe lifting techniques across all workplace environments.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 mb-6 font-bold text-xl">1</div>
                    <h3 class="font-heading font-bold text-xl text-slate-900 mb-3">Spine Anatomy & Injury Risks</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Understand the structure of the spine, common causes of back injuries during lifting, and how to protect your back during everyday work tasks.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 mb-6 font-bold text-xl">2</div>
                    <h3 class="font-heading font-bold text-xl text-slate-900 mb-3">Ergonomic Risk Assessment</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Learn how to evaluate load weights, handling paths, environmental hazards, and individual capabilities before executing a lift.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 mb-6 font-bold text-xl">3</div>
                    <h3 class="font-heading font-bold text-xl text-slate-900 mb-3">Safe Lifting Technique</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Master the principles of stable base, bending knees, keeping loads close to the body, and avoiding twisting while lifting.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Exact 7-Step "How It Works" Process --}}
    <section class="py-20 bg-white" id="how-it-works">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Step-by-Step Journey</span>
                <h2 class="text-3xl sm:text-4xl font-heading font-bold text-slate-900 mt-2 mb-4">How It Works</h2>
                <p class="text-slate-600">Our straightforward 7-step process ensures thorough learning and practical verification. No shortcuts or instant automatic certificate issuance.</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                {{-- Step 1 --}}
                <div class="bg-slate-50 border border-slate-200 p-6 sm:p-8 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center text-lg flex-shrink-0">1</div>
                    <div class="flex-grow">
                        <h3 class="font-heading font-bold text-lg text-slate-900 mb-1">Create an Account (Register)</h3>
                        <p class="text-slate-600 text-sm">Sign up for your personal profile on our portal with your name and email.</p>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="bg-slate-50 border border-slate-200 p-6 sm:p-8 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center text-lg flex-shrink-0">2</div>
                    <div class="flex-grow">
                        <h3 class="font-heading font-bold text-lg text-slate-900 mb-1">Buy the Course</h3>
                        <p class="text-slate-600 text-sm">Pay the flat fee of €30 securely with zero hidden fees or extra costs.</p>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="bg-slate-50 border border-slate-200 p-6 sm:p-8 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center text-lg flex-shrink-0">3</div>
                    <div class="flex-grow">
                        <h3 class="font-heading font-bold text-lg text-slate-900 mb-1">Start the Course and Go Through Online Theory Modules</h3>
                        <p class="text-slate-600 text-sm">Complete all digital learning modules covering manual handling principles at your own pace.</p>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="bg-slate-50 border border-slate-200 p-6 sm:p-8 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center text-lg flex-shrink-0">4</div>
                    <div class="flex-grow">
                        <h3 class="font-heading font-bold text-lg text-slate-900 mb-1">Complete a Theory Test</h3>
                        <p class="text-slate-600 text-sm">Answer the assessment questions testing your understanding of safety theory.</p>
                    </div>
                </div>

                {{-- Step 5 --}}
                <div class="bg-slate-50 border border-slate-200 p-6 sm:p-8 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center text-lg flex-shrink-0">5</div>
                    <div class="flex-grow">
                        <h3 class="font-heading font-bold text-lg text-slate-900 mb-1">Record and Send Practical Lift Video via WhatsApp</h3>
                        <p class="text-slate-600 text-sm">Record a video of yourself performing a lift following correct manual handling technique, and send it via WhatsApp for review.</p>
                    </div>
                </div>

                {{-- Step 6 --}}
                <div class="bg-slate-50 border border-slate-200 p-6 sm:p-8 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center text-lg flex-shrink-0">6</div>
                    <div class="flex-grow">
                        <h3 class="font-heading font-bold text-lg text-slate-900 mb-1">Wait for Instructor Approval of the Practical Video</h3>
                        <p class="text-slate-600 text-sm">Our instructor reviews your submitted video to verify correct physical lifting form.</p>
                    </div>
                </div>

                {{-- Step 7 --}}
                <div class="bg-blue-50 border border-blue-200 p-6 sm:p-8 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center gap-6 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center text-lg flex-shrink-0">7</div>
                    <div class="flex-grow">
                        <h3 class="font-heading font-bold text-lg text-blue-950 mb-1">Certificate Issued Upon Approval</h3>
                        <p class="text-blue-900 text-sm">Once approved, your certificate of completion is issued (note: certificates are only issued after step 6 is complete).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-20 bg-slate-50" id="faq" x-data="{ activeFaq: null }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Got Questions?</span>
                <h2 class="text-3xl sm:text-4xl font-heading font-bold text-slate-900 mt-2 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600">Everything you need to know about our manual handling training course.</p>
            </div>

            <div class="space-y-4">
                {{-- FAQ 1 --}}
                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
                    <button @click="activeFaq = activeFaq === 1 ? null : 1" class="w-full text-left px-6 py-5 font-heading font-bold text-slate-900 flex justify-between items-center">
                        <span>How much does the course cost?</span>
                        <svg class="w-5 h-5 text-blue-600 transform transition-transform" :class="{'rotate-180': activeFaq === 1}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 1" class="px-6 pb-5 text-slate-600 text-sm leading-relaxed" style="display: none;">
                        The course costs €30 flat, with no hidden fees or additional charges.
                    </div>
                </div>

                {{-- FAQ 2 --}}
                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
                    <button @click="activeFaq = activeFaq === 2 ? null : 2" class="w-full text-left px-6 py-5 font-heading font-bold text-slate-900 flex justify-between items-center">
                        <span>How do I submit my practical lift video?</span>
                        <svg class="w-5 h-5 text-blue-600 transform transition-transform" :class="{'rotate-180': activeFaq === 2}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 2" class="px-6 pb-5 text-slate-600 text-sm leading-relaxed" style="display: none;">
                        After completing your online theory test, you record a short video of yourself performing a lift following correct manual handling technique and send it via WhatsApp to our review team.
                    </div>
                </div>

                {{-- FAQ 3 --}}
                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
                    <button @click="activeFaq = activeFaq === 3 ? null : 3" class="w-full text-left px-6 py-5 font-heading font-bold text-slate-900 flex justify-between items-center">
                        <span>When will I receive my certificate?</span>
                        <svg class="w-5 h-5 text-blue-600 transform transition-transform" :class="{'rotate-180': activeFaq === 3}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 3" class="px-6 pb-5 text-slate-600 text-sm leading-relaxed" style="display: none;">
                        Your certificate of completion is issued once a human instructor reviews and approves your practical lift video. It is not issued instantly or automatically.
                    </div>
                </div>

                {{-- FAQ 4 --}}
                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
                    <button @click="activeFaq = activeFaq === 4 ? null : 4" class="w-full text-left px-6 py-5 font-heading font-bold text-slate-900 flex justify-between items-center">
                        <span>What kind of certificate do I receive?</span>
                        <svg class="w-5 h-5 text-blue-600 transform transition-transform" :class="{'rotate-180': activeFaq === 4}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 4" class="px-6 pb-5 text-slate-600 text-sm leading-relaxed" style="display: none;">
                        You receive a certificate of completion as evidence of training completed through our program.
                    </div>
                </div>

                
                {{-- FAQ 5 --}}
                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <button @click="activeFaq = activeFaq === 5 ? null : 5" class="w-full text-left px-6 py-5 font-heading font-bold text-slate-900 flex justify-between items-center">
                        <span>Can I remove the data that is stored on this website?</span>
                        <svg class="w-5 h-5 text-blue-600 transform transition-transform" :class="{'rotate-180': activeFaq === 5}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 5" class="px-6 pb-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4" style="display: none;">
                        Yes, you can. To achieve that, you can submit a request directly on our <a href="{{ route('front.privacy') }}" class="text-blue-600 hover:underline font-semibold">Privacy Page</a>.
                    </div>
                </div>

                {{-- FAQ 6 --}}
                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <button @click="activeFaq = activeFaq === 6 ? null : 6" class="w-full text-left px-6 py-5 font-heading font-bold text-slate-900 flex justify-between items-center">
                        <span>Is this website an independent training provider?</span>
                        <svg class="w-5 h-5 text-blue-600 transform transition-transform" :class="{'rotate-180': activeFaq === 6}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 6" class="px-6 pb-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4" style="display: none;">
                        Manual Handling Ireland is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection