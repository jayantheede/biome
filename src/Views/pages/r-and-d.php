<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-[#0E8028] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-[#FF6B00]/30 bg-[#FF6B00]/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-[#FF6B00] uppercase">
                Our Journey
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                Research & <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0E8028] to-[#FF6B00]">Development</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed">
                The pipeline that powers the biological revolution.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <div class="glass-panel p-10 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element">
                <div class="w-14 h-14 rounded-full bg-[#0E8028]/10 border border-[#0E8028]/20 flex items-center justify-center mb-6 text-[#0E8028]">
                    <span class="text-xl font-bold">1</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">High Throughput Screening</h3>
                <p class="text-gray-400 font-light">for product concepts.</p>
            </div>

            <div class="glass-panel p-10 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element">
                <div class="w-14 h-14 rounded-full bg-[#FF6B00]/10 border border-[#FF6B00]/20 flex items-center justify-center mb-6 text-[#FF6B00]">
                    <span class="text-xl font-bold">2</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Automated in-planta</h3>
                <p class="text-gray-400 font-light">phenotype assessment.</p>
            </div>

            <div class="glass-panel p-10 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element">
                <div class="w-14 h-14 rounded-full bg-gold/10 border border-gold/20 flex items-center justify-center mb-6 text-gold">
                    <span class="text-xl font-bold">3</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Extensive Field Trials</h3>
                <p class="text-gray-400 font-light">program for validation.</p>
            </div>

            <div class="glass-panel p-10 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element">
                <div class="w-14 h-14 rounded-full bg-white/10 border border-white/20 flex items-center justify-center mb-6 text-white">
                    <span class="text-xl font-bold">4</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Regulatory & Market</h3>
                <p class="text-gray-400 font-light">Tailored development.</p>
            </div>

            <div class="glass-panel p-10 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element lg:col-span-2">
                <div class="absolute inset-0 bg-gradient-to-r from-[#FF6B00]/10 to-[#0E8028]/10 z-0"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-full bg-[#FF6B00]/10 border border-[#FF6B00]/20 flex items-center justify-center mb-6 text-[#FF6B00]">
                        <span class="text-xl font-bold">5</span>
                    </div>
                    <h3 class="text-3xl font-display font-bold text-white mb-4">Product Launch</h3>
                    <p class="text-gray-400 font-light text-lg">Bringing the biological revolution to the market.</p>
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