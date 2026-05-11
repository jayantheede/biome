<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-[#0E8028] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[600px] h-[600px] bg-[#FF6B00] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-[#0E8028]/30 bg-[#0E8028]/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-[#0E8028] uppercase">
                Plant Nutrition
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                Peptide <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0E8028] to-[#FF6B00]">Nutrition</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-4xl mx-auto font-light leading-relaxed mb-6">
                Targeted formulas designed to enhance plant health and stress tolerance.
            </p>
        </div>

        <div class="max-w-6xl mx-auto glass-panel p-10 md:p-16 rounded-[40px] border border-white/10 relative overflow-hidden hero-element shadow-[0_0_50px_rgba(0,0,0,0.5)]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center relative z-10">
                
                <div>
                    <div class="inline-block px-4 py-1 rounded-full border border-[#0E8028]/30 bg-[#0E8028]/10 text-xs font-bold tracking-widest mb-6 text-[#0E8028] uppercase">Sea BioLife O</div>
                    <h3 class="text-4xl font-display font-bold text-white mb-6">100% Ascophyllum Nodosum Extract</h3>
                    <p class="text-gray-300 font-light leading-relaxed mb-6 text-lg">
                        Sea BioLife O is a natural 100% extract derived from fresh Ascophyllum Nodosum. Seaweed is harvested from renewable intertidal bays in the cold, clean North Atlantic, off the coast of County Donegal, Ireland.
                    </p>
                    <p class="text-gray-400 font-light leading-relaxed text-base mb-8">
                        It acts as a plant bio-stimulant, anti-stress agent, and soil conditioner. We use a state-of-the-art innovative cold process extraction method that does not apply solvents or high temperatures. To ensure freshness, the hand-harvested raw material is processed in a production facility located on the coast where the seaweed is collected.
                    </p>
                    <a href="/shop" class="inline-block px-8 py-4 bg-white text-[#030504] font-bold rounded-full hover:bg-[#0E8028] transition-all transform hover:scale-105 shadow-[0_0_20px_rgba(0,240,255,0.3)]">
                        Explore In Shop
                    </a>
                </div>
                
                <div class="space-y-8">
                    <div class="glass-panel p-8 rounded-[24px] border border-[#FF6B00]/20 bg-[#060B09]/80">
                        <h4 class="text-xl font-bold text-white mb-4">Essential For Stress Tolerance</h4>
                        <p class="text-gray-400 font-light text-sm mb-6">
                            Sea BioLife O contains three main natural anti-oxidants (Fucoidan, Phlorotanin, Laminarin) essential for stress tolerance & healthy plant growth.
                        </p>
                        <ul class="space-y-3 text-left text-gray-300 font-light text-sm">
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Complete plant health and resilience</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Enhances plant and vegetative growth</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Improves nutrient uptake efficiency</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Feeds beneficial soil microbes</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Compatible with most nutrients</li>
                        </ul>
                    </div>
                    
                    <div class="glass-panel p-8 rounded-[24px] border border-[#0E8028]/20 bg-[#060B09]/80">
                        <h4 class="text-xl font-bold text-white mb-2">The Evolving Crisis</h4>
                        <p class="text-gray-400 font-light text-sm">
                            The escalating emission of CO2 is propelling our planet towards an unprecedented era of warmth. We need to decarbonize our food chains and industries as quickly as possible. We believe that the ocean is the key to a low-carbon future. Seaweed can absorb carbon faster than rainforests. Kelp forests can typically sequester between 3 and 7 metric tons of carbon per acre per year.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    gsap.from(".hero-element", {
        y: 50,
        opacity: 0,
        duration: 1.2,
        stagger: 0.15,
        ease: "power3.out",
        delay: 0.2
    });
</script>
