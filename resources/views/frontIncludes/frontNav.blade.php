<nav class="modern-nav" x-data="{ mobileMenuOpen: false }">
    <div class="nav-wrapper">
        <!-- Mobile Hamburger Toggle Button (Left on mobile) -->
        <button class="mobile-menu-toggle" @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle Menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="28" height="28">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <a href="{{route('frontHome')}}" class="brand">
            <img src="{{asset('images/logo/smallLogo.webp')}}" alt="Ireland Safety Course" class="logoradius">
            <div>Manual Handling Ireland</div>
        </a>

        <div class="nav-links">
            <a href="/">HOME</a>
            <a href="{{route('front.faq')}}">MANUAL HANDLING FAQ's</a>
            <a href="{{route('front.team')}}">TEAM TRAINING</a>
            <a href="{{route('front.about')}}">ABOUT US</a>
            {{--            <a href="{{route('front.blog')}}"></a>--}}
            <a href="{{route('front.contact')}}">CONTACT</a>
        </div>

        <div class="nav-utils">
            <div class="nav-auth-buttons">
                @auth
                    <a href="/dashboard" class="cta-dashboard">HOME</a>
                @else
                    <a href="{{ route('login') }}" class="cta-login">LOGIN</a>
                    <a href="{{ route('register') }}" class="cta-register">REGISTER</a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Full-Screen Slide-out Menu Overlay & Drawer -->
    <div class="mobilesafetynav-mobile-menu-overlay"
         x-show="mobileMenuOpen"
         x-transition.opacity
         @click="mobileMenuOpen = false"
         style="display: none;">
    </div>

    <div class="mobilesafetynav-mobile-menu-drawer" :class="{ 'open': mobileMenuOpen }">
        <div class="mobilesafetynav-mobile-menu-header">
            <a href="{{route('frontHome')}}" class="mobilesafetynav-brand">
                <img src="{{asset('images/logo/smallLogo.webp')}}" alt="Manual Handling Ireland" class="mobilesafetynav-logoradius">
                <div>Manual handling Ireland</div>
            </a>
            <button class="mobilesafetynav-mobile-menu-close" @click="mobileMenuOpen = false" aria-label="Close Menu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div id="safetyResponsiveNav" class="mobile">
            <div id="safetyResponsiveNavMenu" class="mobile">
                <div class="safetyResponsiveNavItem mobile"><a href="/" class="safetyMenuColor mobile">Home</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.faq')}}" class="safetyMenuColor mobile">Please Read Faq's</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.team')}}" class="safetyMenuColor mobile">Team Training</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.about')}}" class="safetyMenuColor mobile">About Us</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.blog')}}" class="safetyMenuColor mobile">Blog</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.contact')}}" class="safetyMenuColor mobile">Contact Us</a></div>
            </div>
        </div>

        <div class="mobilesafetynav-mobile-menu-footer mobile">
            @auth
                <a href="{{ route('home') }}" class="mobilesafetynav-mobile-cta-dashboard mobile">Home</a>
            @else
                <a href="{{ route('login') }}" class="mobilesafetynav-mobile-cta-login mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    Login
                </a>
                <a href="{{ route('register') }}" class="mobilesafetynav-mobile-cta-register mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                    Register
                </a>
            @endauth
            <p class="mobilesafetynav-mobile-footer-text mobile">IRELAND'S LEADING SAFETY TRAINING</p>
        </div>
    </div>
</nav>
<!-- <div class="subbar-container">

    <div class="subbar-wrapper desktop-only">
        <div class="subbar-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            <span>Money back guarantee</span>
        </div>
        <div class="subbar-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            <span>Fully acredited course</span>
        </div>
        <div class="subbar-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>24/7 access</span>
        </div>
        <div class="subbar-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            <span>Instant certifiacation</span>
        </div>
    </div>


    <div class="subbar-container mobile-only" x-data="{
    slides: [
        {
            text: 'Money back guarantee',
            svg: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\'/>'
        },
        {
            text: 'Fully acredited course',
            svg: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\'/>'
        },
        {
            text: '24/7 access',
            svg: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\'/>'
        },
        {
            text: 'Instant certifiacation',
            svg: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M13 10V3L4 14h7v7l9-11h-7z\'/>'
        }
    ],
    currentIndex: 0,
    init() {
        setInterval(() => {
            this.currentIndex = (this.currentIndex + 1) % this.slides.length;
        }, 3000);
    }
}" x-init="init()">
        <div class="subbar-wrapper">
            <div class="subbar-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20" x-html="slides[currentIndex].svg"></svg>
                <span x-text="slides[currentIndex].text" x-transition.opacity.duration.300ms></span>
            </div>
        </div>
    </div>
</div> -->
