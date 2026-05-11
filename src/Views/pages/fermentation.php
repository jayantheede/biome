<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-[#0E8028] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[600px] h-[600px] bg-[#FF6B00] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-[#0E8028]/30 bg-[#0E8028]/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-[#0E8028] uppercase">
                Biologicals
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                Advanced <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0E8028] to-[#FF6B00]">Fermentation</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-6">
                Cultivating the next generation of biological crop solutions.
            </p>
        </div>

        <div class="max-w-4xl mx-auto glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element shadow-[0_0_50px_rgba(0,0,0,0.5)]">
            <div class="text-center">
                <div class="w-20 h-20 mx-auto rounded-full bg-[#0E8028]/10 border border-[#0E8028]/20 flex items-center justify-center text-[#0E8028] mb-8">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h4 class="text-2xl text-white font-bold mb-4">Precision Microbiome Engineering</h4>
                <p class="text-gray-300 font-light leading-relaxed mb-8">
                    Our state-of-the-art fermentation facilities produce high-density, pure cultures of beneficial microbes tailored for agricultural application. By precisely controlling environmental parameters, we maximize the viability and efficacy of these biologicals. This ensures that when applied to the field, our microbes establish rapidly, competitively exclude pathogens, and actively secrete metabolites that stimulate plant growth and resilience.
                </p>
                <a href="/shop" class="inline-block px-8 py-3 bg-white text-[#030504] font-bold rounded-full hover:bg-[#0E8028] transition-all text-sm shadow-[0_0_20px_rgba(0,240,255,0.3)]">Explore Biologicals</a>
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
