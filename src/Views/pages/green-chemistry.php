<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-[#FF6B00] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[600px] h-[600px] bg-[#0E8028] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-[#FF6B00]/30 bg-[#FF6B00]/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-[#FF6B00] uppercase">
                Field Solutions
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                Green <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF6B00] to-[#0E8028]">Chemistry</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-6">
                Our field solutions to the most persistent grower challenges: <br/>
                <span class="text-[#FF6B00] font-medium">Drought • Salt • Extreme Heat • Frost</span>
            </p>
            <p class="text-gray-500 max-w-2xl mx-auto">
                Avoiding wherever possible or minimizing the use of auxiliary substances (e.g. solvents, separation agents) in our formulations.
            </p>
        </div>

        <div class="space-y-12 max-w-5xl mx-auto">
            
            <!-- N-CARE -->
            <div class="glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element flex flex-col md:flex-row gap-10 items-center">
                <div class="w-full md:w-1/3 text-center">
                    <h3 class="text-4xl font-display font-bold text-white mb-2">N-CARE</h3>
                    <div class="text-[#FF6B00] text-sm font-bold tracking-widest uppercase mb-4">Nitrogen Protection</div>
                    <a href="/shop" class="inline-block px-6 py-2 border border-[#FF6B00] text-[#FF6B00] rounded-full hover:bg-[#FF6B00] hover:text-[#060B09] transition-all text-sm font-bold">Explore More</a>
                </div>
                <div class="w-full md:w-2/3">
                    <h4 class="text-xl text-white font-medium mb-4">Saves 30% Nitrogen losses from ammonia volatilization, denitrification & leaching</h4>
                    <p class="text-gray-400 font-light leading-relaxed text-sm md:text-base">
                        With the active ingredient from N-CARE, you get the longest-lasting protection against ammonia volatilization over a wider range of soil conditions. N-CARE gets to work faster and provides a longer duration of protection from nitrogen loss through volatilization. To top it all off, N-CARE is low odor and reduces total labor demands with more efficient handling and lower treatment rates.
                    </p>
                </div>
            </div>

            <!-- K-RUSH -->
            <div class="glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element flex flex-col md:flex-row gap-10 items-center">
                <div class="w-full md:w-1/3 text-center md:order-2">
                    <h3 class="text-4xl font-display font-bold text-white mb-2">K-RUSH</h3>
                    <div class="text-[#0E8028] text-sm font-bold tracking-widest uppercase mb-4">Root Development</div>
                    <a href="/shop" class="inline-block px-6 py-2 border border-[#0E8028] text-[#0E8028] rounded-full hover:bg-[#0E8028] hover:text-[#060B09] transition-all text-sm font-bold">Explore More</a>
                </div>
                <div class="w-full md:w-2/3 md:order-1">
                    <h4 class="text-xl text-white font-medium mb-4">Improves fruit coloring, root development and enhanced frost protection</h4>
                    <p class="text-gray-400 font-light leading-relaxed text-sm md:text-base">
                        K-RUSH Helps plants to stimulate early growth, and increase protein production. Activates enzyme and hormone systems within the plant. Improves root development and enhanced abiotic stress tolerance; leading to better fruit color & quality. Superior foliar uptake and translocation. Natural Organic acid. It is compatible with most fertilizer combinations. Chlorine-free & has a very low salt index.
                    </p>
                </div>
            </div>

            <!-- SUN SKREEN -->
            <div class="glass-panel p-10 md:p-14 rounded-[30px] border border-white/5 relative overflow-hidden group hero-element flex flex-col md:flex-row gap-10 items-center">
                <div class="w-full md:w-1/3 text-center">
                    <h3 class="text-4xl font-display font-bold text-white mb-2">SUN SKREEN</h3>
                    <div class="text-gold text-sm font-bold tracking-widest uppercase mb-4">Heat Protection</div>
                    <a href="/shop" class="inline-block px-6 py-2 border border-gold text-gold rounded-full hover:bg-gold hover:text-[#060B09] transition-all text-sm font-bold">Explore More</a>
                </div>
                <div class="w-full md:w-2/3">
                    <h4 class="text-xl text-white font-medium mb-4">Protection from heat stress</h4>
                    <p class="text-gray-400 font-light leading-relaxed text-sm md:text-base">
                        SUN SKREEN is a flowable micronized dispersion of calcium carbonate. It's designed for foliar application and is recommended for use as a protectant against sunburn and heat stress and can also be used to increase chilling hours in crops. This product can be applied to all crops that are not calcium sensitive. Sun skreen can be used to improve crop photosynthesis by refracting and diffusing light, which makes it softer and more available to chloroplasts. It also can increase photosynthetic potential and efficiency while reducing the intensity of light to prevent sunburn and heating.
                    </p>
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
