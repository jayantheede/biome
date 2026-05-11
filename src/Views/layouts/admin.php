<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Admin Dashboard') ?></title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'eco-dark': '#060B09',
                        'eco-green': '#FF6B00',
                        'eco-teal': '#0E8028',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'display': ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS Overrides -->
    <style>
        body { background-color: #040806; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #040806; }
        ::-webkit-scrollbar-thumb { background: rgba(0, 255, 163, 0.2); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(0, 255, 163, 0.5); }
    </style>
    
    <!-- Alpine.js for lightweight UI interactions -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- GSAP for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
</head>
<body class="bg-[#050806] text-white font-sans antialiased overflow-x-hidden selection:bg-eco-green selection:text-black">
    
    <!-- Background Glow -->
    <div class="fixed inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-eco-green rounded-full mix-blend-multiply filter blur-[150px] opacity-10"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-[150px] opacity-10"></div>
    </div>

    <div class="relative z-10 min-h-screen flex">
        <?php if (!str_contains($viewFile, 'login.php')): ?>
        <!-- Sidebar Navigation -->
        <aside class="w-72 border-r border-white/10 bg-black/40 backdrop-blur-xl flex flex-col">
            <div class="h-20 flex items-center px-8 border-b border-white/10">
                <a href="/admin/dashboard" class="text-xl font-display font-bold flex items-center gap-3">
                    <span class="w-3 h-3 rounded-full bg-eco-green shadow-[0_0_10px_#00ff66]"></span>
                    RB Core OS
                </a>
            </div>
            
            <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-2">
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4 px-4">Overview</div>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-eco-green/10 text-eco-green border border-eco-green/20">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Dashboard
                </a>
                
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4 mt-8 px-4">Content Engine</div>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Page Builder
                </a>
                <a href="#" class="flex items-center justify-between px-4 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        AI Studio
                    </div>
                    <span class="px-2 py-0.5 rounded text-[10px] bg-blue-500/20 text-blue-400 border border-blue-500/30">New</span>
                </a>
                <a href="/admin/products" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    Products Manager
                </a>
                
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4 mt-8 px-4">System</div>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    SEO Optimizer
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Settings
                </a>
            </nav>
            
            <div class="p-4 border-t border-white/10">
                <div class="flex items-center gap-3">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=00ff66&color=000" alt="Admin" class="w-10 h-10 rounded-full border border-white/20">
                    <div>
                        <div class="text-sm font-medium">Super Admin</div>
                        <div class="text-xs text-gray-500">System Operator</div>
                    </div>
                </div>
            </div>
        </aside>
        <?php endif; ?>

        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col h-screen overflow-hidden">
            <?php if (!str_contains($viewFile, 'login.php')): ?>
            <!-- Topbar -->
            <header class="h-20 border-b border-white/10 bg-black/20 backdrop-blur-md flex items-center justify-between px-8 z-10">
                <h2 class="text-xl font-medium text-gray-200"><?= htmlspecialchars($title ?? 'Dashboard') ?></h2>
                <div class="flex items-center gap-6">
                    <button class="text-gray-400 hover:text-white relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute top-0 right-0 w-2 h-2 rounded-full bg-eco-green animate-pulse"></span>
                    </button>
                    <a href="/" target="_blank" class="text-sm font-medium px-4 py-2 rounded-full border border-white/20 hover:bg-white/10 transition-colors">View Site</a>
                </div>
            </header>
            <?php endif; ?>

            <!-- View Content -->
            <div class="flex-1 overflow-y-auto p-8 admin-content-area">
                <?php require $viewFile; ?>
            </div>
        </main>
    </div>

    <script>
        // Simple entry animations for the admin dashboard
        document.addEventListener("DOMContentLoaded", () => {
            if(document.querySelector('.admin-content-area')) {
                gsap.from('.admin-content-area > div', {
                    y: 20,
                    opacity: 0,
                    duration: 0.6,
                    stagger: 0.1,
                    ease: "power2.out"
                });
            }
        });
    </script>
</body>
</html>
