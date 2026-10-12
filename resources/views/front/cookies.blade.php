@extends('front.app')

@section('content')
    <div class="bg-slate-50 min-h-screen py-16 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-800">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
            
            {{-- Header --}}
            <div class="bg-blue-900 text-white p-8 sm:p-12 relative overflow-hidden">
                <div class="relative z-10">
                    <span class="bg-blue-600 text-white font-bold text-xs uppercase px-3 py-1 rounded-full mb-3 inline-block">Website Transparency</span>
                    <h1 class="text-3xl sm:text-4xl font-heading font-extrabold tracking-tight mb-2">Cookie Policy</h1>
                    <p class="text-blue-200 text-sm sm:text-base">{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</p>
                </div>
                <div class="absolute right-0 bottom-0 opacity-10 transform translate-x-8 translate-y-8">
                    <svg class="w-64 h-64 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                </div>
            </div>

            <div class="p-8 sm:p-12 space-y-10">

                {{-- Section 1 --}}
                <div>
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        1. What Are Cookies?
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Cookies are small text files stored on your device when you visit a website. They help websites function correctly, maintain security, remember preferences, and understand how visitors interact with the platform.
                    </p>
                </div>

                {{-- Section 2 --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        2. How We Use Cookies
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-4">
                        <strong>{{ config('global.business_name', 'PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED') }}</strong> uses cookies and similar technologies for essential website functionality, security, session management, and customer support.
                    </p>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Our website may also utilize third-party services, including Google and Chatway, which may place cookies or similar technologies to provide analytics, communications, and interactive support services.
                    </p>
                </div>

                {{-- Section 3 --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        3. Overview of Cookies Used
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                        The table below breaks down the specific cookies used on our platform, what they do, how long they stay on your device, and their category:
                    </p>
                    
                    <div class="overflow-x-auto rounded-2xl border border-slate-200">
                        <table class="w-full text-left text-sm text-slate-700">
                            <thead class="bg-slate-100 text-slate-900 font-heading font-bold border-b border-slate-200">
                                <tr>
                                    <th class="p-4">Cookie Name</th>
                                    <th class="p-4">Category</th>
                                    <th class="p-4">Duration</th>
                                    <th class="p-4">What it does (Plain English)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                <tr class="hover:bg-slate-50/50">
                                    <td class="p-4 font-mono text-xs text-blue-900"><code>__cf_bm</code>, <code>cf_clearance</code></td>
                                    <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Necessary</span></td>
                                    <td class="p-4 text-xs">30 mins – 1 year</td>
                                    <td class="p-4 text-xs sm:text-sm">Protects the website from malicious bots and verifies that you are a real human visitor.</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="p-4 font-mono text-xs text-blue-900"><code>jwt.token</code>, <code>XSRF-TOKEN</code>, <code>id</code>, <code>normal.handling.online.session</code></td>
                                    <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Necessary</span></td>
                                    <td class="p-4 text-xs">Session – 1 year</td>
                                    <td class="p-4 text-xs sm:text-sm">Keeps you safely logged in and protects your account data from unauthorized cross-site tampering.</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="p-4 font-mono text-xs text-blue-900"><code>chatway.delivery.url</code>, <code>chatway.referrer.url</code></td>
                                    <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-800">Functional</span></td>
                                    <td class="p-4 text-xs">Up to 1 year</td>
                                    <td class="p-4 text-xs sm:text-sm">Remembers your live chat context and preferences so customer support can assist you better.</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="p-4 font-mono text-xs text-blue-900"><code>NID</code>, <code>OTZ</code>, <code>AEC</code>, <code>SID</code>, <code>HSID</code>, <code>SSID</code></td>
                                    <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-800">Functional</span></td>
                                    <td class="p-4 text-xs">Session – 1.5 years</td>
                                    <td class="p-4 text-xs sm:text-sm">Saved by Google services to remember your user preferences, help secure your session, and prevent fraud.</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="p-4 font-mono text-xs text-blue-900"><code>_ga</code>, <code>_gid</code>, <code>_gcl_au</code></td>
                                    <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-full bg-indigo-100 text-indigo-800">Analytics</span></td>
                                    <td class="p-4 text-xs">1 – 2 years</td>
                                    <td class="p-4 text-xs sm:text-sm">Helps us understand website traffic and visitor interactions so we can improve platform performance.</td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="p-4 font-mono text-xs text-blue-900"><code>__gads</code>, <code>__gpi</code>, <code>SEARCH_SAMESITE</code></td>
                                    <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-full bg-rose-100 text-rose-800">Marketing</span></td>
                                    <td class="p-4 text-xs">Up to 2 years</td>
                                    <td class="p-4 text-xs sm:text-sm">Tracks ad performance and helps deliver customized content or relevant opportunities.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Section 4 --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        4. Third-Party Cookies
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Certain third-party services integrated into our website may place or access cookies on your device when their specific features are loaded or utilized. These services operate under their respective privacy policies and terms.
                    </p>
                </div>

                {{-- Section 5 --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        5. Cookie Duration
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Cookies may be classified as session cookies or persistent cookies. Session cookies are automatically deleted when you close your browser, whereas persistent cookies remain on your device for a specified timeframe or until you manually clear them.
                    </p>
                </div>

                {{-- Section 6 --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        6. Managing Cookies
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-4">
                        You have the right to manage or delete cookies via your browser settings. Most web browsers allow you to block cookies entirely, clear existing storage, or prompt you before a cookie is saved to your device.
                    </p>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Please note that disabling essential cookies may impact certain core features of our website, including user account logins, session security, and live customer support tools.
                    </p>
                </div>

                {{-- Section 7 --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        7. Changes to This Cookie Policy
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        We may update this Cookie Policy from time to time to reflect modifications to our website, integrated technologies, or applicable regulatory requirements. Any updates will be posted directly on this page.
                    </p>
                </div>

                {{-- Section 8 --}}
                <div class="border-t border-slate-100 pt-8">
                    <h2 class="font-heading font-bold text-xl sm:text-2xl text-slate-900 mb-4 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        8. Contact Us
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        If you have any questions regarding our use of cookies or this Cookie Policy, please feel free to reach out to us through our website's contact page or call us at <a href="tel:{{ config('global.phone', '+353899735295') }}" class="text-blue-600 hover:underline font-medium">{{ config('global.phone', '+353 89 973 5295') }}</a>.
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection