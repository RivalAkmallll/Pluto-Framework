<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Pluto Framework</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .text-gradient {
            background: linear-gradient(to right, #818cf8, #c084fc, #22d3ee);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-[#0f172a] text-slate-300 min-h-screen selection:bg-indigo-500 selection:text-white">

    <!-- Background Abstract -->
    <div class="fixed inset-0 overflow-hidden -z-10">
        <div class="absolute top-[-20%] left-[-10%] w-[500px] h-[500px] bg-indigo-900/30 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-20%] right-[-10%] w-[500px] h-[500px] bg-purple-900/30 rounded-full blur-[120px]"></div>
    </div>

    <!-- Navbar Simple -->
    <nav class="w-full py-6 px-6 border-b border-white/5">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <!-- LOGO DIPERBARUI (Sama persis dengan Home) -->
            <a href="/home" class="text-2xl font-bold tracking-tighter bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-cyan-400 hover:opacity-80 transition">
                PLUTO 
            </a>
            
            <a href="/home" class="text-sm font-semibold text-slate-400 hover:text-white transition flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Home
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-6 py-16">
        
        <!-- Header Section -->
        <div class="text-center mb-20">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Behind <span class="text-gradient">Pluto Framework</span>
            </h1>
            <p class="text-lg text-slate-400 max-w-2xl mx-auto leading-relaxed">
                We believe coding should be fun, not confusing. Pluto bridges the gap between simplicity and high performance.
            </p>
        </div>

        <!-- Grid Story & Stats -->
        <div class="grid md:grid-cols-2 gap-8 mb-20">
            <!-- Card 1: The Mission -->
            <div class="glass-panel p-8 rounded-2xl hover:bg-white/5 transition duration-500">
                <div class="w-12 h-12 bg-indigo-500/20 rounded-lg flex items-center justify-center text-indigo-400 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Our Mission</h3>
                <p class="leading-relaxed text-slate-400">
                    Many modern PHP frameworks have become too heavy and complex ("Bloated"). Pluto's mission is to return to the essence of PHP: 
                    <span class="text-white font-semibold">Fast, Easy, and Efficient</span>. We focus on a solid Core MVC without the junk features you don't need.
                </p>
            </div>

            <!-- Card 2: The Creator (Personal Branding) -->
            <div class="glass-panel p-8 rounded-2xl relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-cyan-500/20 to-transparent rounded-bl-full"></div>
                
                <h3 class="text-2xl font-bold text-white mb-2">The Creator</h3>
                <div class="text-sm font-mono text-cyan-400 mb-6">@Rival</div>
                
                <p class="leading-relaxed text-slate-400 mb-6">
                    "I created Pluto driven by my passion and a desire to make it easier for developers to build websites efficiently."
                </p>

                <div class="flex gap-4 mt-auto pt-4 border-t border-white/10">
                    <div class="flex flex-col">
                        <span class="text-xs text-slate-500 uppercase tracking-wider">Role</span>
                        <span class="text-white font-semibold">Lead Developer</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xs text-slate-500 uppercase tracking-wider">Location</span>
                        <span class="text-white font-semibold">Indonesia</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tech Stack Section -->
        <div class="glass-panel rounded-3xl p-10 text-center">
            <h3 class="text-xl font-semibold text-white mb-8">Built with Modern Technology</h3>
            <div class="flex flex-wrap justify-center gap-8 md:gap-16 grayscale hover:grayscale-0 transition-all duration-500 opacity-70 hover:opacity-100">
                <!-- PHP Icon -->
                <div class="flex flex-col items-center gap-2">
                    <div class="text-3xl font-bold text-[#777BB4]">PHP 8+</div>
                    <span class="text-xs text-slate-500">Core Language</span>
                </div>
                <!-- MVC Icon -->
                <div class="flex flex-col items-center gap-2">
                    <div class="text-3xl font-bold text-emerald-400">MVC</div>
                    <span class="text-xs text-slate-500">Architecture</span>
                </div>
                <!-- Composer Icon -->
                <div class="flex flex-col items-center gap-2">
                    <div class="text-3xl font-bold text-[#885630]">PSR-4</div>
                    <span class="text-xs text-slate-500">Autoloading</span>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="text-center py-8 text-slate-600 text-sm">
        &copy; <?= date('Y') ?> Pluto Framework. All rights reserved.
    </footer>

</body>
</html>