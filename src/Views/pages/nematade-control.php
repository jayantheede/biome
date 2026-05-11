<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-red-500 rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-red-500/30 bg-red-500/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-red-400 uppercase">
                Pest Management
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                Nematode <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-[#FFA500]">Control</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-6">
                Biological defense mechanisms against devastating soil-borne pathogens.
            </p>
        </div>

        <div class="max-w-4xl mx-auto glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element shadow-[0_0_50px_rgba(0,0,0,0.5)]">
            <div class="text-center">
                <div class="w-20 h-20 mx-auto rounded-full bg-red-500/10 border border-red-500/20 flex items-center justify-center text-red-400 mb-8">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <h4 class="text-2xl text-white font-bold mb-4">Targeted Root Protection</h4>
                <p class="text-gray-300 font-light leading-relaxed mb-8">
                    Plant-parasitic nematodes account for billions of dollars in crop losses annually. Our biological nematode control solutions utilize naturally occurring predatory fungi and beneficial bacteria to suppress nematode populations. This safe, eco-friendly approach breaks the pest lifecycle in the soil without leaving toxic residues, restoring balance to the root microbiome and enabling crops to achieve their full genetic potential.
                </p>
                <a href="/shop" class="inline-block px-8 py-3 bg-white text-[#030504] font-bold rounded-full hover:bg-red-400 transition-all text-sm shadow-[0_0_20px_rgba(239,68,68,0.3)]">View Control Products</a>
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
