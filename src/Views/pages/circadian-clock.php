<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-[#FF6B00] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[600px] h-[600px] bg-[#0E8028] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-blob" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20 hero-element">
            <div class="inline-block px-5 py-2 rounded-full border border-[#FF6B00]/30 bg-[#FF6B00]/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-8 text-[#FF6B00] uppercase">
                Plant Physiology
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-bold mb-6 leading-tight text-white drop-shadow-2xl">
                The Circadian <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF6B00] to-[#0E8028]">Clock</span>
            </h1>
            <p class="text-xl md:text-2xl text-[#FF6B00] max-w-4xl mx-auto font-medium leading-relaxed mb-12">
                Natural ingredients in our products increase stress tolerance by modulating the Krebs cycle and circadian clock.
            </p>
        </div>

        <div class="glass-panel p-12 md:p-20 rounded-[40px] border border-white/10 relative overflow-hidden hero-element shadow-[0_0_50px_rgba(0,0,0,0.5)] max-w-5xl mx-auto">
            <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-bl from-[#FF6B00]/5 to-transparent opacity-50 pointer-events-none"></div>
            
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="w-20 h-20 rounded-full bg-[#FF6B00]/10 border border-[#FF6B00]/20 flex items-center justify-center mb-8 text-[#FF6B00]">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-display font-bold text-white mb-6">Internal Timekeeper</h3>
                    <p class="text-gray-300 font-light leading-relaxed mb-6 text-lg">
                        Plants have an internal biological clock that helps regulate the timing of various natural processes to optimize plant health, growth, development, and resistance to biotic and abiotic stress.
                    </p>
                    <p class="text-gray-400 font-light leading-relaxed text-base">
                        This natural timekeeper consists of a series of interlocking transcriptional feedback loops that take cues from the 24-hour solar cycle, temperatures, and nutrient availability to synchronize a plant's natural rhythms with its surrounding environment.
                    </p>
                </div>
                
                <div class="glass-panel p-8 rounded-[24px] border border-[#FF6B00]/20 bg-[#060B09]/80 text-center">
                    <h4 class="text-xl font-bold text-white mb-6">Output Responses Adjusted</h4>
                    <ul class="space-y-4 text-left text-gray-300 font-light">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Photosynthesis Timing
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Petal and Stomatal Opening
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Leaf Movement
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Flowering
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Cell Cycle Progression
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Hypocotyl Elongation
                        </li>
                    </ul>
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
        stagger: 0.2,
        ease: "power3.out",
        delay: 0.2
    });
</script>
