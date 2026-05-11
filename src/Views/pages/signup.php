<section class="min-h-screen flex items-center justify-center pt-20 bg-[#060B09] relative overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-[#0E8028] rounded-full mix-blend-screen filter blur-[200px] opacity-10"></div>
    </div>

    <div class="w-full max-w-md relative z-10 p-6">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-display font-bold text-white mb-2">Create your <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF6B00] to-[#0E8028]">BioPlatform</span></h2>
            <p class="text-gray-400 font-light">Start your 14-day free trial. No credit card required.</p>
        </div>

        <div class="glass-panel p-8 rounded-2xl border border-white/10">
            <form action="/api/saas/register" method="POST" class="space-y-5">
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-widest mb-2">Company Name</label>
                    <input type="text" name="company" required class="w-full bg-[#030504] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-[#FF6B00] transition-colors" placeholder="Acme Biotech">
                </div>
                
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-widest mb-2">Subdomain</label>
                    <div class="flex items-center">
                        <input type="text" name="subdomain" required class="w-full bg-[#030504] border border-white/10 rounded-l-lg px-4 py-3 text-white focus:outline-none focus:border-[#FF6B00] transition-colors" placeholder="acme">
                        <span class="bg-white/5 border border-l-0 border-white/10 rounded-r-lg px-4 py-3 text-gray-500 text-sm">.bioplatform.io</span>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-widest mb-2">Admin Email</label>
                    <input type="email" name="email" required class="w-full bg-[#030504] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-[#FF6B00] transition-colors" placeholder="admin@acme.com">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-widest mb-2">Password</label>
                    <input type="password" name="password" required class="w-full bg-[#030504] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-[#FF6B00] transition-colors" placeholder="••••••••">
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-[#FF6B00] to-[#0E8028] text-[#060B09] font-bold hover:shadow-[0_0_20px_rgba(0,255,163,0.4)] transition-all">Create Tenant Account</button>
                </div>
            </form>
            <p class="text-center text-xs text-gray-500 mt-6">By signing up, you agree to our Terms of Service and Privacy Policy.</p>
        </div>
    </div>
</section>
