<section class="min-h-screen pt-32 pb-20 relative overflow-hidden bg-[#060B09]">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-[#FF6B00] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-pulse"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 hero-element">
            <div>
                <div class="inline-block px-5 py-2 rounded-full border border-[#FF6B00]/30 bg-[#FF6B00]/5 backdrop-blur-md text-xs font-semibold tracking-[0.2em] mb-6 text-[#FF6B00] uppercase">
                    Direct To Farm
                </div>
                <h1 class="text-5xl md:text-7xl font-display font-bold text-white drop-shadow-2xl">
                    Biological <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF6B00] to-[#0E8028]">Shop</span>
                </h1>
            </div>
            <div class="mt-6 md:mt-0 text-gray-400 font-light flex items-center gap-2">
                <svg class="w-5 h-5 text-[#FF6B00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Approved in 15+ States
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            
            <!-- Biome Care -->
            <div class="glass-panel rounded-[30px] border border-white/5 hover:border-[#0E8028]/30 transition-all duration-500 group flex flex-col overflow-hidden shop-card" data-id="bc-01" data-name="Biome Care" data-price="249.00" data-image="https://renu-biome.com/cdn/shop/files/biome_care.png?v=1777261439">
                <div class="h-64 bg-gradient-to-br from-white to-gray-200 relative flex justify-center items-center p-8 border-b border-white/10 overflow-hidden shadow-inner">
                    <div class="absolute inset-0 bg-[#0E8028] filter blur-[60px] opacity-0 group-hover:opacity-10 transition-opacity duration-700 rounded-full"></div>
                    <img src="https://renu-biome.com/cdn/shop/files/biome_care.png?v=1777261439" alt="Biome Care" class="h-full object-contain relative z-10 group-hover:scale-110 transition-transform duration-700 drop-shadow-2xl">
                    <span class="absolute top-4 left-4 px-3 py-1 bg-[#0E8028]/10 border border-[#0E8028]/20 text-[#0E8028] rounded-full text-[10px] font-bold uppercase tracking-widest z-20">Soil Health</span>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-2xl font-display font-bold text-white mb-2">Biome Care</h3>
                    <p class="text-gray-400 font-light text-sm mb-4">Improves soil health, microbiology, water retention, and nutrient availability.</p>
                    <div class="space-y-2 mb-6 flex-1 text-xs text-gray-400">
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Application Rate:</span><span class="text-white font-medium text-right">1-2 qts / Acre</span>
                        </div>
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Key Benefit:</span><span class="text-white font-medium text-right">Improves Soil Microbiology</span>
                        </div>
                        <div class="flex justify-between pb-2">
                            <span class="text-white/50">Ingredients:</span><span class="text-white font-medium text-right">Soy Protein, K-Acetate, Kelp</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-2xl font-bold text-white">$249<span class="text-sm text-gray-500 font-light">.00</span></div>
                        <div class="text-xs text-gray-500">2.5 Gallon Jug</div>
                    </div>
                    <div class="flex gap-3">
                        <div class="relative w-20">
                            <select class="w-full h-full bg-[#030504]/50 border border-white/10 rounded-xl px-3 py-3 text-white appearance-none text-center outline-none focus:border-[#0E8028] qty-select">
                                <option value="1">1</option><option value="2">2</option><option value="5">5</option>
                            </select>
                        </div>
                        <button onclick="addToCart(this)" class="flex-1 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-bold hover:bg-[#0E8028] hover:text-[#060B09] hover:border-[#0E8028] transition-all flex items-center justify-center gap-2 group/btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Sun Skreen -->
            <div class="glass-panel rounded-[30px] border border-white/5 hover:border-yellow-500/30 transition-all duration-500 group flex flex-col overflow-hidden shop-card" data-id="ss-02" data-name="Sun Skreen" data-price="199.00" data-image="https://renu-biome.com/cdn/shop/files/sunskreen_af5b6f24-d7f3-4a2e-acc5-8daff9c7fa49.png?v=1776603808">
                <div class="h-64 bg-gradient-to-br from-white to-gray-200 relative flex justify-center items-center p-8 border-b border-white/10 overflow-hidden shadow-inner">
                    <div class="absolute inset-0 bg-yellow-500 filter blur-[60px] opacity-0 group-hover:opacity-10 transition-opacity duration-700 rounded-full"></div>
                    <img src="https://renu-biome.com/cdn/shop/files/sunskreen_af5b6f24-d7f3-4a2e-acc5-8daff9c7fa49.png?v=1776603808" alt="Sun Skreen" class="h-full object-contain relative z-10 group-hover:scale-110 transition-transform duration-700 drop-shadow-2xl">
                    <span class="absolute top-4 left-4 px-3 py-1 bg-yellow-600/10 border border-yellow-600/20 text-yellow-600 rounded-full text-[10px] font-bold uppercase tracking-widest z-20">OMRI Listed</span>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-2xl font-display font-bold text-white mb-2">Sun Skreen</h3>
                    <p class="text-gray-400 font-light text-sm mb-4">Organic flowable micronized dispersion of calcium carbonate. Protects from sunburn.</p>
                    <div class="space-y-2 mb-6 flex-1 text-xs text-gray-400">
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Application Rate:</span><span class="text-white font-medium text-right">0.5-1 qt / Acre</span>
                        </div>
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Key Benefit:</span><span class="text-white font-medium text-right">Improves Shelf Life & Color</span>
                        </div>
                        <div class="flex justify-between pb-2">
                            <span class="text-white/50">Ingredients:</span><span class="text-white font-medium text-right">Calcium Carbonate (50%)</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-2xl font-bold text-white">$199<span class="text-sm text-gray-500 font-light">.00</span></div>
                        <div class="text-xs text-gray-500">2.5 Gallon Jug</div>
                    </div>
                    <div class="flex gap-3">
                        <div class="relative w-20">
                            <select class="w-full h-full bg-[#030504]/50 border border-white/10 rounded-xl px-3 py-3 text-white appearance-none text-center outline-none focus:border-yellow-500 qty-select">
                                <option value="1">1</option><option value="2">2</option><option value="5">5</option>
                            </select>
                        </div>
                        <button onclick="addToCart(this)" class="flex-1 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-bold hover:bg-yellow-500 hover:text-[#060B09] transition-all">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- K-Rush -->
            <div class="glass-panel rounded-[30px] border border-white/5 hover:border-red-500/30 transition-all duration-500 group flex flex-col overflow-hidden shop-card" data-id="kr-03" data-name="K-Rush" data-price="229.00" data-image="https://renu-biome.com/cdn/shop/files/krush4.png?v=1777261875">
                <div class="h-64 bg-gradient-to-br from-white to-gray-200 relative flex justify-center items-center p-8 border-b border-white/10 overflow-hidden shadow-inner">
                    <div class="absolute inset-0 bg-red-500 filter blur-[60px] opacity-0 group-hover:opacity-10 transition-opacity duration-700 rounded-full"></div>
                    <img src="https://renu-biome.com/cdn/shop/files/krush4.png?v=1777261875" alt="K-Rush" class="h-full object-contain relative z-10 group-hover:scale-110 transition-transform duration-700 drop-shadow-2xl">
                    <span class="absolute top-4 left-4 px-3 py-1 bg-red-500/10 border border-red-500/20 text-red-500 rounded-full text-[10px] font-bold uppercase tracking-widest z-20">Growth Amplified</span>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-2xl font-display font-bold text-white mb-2">K-Rush</h3>
                    <p class="text-gray-400 font-light text-sm mb-4">Highly soluble potassium for maximum plant intake, improving brix and frost resistance.</p>
                    <div class="space-y-2 mb-6 flex-1 text-xs text-gray-400">
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Application Rate:</span><span class="text-white font-medium text-right">1-2 qts / Acre</span>
                        </div>
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Key Benefit:</span><span class="text-white font-medium text-right">Improves Brix & Fruit Color</span>
                        </div>
                        <div class="flex justify-between pb-2">
                            <span class="text-white/50">Ingredients:</span><span class="text-white font-medium text-right">Soluble Potash (K2O) 24%</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-2xl font-bold text-white">$229<span class="text-sm text-gray-500 font-light">.00</span></div>
                        <div class="text-xs text-gray-500">2.5 Gallon Jug</div>
                    </div>
                    <div class="flex gap-3">
                        <div class="relative w-20">
                            <select class="w-full h-full bg-[#030504]/50 border border-white/10 rounded-xl px-3 py-3 text-white appearance-none text-center outline-none focus:border-red-500 qty-select">
                                <option value="1">1</option><option value="2">2</option><option value="5">5</option>
                            </select>
                        </div>
                        <button onclick="addToCart(this)" class="flex-1 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-bold hover:bg-red-500 hover:text-[#060B09] transition-all">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Nitrogen Stabilizer -->
            <div class="glass-panel rounded-[30px] border border-white/5 hover:border-[#FF6B00]/30 transition-all duration-500 group flex flex-col overflow-hidden shop-card" data-id="ns-04" data-name="Nitrogen Stabilizer" data-price="289.00" data-image="https://renu-biome.com/cdn/shop/files/n_care.png?v=1777261802">
                <div class="h-64 bg-gradient-to-br from-white to-gray-200 relative flex justify-center items-center p-8 border-b border-white/10 overflow-hidden shadow-inner">
                    <div class="absolute inset-0 bg-[#FF6B00] filter blur-[60px] opacity-0 group-hover:opacity-10 transition-opacity duration-700 rounded-full"></div>
                    <img src="https://renu-biome.com/cdn/shop/files/n_care.png?v=1777261802" alt="Nitrogen Stabilizer" class="h-full object-contain relative z-10 group-hover:scale-110 transition-transform duration-700 drop-shadow-2xl">
                    <span class="absolute top-4 left-4 px-3 py-1 bg-[#FF6B00]/10 border border-[#FF6B00]/20 text-[#FF6B00] rounded-full text-[10px] font-bold uppercase tracking-widest z-20">Nitrification Inhibitor</span>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-2xl font-display font-bold text-white mb-2">Nitrogen Stabilizer</h3>
                    <p class="text-gray-400 font-light text-sm mb-4">Excellent nitrification inhibitor, reduces greenhouse gas emissions, improves soil moisture.</p>
                    <div class="space-y-2 mb-6 flex-1 text-xs text-gray-400">
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Application Rate:</span><span class="text-white font-medium text-right">1-2 qts / Acre</span>
                        </div>
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Key Benefit:</span><span class="text-white font-medium text-right">Increases Nutrient Availability</span>
                        </div>
                        <div class="flex justify-between pb-2">
                            <span class="text-white/50">Ingredients:</span><span class="text-white font-medium text-right">Nitrogen 23%, Neem, Karanja</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-2xl font-bold text-white">$289<span class="text-sm text-gray-500 font-light">.00</span></div>
                        <div class="text-xs text-gray-500">2.5 Gallon Jug</div>
                    </div>
                    <div class="flex gap-3">
                        <div class="relative w-20">
                            <select class="w-full h-full bg-[#030504]/50 border border-white/10 rounded-xl px-3 py-3 text-white appearance-none text-center outline-none focus:border-[#FF6B00] qty-select">
                                <option value="1">1</option><option value="2">2</option><option value="5">5</option>
                            </select>
                        </div>
                        <button onclick="addToCart(this)" class="flex-1 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-bold hover:bg-[#FF6B00] hover:text-[#060B09] transition-all">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Neem Oil -->
            <div class="glass-panel rounded-[30px] border border-white/5 hover:border-green-600/30 transition-all duration-500 group flex flex-col overflow-hidden shop-card" data-id="no-05" data-name="Neem Oil" data-price="159.00" data-image="https://renu-biome.com/cdn/shop/files/siri_neem.png?v=1744905929">
                <div class="h-64 bg-gradient-to-br from-white to-gray-200 relative flex justify-center items-center p-8 border-b border-white/10 overflow-hidden shadow-inner">
                    <div class="absolute inset-0 bg-green-600 filter blur-[60px] opacity-0 group-hover:opacity-10 transition-opacity duration-700 rounded-full"></div>
                    <img src="https://renu-biome.com/cdn/shop/files/siri_neem.png?v=1744905929" alt="Neem Oil" class="h-full object-contain relative z-10 group-hover:scale-110 transition-transform duration-700 drop-shadow-2xl">
                    <span class="absolute top-4 left-4 px-3 py-1 bg-green-600/10 border border-green-600/20 text-green-600 rounded-full text-[10px] font-bold uppercase tracking-widest z-20">EPA Listed</span>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-2xl font-display font-bold text-white mb-2">100% Neem Oil</h3>
                    <p class="text-gray-400 font-light text-sm mb-4">Highly compatible & water soluble Fungicide, Miticide, Insecticide, and Nematicide.</p>
                    <div class="space-y-2 mb-6 flex-1 text-xs text-gray-400">
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Application Rate:</span><span class="text-white font-medium text-right">0.5-1 qt / Acre</span>
                        </div>
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Key Benefit:</span><span class="text-white font-medium text-right">All natural, no additives</span>
                        </div>
                        <div class="flex justify-between pb-2">
                            <span class="text-white/50">Ingredients:</span><span class="text-white font-medium text-right">Cold Pressed Neem Oil</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-2xl font-bold text-white">$159<span class="text-sm text-gray-500 font-light">.00</span></div>
                        <div class="text-xs text-gray-500">1 Gallon Jug</div>
                    </div>
                    <div class="flex gap-3">
                        <div class="relative w-20">
                            <select class="w-full h-full bg-[#030504]/50 border border-white/10 rounded-xl px-3 py-3 text-white appearance-none text-center outline-none focus:border-green-600 qty-select">
                                <option value="1">1</option><option value="2">2</option><option value="5">5</option>
                            </select>
                        </div>
                        <button onclick="addToCart(this)" class="flex-1 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-bold hover:bg-green-600 hover:text-[#060B09] transition-all">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Bee Bloom -->
            <div class="glass-panel rounded-[30px] border border-white/5 hover:border-gold/30 transition-all duration-500 group flex flex-col overflow-hidden shop-card" data-id="bb-06" data-name="Bee Bloom" data-price="189.00" data-image="https://renu-biome.com/cdn/shop/files/Bee_bloom.png?v=1777261333">
                <div class="h-64 bg-gradient-to-br from-white to-gray-200 relative flex justify-center items-center p-8 border-b border-white/10 overflow-hidden shadow-inner">
                    <div class="absolute inset-0 bg-gold filter blur-[60px] opacity-0 group-hover:opacity-10 transition-opacity duration-700 rounded-full"></div>
                    <img src="https://renu-biome.com/cdn/shop/files/Bee_bloom.png?v=1777261333" alt="Bee Bloom" class="h-full object-contain relative z-10 group-hover:scale-110 transition-transform duration-700 drop-shadow-2xl">
                    <span class="absolute top-4 left-4 px-3 py-1 bg-[#FFB000]/10 border border-[#FFB000]/20 text-[#FFB000] rounded-full text-[10px] font-bold uppercase tracking-widest z-20">Pheromones</span>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-2xl font-display font-bold text-white mb-2">Bee Bloom</h3>
                    <p class="text-gray-400 font-light text-sm mb-4">Natural honeybee attractant with plant-based essential oils & pheromones.</p>
                    <div class="space-y-2 mb-6 flex-1 text-xs text-gray-400">
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Application Rate:</span><span class="text-white font-medium text-right">8 oz / Acre (At bloom)</span>
                        </div>
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Key Benefit:</span><span class="text-white font-medium text-right">Improves Pollination</span>
                        </div>
                        <div class="flex justify-between pb-2">
                            <span class="text-white/50">Ingredients:</span><span class="text-white font-medium text-right">Vartol, Lemon Grass, Spearmint</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-2xl font-bold text-white">$189<span class="text-sm text-gray-500 font-light">.00</span></div>
                        <div class="text-xs text-gray-500">1 Gallon Jug</div>
                    </div>
                    <div class="flex gap-3">
                        <div class="relative w-20">
                            <select class="w-full h-full bg-[#030504]/50 border border-white/10 rounded-xl px-3 py-3 text-white appearance-none text-center outline-none focus:border-gold qty-select">
                                <option value="1">1</option><option value="2">2</option><option value="5">5</option>
                            </select>
                        </div>
                        <button onclick="addToCart(this)" class="flex-1 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-bold hover:bg-gold hover:text-[#060B09] transition-all">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Karanja Oil -->
            <div class="glass-panel rounded-[30px] border border-white/5 hover:border-[#8B5E34]/30 transition-all duration-500 group flex flex-col overflow-hidden shop-card" data-id="ko-07" data-name="Karanja Oil" data-price="210.00" data-image="https://renu-biome.com/cdn/shop/files/karanja.png?v=1744905965">
                <div class="h-64 bg-gradient-to-br from-white to-gray-200 relative flex justify-center items-center p-8 border-b border-white/10 overflow-hidden shadow-inner">
                    <div class="absolute inset-0 bg-[#8B5E34] filter blur-[60px] opacity-0 group-hover:opacity-10 transition-opacity duration-700 rounded-full"></div>
                    <img src="https://renu-biome.com/cdn/shop/files/karanja.png?v=1744905965" alt="Karanja Oil" class="h-full object-cover relative z-10 group-hover:scale-110 transition-transform duration-700 drop-shadow-2xl rounded-2xl">
                    <span class="absolute top-4 left-4 px-3 py-1 bg-[#8B5E34]/10 border border-[#8B5E34]/20 text-[#8B5E34] rounded-full text-[10px] font-bold uppercase tracking-widest z-20">Soil Synergist</span>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-2xl font-display font-bold text-white mb-2">Karanja Oil</h3>
                    <p class="text-gray-400 font-light text-sm mb-4">Soil nutrient synergist that improves organic matter and aids in erosion control.</p>
                    <div class="space-y-2 mb-6 flex-1 text-xs text-gray-400">
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Application Rate:</span><span class="text-white font-medium text-right">1-2 qts / Acre</span>
                        </div>
                        <div class="flex justify-between border-b border-white/5 pb-2">
                            <span class="text-white/50">Key Benefit:</span><span class="text-white font-medium text-right">Erosion Control & Nutrients</span>
                        </div>
                        <div class="flex justify-between pb-2">
                            <span class="text-white/50">Ingredients:</span><span class="text-white font-medium text-right">80% Karanja Oil, Soap Nut</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-2xl font-bold text-white">$210<span class="text-sm text-gray-500 font-light">.00</span></div>
                        <div class="text-xs text-gray-500">10 lb Bucket</div>
                    </div>
                    <div class="flex gap-3">
                        <div class="relative w-20">
                            <select class="w-full h-full bg-[#030504]/50 border border-white/10 rounded-xl px-3 py-3 text-white appearance-none text-center outline-none focus:border-[#8B5E34] qty-select">
                                <option value="1">1</option><option value="2">2</option><option value="5">5</option>
                            </select>
                        </div>
                        <button onclick="addToCart(this)" class="flex-1 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-bold hover:bg-[#8B5E34] hover:text-[#060B09] transition-all">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Cart Notification Toast -->
<div id="cartToast" class="fixed bottom-10 right-10 glass-panel border border-[#FF6B00]/50 p-4 rounded-xl shadow-[0_0_30px_rgba(0,255,163,0.2)] flex items-center gap-4 transform translate-y-20 opacity-0 pointer-events-none transition-all duration-500 z-50">
    <div class="w-10 h-10 rounded-full bg-[#FF6B00]/20 flex items-center justify-center text-[#FF6B00]">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
    </div>
    <div>
        <h4 class="text-white font-bold text-sm">Added to Cart</h4>
        <p class="text-gray-400 text-xs" id="toastMessage">Green Nitrogen (2x)</p>
    </div>
    <a href="/cart" class="ml-4 px-4 py-2 bg-[#FF6B00] text-[#060B09] text-xs font-bold rounded-lg hover:bg-white transition-colors">View</a>
</div>

<script>


    function addToCart(btn) {
        const card = btn.closest('.shop-card');
        const id = card.dataset.id;
        const name = card.dataset.name;
        const price = parseFloat(card.dataset.price);
        const image = card.dataset.image;
        const qty = parseInt(card.querySelector('.qty-select').value);

        let cart = JSON.parse(localStorage.getItem('rb_cart')) || [];
        
        const existing = cart.find(item => item.id === id);
        if(existing) {
            existing.qty += qty;
        } else {
            cart.push({ id, name, price, image, qty });
        }
        
        localStorage.setItem('rb_cart', JSON.stringify(cart));
        window.dispatchEvent(new Event('cartUpdated'));

        // Show Toast
        const toast = document.getElementById('cartToast');
        document.getElementById('toastMessage').innerText = `${name} (${qty}x)`;
        toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
        
        // Button animation
        const originalText = btn.innerHTML;
        btn.innerHTML = `<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Added`;
        btn.classList.add('bg-[#FF6B00]', 'text-[#060B09]');
        
        setTimeout(() => {
            toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
            btn.innerHTML = originalText;
            btn.classList.remove('bg-[#FF6B00]', 'text-[#060B09]');
        }, 3000);
    }
</script>
