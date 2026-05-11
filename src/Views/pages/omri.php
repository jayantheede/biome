<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-green-500 rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-green-500/30 bg-green-500/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-green-400 uppercase">
                Organic Certification
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                OMRI <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-[#FF6B00]">Approved</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-6">
                Certified inputs for organic production and sustainable farming.
            </p>
        </div>

        <div class="max-w-4xl mx-auto glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element shadow-[0_0_50px_rgba(0,0,0,0.5)] flex flex-col md:flex-row gap-10 items-center">
            <div class="w-full md:w-1/3 flex justify-center">
                <div class="w-32 h-32 rounded-full bg-green-500/10 border border-green-500/20 flex items-center justify-center text-green-400">
                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>
            </div>
            <div class="w-full md:w-2/3">
                <h4 class="text-2xl text-white font-bold mb-4">Independently Verified</h4>
                <p class="text-gray-300 font-light leading-relaxed mb-6">
                    Products listed as OMRI Approved have undergone rigorous review by the Organic Materials Review Institute. This ensures that our biological inputs meet strict organic standards under the USDA National Organic Program (NOP). When you see the OMRI seal on ReNu-Biome products, you can trust they are 100% compliant for certified organic agriculture.
                </p>
                <a href="/shop" class="inline-block px-6 py-2 border border-green-500 text-green-400 rounded-full hover:bg-green-500 hover:text-[#060B09] transition-all text-sm font-bold">View Organic Products</a>
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
