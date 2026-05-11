<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-gold rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[600px] h-[600px] bg-[#FF6B00] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-gold/30 bg-gold/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-gold uppercase">
                Pollination Tech
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                Bee <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold to-[#FFA500]">Bloom</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-6">
                Natural Honeybee attractant with plant-based essential oils & Pheromones.
            </p>
        </div>

        <div class="max-w-5xl mx-auto space-y-12">
            
            <div class="glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element flex flex-col md:flex-row gap-10 items-center shadow-[0_0_50px_rgba(0,0,0,0.5)]">
                <div class="w-full md:w-1/3 text-center">
                    <div class="w-20 h-20 mx-auto rounded-full bg-gold/10 border border-gold/20 flex items-center justify-center mb-6 text-gold">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-display font-bold text-white mb-2">Improves Pollination</h3>
                    <div class="text-gold text-sm font-bold tracking-widest uppercase mb-4">Yield Multiplier</div>
                    <a href="/shop" class="inline-block px-6 py-2 border border-gold text-gold rounded-full hover:bg-gold hover:text-[#060B09] transition-all text-sm font-bold">Buy Now</a>
                </div>
                <div class="w-full md:w-2/3">
                    <h4 class="text-xl text-white font-medium mb-4">Maximized Orchard Yields</h4>
                    <p class="text-gray-400 font-light leading-relaxed text-base mb-6">
                        Bee Bloom significantly improves pollination rates in Almonds, Pistachios, and other fruit crops. By leveraging a targeted blend of plant-based essential oils and pheromones, we actively draw honeybees to blossoms, ensuring thorough and consistent pollination across your entire orchard.
                    </p>
                    <div class="flex items-center gap-3 text-white">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Improves fruit quality & yield</span>
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
        duration: 1,
        stagger: 0.15,
        ease: "power3.out",
        delay: 0.2
    });
</script>
