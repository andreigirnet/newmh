{{-- Footer --}}
<footer class="bg-slate-900 text-slate-400 py-16 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
            
            {{-- Column 1: Brand & Info --}}
            <div>
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white font-bold text-lg">
                        P
                    </div>
                    <span class="font-heading font-bold text-white text-base">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed mb-4">
                    Providing accessible online workplace safety education and manual handling training across Ireland.
                </p>
                <p class="text-sm text-slate-300 font-medium">
                    Phone: <a href="tel:{{ config('services.company.phone', '+353899735295') }}" class="text-blue-400 hover:underline">{{ config('services.company.phone', '+353 89 973 5295') }}</a>
                </p>
            </div>

            {{-- Column 2: Quick Links & Policies --}}
            <div>
                <h4 class="font-heading font-semibold text-white mb-4">Useful Links</h4>
                <ul class="space-y-2.5 text-sm">
                    <li>
                        <a href="{{ route('terms') }}" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            Terms & Conditions
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.privacy') }}" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            Privacy Policy & Data Removal
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.refund') }}" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            Refund & Cancellation Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.about') }}" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            About Our Organization
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.contact') }}" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 3: Company Details --}}
            <div>
                <h4 class="font-heading font-semibold text-white mb-4">Company Details</h4>
                <ul class="space-y-2 text-sm">
                    <li><strong class="text-slate-300">Name:</strong> PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</li>
                    <li><strong class="text-slate-300">Registration Number:</strong> 822301</li>
                    <li><strong class="text-slate-300">Registered Address:</strong> 51 Bracken Road, Dublin, D18 CV48 Ireland</li>
                </ul>
            </div>

            {{-- Column 4: Course Pricing & CTA --}}
            <div>
                <h4 class="font-heading font-semibold text-white mb-4">Course Pricing & Terms</h4>
                <p class="text-sm text-slate-400 leading-relaxed mb-4">
                    Course price: €30 flat fee. Includes online theory modules, theory test, and practical video review. Certificate of completion issued upon instructor approval.
                </p>
                <a href="{{ route('register') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-xl text-sm transition-colors">
                    Register Now (€30)
                </a>
            </div>

        </div>

        <div class="pt-8 border-t border-slate-800 text-center text-xs text-slate-500">
            &copy; {{ date('Y') }} PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (Reg. 822301). All rights reserved.
        </div>
    </div>
</footer>