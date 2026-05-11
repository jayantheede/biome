<div class="px-6 py-8">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-display font-bold text-white mb-1">BioPlatform SaaS Admin</h1>
            <p class="text-gray-400 text-sm">Super Admin Overview & Tenant Metrics</p>
        </div>
        <div class="flex items-center gap-4">
            <span class="px-3 py-1 bg-eco-green/10 border border-eco-green/20 text-eco-green rounded-full text-xs font-semibold flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-eco-green animate-pulse"></span>
                System Healthy
            </span>
            <button class="bg-gradient-to-r from-eco-green to-eco-teal text-eco-darker px-4 py-2 rounded-lg font-bold hover:shadow-[0_0_15px_rgba(0,255,163,0.4)] transition-all text-sm">
                Provision New Tenant
            </button>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <!-- Stat Card 1 -->
        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:border-eco-green/50 transition-colors">
            <div class="absolute top-0 right-0 w-24 h-24 bg-eco-green/10 rounded-full filter blur-[20px] group-hover:bg-eco-green/20 transition-colors"></div>
            <div class="flex justify-between items-start mb-4">
                <div class="text-gray-400 text-sm font-medium uppercase tracking-wider">Active Tenants</div>
                <div class="p-2 bg-white/10 rounded-lg text-white">
                    <svg class="w-5 h-5 text-eco-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
            </div>
            <div class="text-3xl font-display font-bold mb-1">1,248</div>
            <div class="text-sm text-eco-green flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                +12% this month
            </div>
        </div>
        
        <!-- Stat Card 2 -->
        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:border-eco-teal/50 transition-colors">
            <div class="absolute top-0 right-0 w-24 h-24 bg-eco-teal/10 rounded-full filter blur-[20px] group-hover:bg-eco-teal/20 transition-colors"></div>
            <div class="flex justify-between items-start mb-4">
                <div class="text-gray-400 text-sm font-medium uppercase tracking-wider">MRR</div>
                <div class="p-2 bg-white/10 rounded-lg text-white">
                    <svg class="w-5 h-5 text-eco-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
            <div class="text-3xl font-display font-bold mb-1">$84,500</div>
            <div class="text-sm text-eco-green flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                +8.4% growth
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:border-gold/50 transition-colors">
            <div class="absolute top-0 right-0 w-24 h-24 bg-gold/10 rounded-full filter blur-[20px] group-hover:bg-gold/20 transition-colors"></div>
            <div class="flex justify-between items-start mb-4">
                <div class="text-gray-400 text-sm font-medium uppercase tracking-wider">Enterprise Tiers</div>
                <div class="p-2 bg-white/10 rounded-lg text-white">
                    <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
            </div>
            <div class="text-3xl font-display font-bold mb-1">42</div>
            <div class="text-sm text-gold flex items-center gap-1">
                3 upgrades this week
            </div>
        </div>

        <!-- Stat Card 4 -->
        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:border-purple-500/50 transition-colors">
            <div class="absolute top-0 right-0 w-24 h-24 bg-purple-500/10 rounded-full filter blur-[20px] group-hover:bg-purple-500/20 transition-colors"></div>
            <div class="flex justify-between items-start mb-4">
                <div class="text-gray-400 text-sm font-medium uppercase tracking-wider">Total AI Requests</div>
                <div class="p-2 bg-white/10 rounded-lg text-white">
                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
            </div>
            <div class="text-3xl font-display font-bold mb-1">4.2M</div>
            <div class="text-sm text-gray-400 flex items-center gap-1">
                API Gateway Load
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Chart Area -->
        <div class="lg:col-span-2 bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-white text-lg">Tenant Growth</h3>
                <select class="bg-[#030504] border border-white/10 rounded-lg px-3 py-1 text-sm text-gray-400 outline-none">
                    <option>Last 30 Days</option>
                    <option>This Year</option>
                </select>
            </div>
            <div class="h-[300px] w-full border border-dashed border-white/10 rounded-xl flex items-center justify-center text-gray-500">
                [SaaS Chart Visualization Placeholder]
            </div>
        </div>

        <!-- Recent Activity / AI Audit -->
        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md flex flex-col">
            <h3 class="font-bold text-white text-lg mb-6">Recent Tenant Activity</h3>
            
            <div class="space-y-4 flex-1">
                <!-- Activity Item -->
                <div class="flex items-start gap-4">
                    <div class="w-8 h-8 rounded-full bg-eco-green/20 flex items-center justify-center flex-shrink-0">
                        <span class="w-2 h-2 rounded-full bg-eco-green"></span>
                    </div>
                    <div>
                        <p class="text-sm text-white">AgriTech Pro upgraded to <span class="text-gold font-semibold">Enterprise</span></p>
                        <p class="text-xs text-gray-500 mt-1">2 minutes ago</p>
                    </div>
                </div>

                <!-- Activity Item -->
                <div class="flex items-start gap-4">
                    <div class="w-8 h-8 rounded-full bg-eco-teal/20 flex items-center justify-center flex-shrink-0">
                        <span class="w-2 h-2 rounded-full bg-eco-teal"></span>
                    </div>
                    <div>
                        <p class="text-sm text-white">New Tenant Signed Up: <span class="text-eco-green font-semibold">BioGenix</span></p>
                        <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                    </div>
                </div>

                <!-- Activity Item -->
                <div class="flex items-start gap-4">
                    <div class="w-8 h-8 rounded-full bg-purple-500/20 flex items-center justify-center flex-shrink-0">
                        <span class="w-2 h-2 rounded-full bg-purple-500"></span>
                    </div>
                    <div>
                        <p class="text-sm text-white">ReNu-Biome generated 4,500 words via AI Engine</p>
                        <p class="text-xs text-gray-500 mt-1">3 hours ago</p>
                    </div>
                </div>
            </div>
            
            <button class="w-full mt-4 py-2 border border-white/10 rounded-lg text-sm text-gray-400 hover:text-white hover:border-white/30 transition-colors">
                View All Audit Logs
            </button>
        </div>
    </div>
</div>
