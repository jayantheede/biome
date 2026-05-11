<!-- Advanced Dedicated Landing Page: Contact Us -->
<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <!-- Animated Biotech Background Effects -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-bl from-[#FF6B00]/10 to-transparent rounded-full mix-blend-screen filter blur-[100px]"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-[#0E8028]/10 to-transparent rounded-full mix-blend-screen filter blur-[100px]"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- 1. Header Section: Value Proposition & 2. Lead Capture Form -->
        <div class="flex flex-col lg:flex-row gap-16 items-center mb-32">
            
            <!-- Value Proposition (Left) -->
            <div class="lg:w-1/2 hero-element">
                <div class="inline-block px-4 py-2 rounded-full border border-[#FF6B00]/30 bg-[#FF6B00]/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-6 text-[#FF6B00] uppercase shadow-[0_0_15px_rgba(0,255,163,0.1)]">
                    Enterprise Partnership
                </div>
                <h1 class="text-5xl md:text-7xl font-display font-bold mb-6 text-white leading-tight drop-shadow-xl">
                    Engineering the <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF6B00] to-[#0E8028]">Future of Yield.</span>
                </h1>
                <p class="text-xl text-gray-400 mb-8 font-light leading-relaxed">
                    Join elite growers and agricultural enterprises leveraging our proprietary microbiome technology. Increase your farm's resilience, maximize yield predictability, and transition to highly profitable regenerative agriculture.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#FF6B00]/10 border border-[#FF6B00]/20 flex items-center justify-center text-[#FF6B00] shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white mb-1">Unmatched ROI</h4>
                            <p class="text-sm text-gray-500">Proven to reduce synthetic fertilizer dependency while boosting crop vitality.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#0E8028]/10 border border-[#0E8028]/20 flex items-center justify-center text-[#0E8028] shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white mb-1">OMRI Certified Organic</h4>
                            <p class="text-sm text-gray-500">Fully compliant with high-end organic farming standards across the US.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form (Right) -->
            <div class="lg:w-1/2 w-full hero-element">
                <div class="glass-panel p-10 rounded-[32px] border border-white/10 shadow-[0_20px_50px_rgba(0,0,0,0.5)] relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#FF6B00] rounded-full mix-blend-screen filter blur-[80px] opacity-20"></div>
                    
                    <h3 class="text-3xl font-display font-bold text-white mb-2">Request an Assessment</h3>
                    <p class="text-sm text-gray-400 mb-8">Fill out the form below and our agronomy experts will contact you within 24 hours.</p>
                    
                    <form action="#" method="POST" class="space-y-5" onsubmit="event.preventDefault(); alert('Lead captured successfully!');">
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">First Name</label>
                                <input type="text" required class="w-full bg-[#030504]/80 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#FF6B00] transition-colors" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Last Name</label>
                                <input type="text" required class="w-full bg-[#030504]/80 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#FF6B00] transition-colors" placeholder="Doe">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Work Email</label>
                            <input type="email" required class="w-full bg-[#030504]/80 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#FF6B00] transition-colors" placeholder="john@enterprisefarm.com">
                        </div>
                        
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Total Acreage</label>
                            <select class="w-full bg-[#030504]/80 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#FF6B00] transition-colors appearance-none">
                                <option>Less than 500 Acres</option>
                                <option>500 - 2,000 Acres</option>
                                <option>2,000 - 10,000 Acres</option>
                                <option>10,000+ Acres</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Primary Crop Focus</label>
                            <input type="text" required class="w-full bg-[#030504]/80 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#FF6B00] transition-colors" placeholder="e.g. Corn, Soy, Almonds">
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-[#FF6B00] to-[#0E8028] text-[#030504] font-bold rounded-xl px-6 py-4 mt-4 hover:shadow-[0_0_30px_rgba(0,255,163,0.4)] transition-all duration-300 transform hover:-translate-y-1 text-lg">
                            Secure Your Consultation
                        </button>
                        <p class="text-center text-xs text-gray-600 mt-4">100% Secure & Confidential.</p>
                    </form>
                </div>
            </div>
        </div>

        <!-- 3. Services -->
        <div class="mb-32">
            <div class="text-center mb-16 hero-element">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-4">Core Biotech Services</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Our advanced biological formulations target specific growth phases to engineer perfect crop environments.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass-panel p-8 rounded-3xl border border-white/5 hover:border-[#FF6B00]/30 transition-all duration-500 hero-element">
                    <div class="text-4xl mb-4">🌱</div>
                    <h3 class="text-xl font-bold text-white mb-3">Green Nitrogen Fixation</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Harnessing atmospheric nitrogen directly to the root zone via symbiotic microbial populations, slashing synthetic fertilizer costs.</p>
                </div>
                <div class="glass-panel p-8 rounded-3xl border border-white/5 hover:border-[#0E8028]/30 transition-all duration-500 hero-element">
                    <div class="text-4xl mb-4">🛡️</div>
                    <h3 class="text-xl font-bold text-white mb-3">Nematode Control</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Biological suppression mechanisms that target parasitic nematodes while preserving beneficial soil life for extreme resilience.</p>
                </div>
                <div class="glass-panel p-8 rounded-3xl border border-white/5 hover:border-purple-500/30 transition-all duration-500 hero-element">
                    <div class="text-4xl mb-4">🐝</div>
                    <h3 class="text-xl font-bold text-white mb-3">Bee Bloom Pollination</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Pheromone-assisted botanical formulations designed to massively increase pollinator attraction and fruit set rates.</p>
                </div>
            </div>
        </div>

        <!-- 4. Clients and Testimonials -->
        <div class="border-t border-glass-border pt-20">
            <div class="text-center mb-16 hero-element">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-4">Trusted by Industry Leaders</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Over 1,000,000+ acres currently under ReNu-Biome management across the USA.</p>
            </div>
            
            <!-- Client Logos -->
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-50 hero-element mb-24 grayscale">
                <div class="text-2xl font-bold font-display tracking-widest uppercase">Walmart</div>
                <div class="text-2xl font-bold font-display tracking-widest uppercase">Whole Foods</div>
                <div class="text-2xl font-bold font-display tracking-widest uppercase">Sysco</div>
                <div class="text-2xl font-bold font-display tracking-widest uppercase">Cargill</div>
            </div>

            <!-- Testimonials -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 hero-element">
                <div class="glass-panel p-10 rounded-3xl border border-white/5 relative">
                    <div class="absolute top-6 left-6 text-6xl text-[#FF6B00] opacity-20 font-serif">"</div>
                    <p class="text-gray-300 text-lg italic relative z-10 mb-6 mt-4">
                        Transitioning our 5,000-acre corn operation to ReNu-Biome's Green Nitrogen saved us 30% on input costs while our yields stayed entirely stable. The ROI was immediate and undeniable.
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gray-700"></div>
                        <div>
                            <h4 class="text-white font-bold">Robert T.</h4>
                            <p class="text-sm text-[#FF6B00]">Midwest Agricultural Partners</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel p-10 rounded-3xl border border-white/5 relative">
                    <div class="absolute top-6 left-6 text-6xl text-[#0E8028] opacity-20 font-serif">"</div>
                    <p class="text-gray-300 text-lg italic relative z-10 mb-6 mt-4">
                        Their nematode control biologicals saved our almond orchards. We moved completely away from harsh chemical fumigants and the soil health has never looked better.
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gray-700"></div>
                        <div>
                            <h4 class="text-white font-bold">Sarah Jenkins</h4>
                            <p class="text-sm text-[#0E8028]">California Nut Growers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    if (typeof gsap !== 'undefined') {
        gsap.from('.hero-element', { y: 50, opacity: 0, duration: 1, stagger: 0.15, ease: 'power3.out', delay: 0.2 });
    }
</script>
