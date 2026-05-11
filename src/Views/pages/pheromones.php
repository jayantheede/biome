<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-purple-500 rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[600px] h-[600px] bg-[#0E8028] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-purple-500/30 bg-purple-500/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-purple-400 uppercase">
                Pollinator Science
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                Advanced <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-[#0E8028]">Pheromones</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-6">
                Targeted chemical communication systems to enhance crop management and pollinator activity naturally.
            </p>
        </div>

        <div class="max-w-4xl mx-auto glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element flex flex-col md:flex-row gap-10 items-center shadow-[0_0_50px_rgba(0,0,0,0.5)]">
            <div class="w-full text-center">
                <p class="text-lg text-gray-300 font-light leading-relaxed mb-8">
                    Our proprietary pheromone blends are engineered to replicate the precise signaling mechanisms used by beneficial insects. By integrating these natural cues into agricultural practices, we can effectively guide pollinator behavior, increase visitation rates to flowering crops, and naturally disrupt the mating cycles of destructive pests—all without the need for harmful synthetic chemicals.
                </p>
                <a href="/shop" class="inline-block px-8 py-3 bg-white text-[#030504] font-bold rounded-full hover:bg-purple-400 transition-all text-sm shadow-[0_0_20px_rgba(168,85,247,0.3)]">Explore Pheromone Products</a>
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
