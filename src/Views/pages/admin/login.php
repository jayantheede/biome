<div class="min-h-screen flex items-center justify-center relative overflow-hidden bg-black">
    <!-- Animated background specific to login -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-eco-green rounded-full mix-blend-multiply filter blur-[200px] opacity-20 animate-pulse"></div>
    </div>

    <div class="w-full max-w-md relative z-10 p-8">
        <div class="text-center mb-10">
            <div class="flex justify-center mb-6">
                <span class="w-12 h-12 rounded-full bg-eco-green shadow-[0_0_30px_#00ff66]"></span>
            </div>
            <h1 class="text-3xl font-display font-bold text-white tracking-tight">System Login</h1>
            <p class="text-gray-400 mt-2">Renu Biome Core OS</p>
        </div>

        <form class="space-y-6 bg-white/5 border border-white/10 p-8 rounded-2xl backdrop-blur-xl shadow-2xl">
            <div>
                <label class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                <input type="email" value="admin@renu-biome.com" class="w-full bg-black/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-eco-green focus:ring-1 focus:ring-eco-green transition-all" required>
            </div>
            
            <div>
                <div class="flex justify-between items-center mb-2">
                    <label class="block text-sm font-medium text-gray-300">Password</label>
                    <a href="#" class="text-xs text-eco-green hover:underline">Forgot password?</a>
                </div>
                <input type="password" value="password" class="w-full bg-black/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-eco-green focus:ring-1 focus:ring-eco-green transition-all" required>
            </div>

            <div class="flex items-center gap-2 mt-4">
                <input type="checkbox" id="remember" class="accent-eco-green bg-black border-white/10">
                <label for="remember" class="text-sm text-gray-400 cursor-pointer">Remember device</label>
            </div>

            <button type="submit" id="authSubmitBtn" class="w-full block text-center mt-6 bg-eco-green text-black font-bold py-3 rounded-lg hover:shadow-[0_0_20px_rgba(0,255,102,0.4)] transition-all duration-300">
                Authenticate
            </button>
            
            <div class="mt-6 flex justify-center space-x-4">
                <button type="button" class="px-4 py-2 text-xs border border-white/10 rounded text-gray-400 hover:text-white hover:border-white/30 transition-colors">Use SSO</button>
                <button type="button" class="px-4 py-2 text-xs border border-white/10 rounded text-gray-400 hover:text-white hover:border-white/30 transition-colors">OTP Login</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const emailInput = form.querySelector('input[type="email"]');
    const passwordInput = form.querySelector('input[type="password"]');
    const authBtn = document.getElementById('authSubmitBtn');
    
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const email = emailInput.value;
        const password = passwordInput.value;
        
        authBtn.textContent = 'Authenticating...';
        authBtn.classList.add('opacity-50', 'cursor-not-allowed');
        
        try {
            const res = await fetch('/api/auth/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ email, password })
            });
            
            const data = await res.json();
            
            if (res.ok && data.status === 'success') {
                authBtn.textContent = 'Success! Redirecting...';
                authBtn.classList.remove('opacity-50');
                authBtn.classList.add('bg-[#FF6B00]');
                
                setTimeout(() => {
                    window.location.href = data.redirect;
                }, 500);
            } else {
                alert(data.message || 'Authentication failed');
                authBtn.textContent = 'Authenticate';
                authBtn.classList.remove('opacity-50', 'cursor-not-allowed');
            }
        } catch (error) {
            alert('An error occurred during authentication.');
            authBtn.textContent = 'Authenticate';
            authBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }
    });
});
</script>
