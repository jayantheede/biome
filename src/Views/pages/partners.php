<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-white rounded-full mix-blend-screen filter blur-[200px] opacity-5 animate-blob"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[600px] h-[600px] bg-[#FF6B00] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-white/30 bg-white/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-white uppercase">
                Strategic Alliances
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                Global <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">Partners</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-6">
                Creating solutions to combat climate change alongside industry leaders.
            </p>
        </div>

        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element shadow-[0_0_50px_rgba(0,0,0,0.5)]">
                <div class="w-16 h-16 rounded-full bg-white/10 border border-white/20 flex items-center justify-center text-white mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <h4 class="text-2xl text-white font-bold mb-4">Research Institutions</h4>
                <p class="text-gray-300 font-light leading-relaxed">
                    We collaborate closely with top-tier agricultural universities and research centers to validate our biological formulations through rigorous, independent field trials across diverse climatic zones.
                </p>
            </div>
            <div class="glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element shadow-[0_0_50px_rgba(0,0,0,0.5)]">
                <div class="w-16 h-16 rounded-full bg-[#FF6B00]/10 border border-[#FF6B00]/20 flex items-center justify-center text-[#FF6B00] mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h4 class="text-2xl text-white font-bold mb-4">Distribution Network</h4>
                <p class="text-gray-300 font-light leading-relaxed">
                    Our products reach the fields faster thanks to a robust network of trusted ag-retailers and certified crop advisors who share our vision for a sustainable, regenerative future in agriculture.
                </p>
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
