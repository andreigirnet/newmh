{{-- Top Announcement Bar --}}
    <div class="bg-blue-900 text-white text-xs sm:text-sm py-2 px-4 text-center font-medium">
        <span>Transparent Pricing: €30 flat fee with zero hidden costs. Ireland-wide availability.</span>
    </div>

<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2.5">
                <div class="w-10 h-10 flex items-center justify-center text-white font-bold text-xl">
                    <img src="{{asset('images/logo/smallLogo.webp')}}" alt="">
                </div>
                <div class="flex flex-col">
                    <span class="font-heading font-extrabold text-slate-900 text-sm sm:text-base leading-tight tracking-tight">MANUAL HANDLING</span>
                    <span class="text-xs text-blue-600 font-semibold tracking-wider">Ireland</span>
                </div>
            </a>

            {{-- Desktop Nav Links --}}
            <nav class="hidden md:flex items-center gap-8 font-medium text-sm text-slate-600">
                <a href="#overview" class="hover:text-blue-600 transition-colors">Course Overview</a>
                <a href="#how-it-works" class="hover:text-blue-600 transition-colors">How It Works</a>
                <a href="#pricing" class="hover:text-blue-600 transition-colors">Pricing</a>
                <a href="#faq" class="hover:text-blue-600 transition-colors">FAQ</a>
                <a href="tel:{{ config('services.company.phone', '+353899735295') }}" class="text-slate-900 font-semibold flex items-center gap-1.5 hover:text-blue-600 transition-colors">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    {{ config('services.company.phone', '+353 89 973 5295') }}
                </a>
            </nav>

            <div class="hidden md:flex items-center gap-4">
                <a href="{{route('register')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2.5 rounded-xl shadow-lg shadow-blue-600/25 transition-all transform hover:-translate-y-0.5 text-sm">
                    Register
                </a>
            </div>

            {{-- Mobile Menu Toggle Button --}}
            <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="md:hidden p-2.5 rounded-xl text-slate-700 hover:bg-slate-100 focus:outline-none" aria-label="Toggle Menu">
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        {{-- Mobile Dropdown Menu --}}
        <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" class="md:hidden bg-white border-b border-slate-200 px-6 py-6 space-y-4 shadow-xl" style="display: none;">
            <a href="#overview" @click="mobileMenuOpen = false" class="block text-slate-700 font-medium hover:text-blue-600">Course Overview</a>
            <a href="#how-it-works" @click="mobileMenuOpen = false" class="block text-slate-700 font-medium hover:text-blue-600">How It Works</a>
            <a href="#pricing" @click="mobileMenuOpen = false" class="block text-slate-700 font-medium hover:text-blue-600">Pricing</a>
            <a href="#faq" @click="mobileMenuOpen = false" class="block text-slate-700 font-medium hover:text-blue-600">FAQ</a>
            <div class="pt-4 border-t border-slate-100 flex flex-col gap-3">
                <a href="tel:{{ config('services.company.phone', '+353899735295') }}" class="text-slate-900 font-semibold flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    {{ config('services.company.phone', '+353 89 973 5295') }}
                </a>
                <a href="{{route('register')}}" @click="mobileMenuOpen = false" class="w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl shadow-md">
                    Register Here
                </a>
            </div>
        </div>
    </header>