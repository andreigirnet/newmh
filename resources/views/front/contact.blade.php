@extends('front.app')

@section('content')
    <div class="bg-slate-50 min-h-screen py-16 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-800">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
            
            {{-- Header --}}
            <div class="bg-blue-900 text-white p-8 sm:p-12 relative overflow-hidden">
                <div class="relative z-10">
                    <span class="bg-blue-600 text-white font-bold text-xs uppercase px-3 py-1 rounded-full mb-3 inline-block">We're Here to Help</span>
                    <h1 class="text-3xl sm:text-4xl font-heading font-extrabold tracking-tight mb-2">Contact Us</h1>
                    <p class="text-blue-200 text-sm sm:text-base">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</p>
                </div>
                <div class="absolute right-0 bottom-0 opacity-10 transform translate-x-8 translate-y-8">
                    <svg class="w-64 h-64 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                </div>
            </div>

            <div class="p-8 sm:p-12 space-y-10">

                {{-- Live Chat Prompt Banner --}}
                <div class="bg-blue-50 border border-blue-100 rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-6">
                        Manual Handling Ireland is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand.
                </div>

                {{-- Info Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    {{-- Business Website & Entity --}}
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Entity Details</div>
                        <h3 class="font-heading font-bold text-slate-900 text-base mb-2">Business Website</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            This website is owned by <strong>{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</strong> (Reg. No. {{ config('global.business_number', '822301') }}) and operates as manualhandling-ireland.ie
                        </p>
                    </div>

                    {{-- Operating Hours --}}
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Availability</div>
                        <h3 class="font-heading font-bold text-slate-900 text-base mb-2">Operating Hours</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Monday–Sunday, 9:00 AM–10:00 PM (Ireland time)<br>
                            <span class="text-xs text-slate-500 mt-1 inline-block">Support responses & practical video reviews processed daily</span>
                        </p>
                    </div>

                    {{-- Email Us --}}
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Direct Message</div>
                        <h3 class="font-heading font-bold text-slate-900 text-base mb-2">Email Us</h3>
                        <a href="mailto:info@manualhandling-ireland.ie" class="text-blue-600 hover:underline font-semibold text-sm">
                            info@manualhandling-ireland.ie
                        </a>
                    </div>

                    {{-- Call Us --}}
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Phone Line</div>
                        <h3 class="font-heading font-bold text-slate-900 text-base mb-2">Call Us</h3>
                        <a href="tel:{{ config('global.phone', '+353899735295') }}" class="text-blue-600 hover:underline font-semibold text-sm">
                            {{ config('global.phone', '+353 89 973 5295') }}
                        </a>
                    </div>

                </div>

                {{-- Registered Address Box --}}
                <div class="bg-slate-900 text-white rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider">Registered Corporate Office</span>
                        <div class="font-heading font-semibold text-white text-base sm:text-lg mt-1">
                            {{ config('global.business_address', '51 Bracken Road, Dublin, D18 CV48 Ireland') }}
                        </div>
                    </div>
                    <a href="https://maps.google.com/?q=51+Bracken+Road,+Dublin,+D18+CV48+Ireland" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider px-5 py-3 rounded-xl transition-all shadow-md flex-shrink-0">
                        View Map
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
