<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Pluto Framework' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .animate-float { animation: float 6s ease-in-out infinite; }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-[#0f172a] text-white min-h-screen flex flex-col selection:bg-indigo-500 selection:text-white overflow-x-hidden">

    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-indigo-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40 animate-blob"></div>
        <div class="absolute top-[-10%] right-[-10%] w-96 h-96 bg-purple-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-20 w-96 h-96 bg-pink-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40 animate-blob animation-delay-4000"></div>
    </div>

    <nav class="w-full py-6 px-6 md:px-12 flex justify-between items-center max-w-7xl mx-auto">
        <div class="text-2xl font-bold tracking-tighter bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-cyan-400 cursor-default">
            PLUTO
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium text-slate-300">
            <a href="/home" class="hover:text-white transition-colors">Home</a>
            <a href="/docs" class="hover:text-white transition-colors">Documentation</a>
            <a href="/about" class="hover:text-white transition-colors">About</a>
        </div>
        <a href="https://github.com" target="_blank" class="px-5 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/10 transition-all text-sm font-semibold">
            GitHub v1.0
        </a>
    </nav>

    <main class="flex-grow flex items-center justify-center px-6">
        <div class="text-center max-w-3xl mx-auto mt-10 md:mt-0">
            <div class="animate-float text-8xl md:text-9xl mb-6 select-none">
                🪐
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                The Future of <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-cyan-400">
                    PHP Frameworks
                </span>
            </h1>
            
            <p class="text-slate-400 text-lg md:text-xl mb-10 max-w-2xl mx-auto leading-relaxed">
                Welcome to <b>Pluto Framework</b>. Built with a lightweight, fast, and easy-to-understand MVC architecture. Start building your dream web application today.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/docs" class="px-8 py-4 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold shadow-lg shadow-indigo-500/30 transition-all transform hover:scale-105 flex items-center justify-center gap-2">
                    🚀 Get Started
                </a>
                <a href="/about" class="px-8 py-4 rounded-xl glass-card hover:bg-slate-800 text-slate-200 font-semibold transition-all transform hover:scale-105 flex items-center justify-center gap-2">
                    📖 Learn More
                </a>
            </div>
        </div>
    </main>

    <section class="max-w-7xl mx-auto px-6 py-20 w-full">
        <div class="grid md:grid-cols-3 gap-6">
            <div class="glass-card p-8 rounded-2xl hover:border-indigo-500/50 transition-colors duration-300">
                <div class="w-12 h-12 bg-indigo-500/20 rounded-lg flex items-center justify-center text-2xl mb-4">⚡</div>
                <h3 class="text-xl font-bold mb-2">Blazing Fast</h3>
                <p class="text-slate-400 text-sm">No bloatware. Only the core code you need for maximum performance and speed.</p>
            </div>
            <div class="glass-card p-8 rounded-2xl hover:border-purple-500/50 transition-colors duration-300">
                <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center text-2xl mb-4">🛡️</div>
                <h3 class="text-xl font-bold mb-2">Secure & Stable</h3>
                <p class="text-slate-400 text-sm">Built-in secure routing system and a well-organized directory structure.</p>
            </div>
            <div class="glass-card p-8 rounded-2xl hover:border-cyan-500/50 transition-colors duration-300">
                <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center text-2xl mb-4">🧩</div>
                <h3 class="text-xl font-bold mb-2">Easy to Extend</h3>
                <p class="text-slate-400 text-sm">Flexible MVC architecture makes it easy to scale and add new features.</p>
            </div>
        </div>
    </section>

    <footer class="border-t border-white/5 py-8 text-center text-slate-500 text-sm">
        <p>&copy; <?= date('Y') ?> Pluto Framework. Made with ❤️ by Rival.</p>
        <p class="mt-2 text-xs">Running on PHP <?= phpversion() ?></p>
    </footer>

</body>
</html>