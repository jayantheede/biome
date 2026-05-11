<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Renu Biome') ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description ?? 'Engineering the Future of Regenerative Agriculture') ?>">
    
    <!-- OpenGraph SEO -->
    <meta property="og:title" content="<?= htmlspecialchars($title ?? 'Renu Biome') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description ?? 'Engineering the Future of Regenerative Agriculture') ?>">
    <meta property="og:type" content="website">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'eco-dark': '#0A0A0A',
                        'eco-darker': '#050505',
                        'eco-green': '#0E8028',
                        'eco-orange': '#FF6B00',
                        'glass-border': 'rgba(255, 255, 255, 0.08)',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'display': ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body { background-color: #060B09; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #030504; }
        ::-webkit-scrollbar-thumb { background: rgba(0, 255, 163, 0.2); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(0, 255, 163, 0.5); }
        .glass-panel {
            background: linear-gradient(135deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,0.05);
            box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.2);
            transform: translateZ(0);
        }
    </style>
    
    <!-- GSAP & Lenis -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
</head>
<body class="bg-eco-dark text-white font-sans overflow-x-hidden antialiased selection:bg-eco-green selection:text-eco-dark">
    
    <!-- Minimal Header (No Navigation) -->
    <header class="absolute w-full top-0 z-40 py-6">
        <div class="container mx-auto px-6 flex justify-center items-center">
            <a href="#" class="cursor-default">
                <img src="https://renu-biome.com/cdn/shop/files/logo-_crop_light_new.png?v=1745557038&width=600" alt="ReNu-Biome Logo" class="h-10 object-contain drop-shadow-[0_0_15px_rgba(0,255,163,0.3)]">
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main id="smooth-wrapper">
        <div id="smooth-content">
            <?php require $viewFile; ?>
            
            <!-- Minimal Footer -->
            <footer class="border-t border-glass-border bg-eco-dark/80 backdrop-blur-sm py-8 relative z-10">
                <div class="container mx-auto px-6 text-center text-xs text-gray-500">
                    <p>&copy; <?= date('Y') ?> ReNu-Biome. All rights reserved. Highly Confidential.</p>
                </div>
            </footer>
        </div>
    </main>

    <!-- Custom Scripts -->
    <script src="/js/main.js"></script>
</body>
</html>
