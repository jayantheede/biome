<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-orange-500 rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-orange-500/30 bg-orange-500/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-orange-400 uppercase">
                Fungal Networks
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                Advanced <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-400">Mycorrhizae</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-6">
                Expand root systems exponentially to maximize nutrient and water uptake.
            </p>
        </div>

        <div class="max-w-4xl mx-auto glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element shadow-[0_0_50px_rgba(0,0,0,0.5)]">
            <div class="text-center">
                <div class="w-20 h-20 mx-auto rounded-full bg-orange-500/10 border border-orange-500/20 flex items-center justify-center text-orange-400 mb-8">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h4 class="text-2xl text-white font-bold mb-4">Symbiotic Root Extension</h4>
                <p class="text-gray-300 font-light leading-relaxed mb-8">
                    Our Mycorrhizal fungi formulations establish a powerful symbiotic relationship with plant roots. By colonizing the root system and extending microscopic hyphae far beyond the natural root zone, they effectively increase the absorptive surface area by up to 50 times. This translates to unparalleled drought resistance, improved soil structure, and highly efficient phosphorus and micronutrient acquisition.
                </p>
                <a href="/shop" class="inline-block px-8 py-3 bg-white text-[#030504] font-bold rounded-full hover:bg-orange-400 transition-all text-sm shadow-[0_0_20px_rgba(249,115,22,0.3)]">Explore Fungal Solutions</a>
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
