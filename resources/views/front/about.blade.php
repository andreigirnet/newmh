@extends('front.app')

@section('content')
    <div class="bg-slate-50 min-h-screen py-16 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-800">
        <div class="max-w-4xl mx-auto space-y-10">

            {{-- Header --}}
            <div class="bg-blue-900 text-white rounded-3xl p-8 sm:p-12 shadow-xl border border-blue-800">
                <h1 class="text-3xl sm:text-5xl font-heading font-extrabold tracking-tight mb-4">About us</h1>
                <p class="text-blue-100 text-base sm:text-lg leading-relaxed max-w-2xl">
                        Manual Handling Ireland is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Who we are --}}
                <div class="md:col-span-2 bg-white rounded-3xl border border-slate-200 shadow-xl p-8 sm:p-10 flex flex-col justify-between">
                    <div>
                        <h2 class="font-heading font-bold text-2xl text-slate-900 mb-3">Who we are</h2>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-8">
                            Manual Handling Ireland (manualhandling-ireland.ie) is operated by <strong>{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</strong>. We provide an online manual handling course made up of theory slides, a theory test and a practical video that an instructor reviews.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-slate-50 border border-slate-200 p-6 rounded-2xl">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 block mb-1">Company name</span>
                            <span class="font-bold text-slate-900 text-sm sm:text-base">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</span>
                        </div>
                        <div>
                            <span class="text-xs font-semibold text-slate-500 block mb-1">Company number (CRO)</span>
                            <span class="font-bold text-slate-900 text-sm sm:text-base">{{ config('global.business_number', '822301') }}</span>
                        </div>
                    </div>
                </div>

                {{-- Registered address --}}
                <div class="bg-white rounded-3xl border border-slate-200 shadow-xl p-8 flex flex-col justify-between">
                    <div>
                        <h2 class="font-heading font-bold text-xl text-slate-900 mb-3">Registered address</h2>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            This is the registered office of the company that runs the course.
                        </p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 text-sm text-slate-700 leading-relaxed">
                        <strong class="text-slate-900 font-bold block mb-1">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</strong>
                        {{ config('global.business_address', '51 Bracken Road, Dublin, D18 CV48 Ireland') }}
                    </div>
                </div>

                {{-- Contact --}}
                <div class="bg-white rounded-3xl border border-slate-200 shadow-xl p-8 flex flex-col justify-between">
                    <div>
                        <h2 class="font-heading font-bold text-xl text-slate-900 mb-3">Contact us</h2>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Get in touch if you need help enrolling or sending your practical video.
                        </p>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 text-xs sm:text-sm space-y-3 text-slate-700">
                        <div class="flex justify-between items-center border-b border-slate-200/60 pb-2">
                            <span class="font-medium text-slate-500">Email:</span>
                            <a href="mailto:info@manualhandling-ireland.ie" class="text-blue-600 hover:underline font-semibold">info@manualhandling-ireland.ie</a>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-slate-500">Phone / WhatsApp:</span>
                            <a href="tel:+353899735295" class="text-blue-600 hover:underline font-semibold">+353899735295</a>
                        </div>
                    </div>
                </div>

                {{-- How the course works --}}
                <div class="md:col-span-2 bg-white rounded-3xl border border-slate-200 shadow-xl p-8 sm:p-10">
                    <h2 class="font-heading font-bold text-2xl text-slate-900 mb-3">How the course works</h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-8">
                        You register an account, buy the course for €30, complete the online theory slides and pass the theory test. You then send a practical lifting video on WhatsApp for an instructor to review. Your certificate of completion is issued once the instructor approves your video. It is not issued automatically.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                            <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-bold text-xs flex items-center justify-center mb-3">01</div>
                            <h3 class="font-heading font-bold text-slate-900 text-sm mb-2">Register</h3>
                            <p class="text-slate-600 text-xs leading-relaxed">Create an account with your email and a password.</p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                            <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-bold text-xs flex items-center justify-center mb-3">02</div>
                            <h3 class="font-heading font-bold text-slate-900 text-sm mb-2">Buy the course</h3>
                            <p class="text-slate-600 text-sm leading-relaxed text-xs">Pay the €30 fee. There are no extra fees.</p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                            <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-bold text-xs flex items-center justify-center mb-3">03</div>
                            <h3 class="font-heading font-bold text-slate-900 text-sm mb-2">Online slides</h3>
                            <p class="text-slate-600 text-xs leading-relaxed">Work through the theory at your own pace.</p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                            <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-bold text-xs flex items-center justify-center mb-3">04</div>
                            <h3 class="font-heading font-bold text-slate-900 text-sm mb-2">Theory test</h3>
                            <p class="text-slate-600 text-xs leading-relaxed">Answer the online test questions.</p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                            <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-bold text-xs flex items-center justify-center mb-3">05</div>
                            <h3 class="font-heading font-bold text-slate-900 text-sm mb-2">WhatsApp video</h3>
                            <p class="text-slate-600 text-xs leading-relaxed">Record your lift and send it on WhatsApp.</p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                            <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-bold text-xs flex items-center justify-center mb-3">06</div>
                            <h3 class="font-heading font-bold text-slate-900 text-sm mb-2">Instructor review</h3>
                            <p class="text-slate-600 text-xs leading-relaxed">An instructor reviews your video.</p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">
                            <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-bold text-xs flex items-center justify-center mb-3">07</div>
                            <h3 class="font-heading font-bold text-slate-900 text-sm mb-2">Certificate issued</h3>
                            <p class="text-slate-600 text-xs leading-relaxed">Your certificate of completion is issued after approval.</p>
                        </div>
                    </div>
                </div>

                {{-- Policies --}}
                <div class="md:col-span-2 bg-white rounded-3xl border border-slate-200 shadow-xl p-8 sm:p-10">
                    <h2 class="font-heading font-bold text-xl text-slate-900 mb-2">Policies and further information</h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Manual Handling Ireland is operated by PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED, registered in Ireland under company number 822301. Details of our services, the assessment process, payments and data handling are in our <a href="{{ route('terms') }}" class="text-blue-600 hover:underline font-semibold">Terms and Conditions</a>, <a href="{{ route('front.refund') }}" class="text-blue-600 hover:underline font-semibold">Refund Policy</a> and <a href="{{ route('front.privacy') }}" class="text-blue-600 hover:underline font-semibold">Privacy Policy</a>.
                    </p>
                </div>

            </div>

        </div>
    </div>
@endsection