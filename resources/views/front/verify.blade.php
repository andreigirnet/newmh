@extends('front.app')

@section('content')
    <div class="bg-slate-50 min-h-screen py-16 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-800">
        <div class="max-w-4xl mx-auto space-y-10">

            {{-- Header Card --}}
            <div class="bg-blue-900 text-white rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-xl border border-blue-800" data-aos="fade-up">
                <div class="relative z-10">
                    <span class="bg-blue-600 text-white font-bold text-xs uppercase px-3 py-1 rounded-full mb-3 inline-block">Secure Validation</span>
                    <h1 class="text-3xl sm:text-4xl font-heading font-extrabold tracking-tight mb-2">Verify a Certificate</h1>
                    <p class="text-blue-200 text-sm sm:text-base">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</p>
                </div>
                <div class="absolute right-0 bottom-0 opacity-10 transform translate-x-8 translate-y-8">
                    <svg class="w-64 h-64 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
                </div>
            </div>

            {{-- Verification Card Container --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-xl p-8 sm:p-12" data-aos="fade-up" data-aos-delay="100">
                <div class="max-w-xl mx-auto text-center">
                    
                    <div class="mb-8">
                        <div class="w-16 h-16 bg-blue-50 border border-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4 text-blue-600 shadow-inner">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <h2 class="font-heading font-bold text-2xl text-slate-900 mb-2">Verify Credentials</h2>
                        <p class="text-slate-600 text-sm">Please have the validation code on you. Find it printed on the certificate of completion. Enter the Unique ID below to check validity.</p>
                    </div>

                    {{-- Success Alert --}}
                    @if(session('success'))
                        <div class="mb-6 bg-emerald-50 text-emerald-800 p-4 rounded-2xl border border-emerald-200 text-sm font-medium flex items-center gap-3 text-left">
                            <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span><strong>✓ Success:</strong> {{ session('success') }}</span>
                        </div>
                    @endif

                    {{-- Failure / Notice Alert --}}
                    @if(session('fail'))
                        <div class="mb-6 bg-red-50 text-red-800 p-4 rounded-2xl border border-red-200 text-sm font-medium flex items-center gap-3 text-left">
                            <svg class="w-5 h-5 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            <span><strong>✕ Notice:</strong> {{ session('fail') }}</span>
                        </div>
                    @endif

                    {{-- Verification Form --}}
                    <form action="{{ route('certificate.verify') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <input type="text"
                                   name="unique_id"
                                   class="w-full px-4 py-4 rounded-xl border border-slate-300 bg-white text-slate-900 text-base text-center tracking-wider font-mono focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all placeholder:text-slate-400 placeholder:font-sans placeholder:text-sm"
                                   placeholder="Enter Certificate ID..."
                                   required>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-600/25 transition-all text-sm uppercase tracking-wider">
                            Verify Authenticity
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection