<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation - Pluto Framework</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Highlight.js for Code Coloring -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/tokyo-night-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        code { font-family: 'JetBrains Mono', monospace; }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0f172a; }
        ::-webkit-scrollbar-thumb { background: #334155; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #475569; }

        .glass-sidebar {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(255,255,255,0.05);
        }
        
        .prose h2 { margin-top: 2rem; margin-bottom: 1rem; color: white; font-weight: 700; font-size: 1.5rem; }
        .prose h3 { margin-top: 1.5rem; margin-bottom: 0.75rem; color: #cbd5e1; font-weight: 600; font-size: 1.25rem; }
        .prose p { color: #94a3b8; line-height: 1.7; margin-bottom: 1rem; }
        .prose ul { color: #94a3b8; list-style-type: disc; margin-left: 1.5rem; margin-bottom: 1rem; }
        .prose li { margin-bottom: 0.5rem; }
        
        .code-block {
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 0.75rem;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body class="bg-[#0f172a] text-slate-300 min-h-screen flex">

    <!-- Sidebar Navigation (Desktop) -->
    <aside class="glass-sidebar w-64 h-screen fixed top-0 left-0 hidden md:flex flex-col p-6 z-50 overflow-y-auto">
        <a href="/home" class="text-2xl font-bold tracking-tighter text-white mb-10 flex items-center gap-2 hover:opacity-80 transition">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">PLUTO</span>
            <span class="text-xs bg-indigo-500/20 text-indigo-300 px-2 py-1 rounded">v1.0</span>
        </a>

        <nav class="space-y-8">
            <div>
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-4">Getting Started</div>
                <ul class="space-y-3 text-sm">
                    <li><a href="#introduction" class="block hover:text-indigo-400 transition">Introduction</a></li>
                    <li><a href="#installation" class="block hover:text-indigo-400 transition">Installation</a></li>
                    <li><a href="#structure" class="block hover:text-indigo-400 transition">Directory Structure</a></li>
                </ul>
            </div>

            <div>
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-4">The Basics</div>
                <ul class="space-y-3 text-sm">
                    <li><a href="#routing" class="block hover:text-indigo-400 transition">Routing</a></li>
                    <li><a href="#views" class="block hover:text-indigo-400 transition">Views & Data</a></li>
                    <li><a href="#controllers" class="block hover:text-indigo-400 transition">Controllers</a></li>
                </ul>
            </div>
            
            <div class="mt-auto pt-8">
                <a href="/home" class="flex items-center gap-2 text-sm text-slate-500 hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Home
                </a>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 md:ml-64 p-6 md:p-12 lg:p-16 max-w-4xl mx-auto">
        
        <!-- Mobile Nav Toggle (Visual Only) -->
        <div class="md:hidden mb-8 flex items-center justify-between">
            <span class="font-bold text-xl text-white">Pluto Docs</span>
            <a href="/home" class="text-sm text-indigo-400">Back to Home</a>
        </div>

        <div class="prose prose-invert max-w-none">
            
            <!-- Introduction -->
            <section id="introduction" class="mb-16">
                <h1 class="text-4xl font-bold text-white mb-6">Introduction</h1>
                <p class="text-xl text-indigo-200 mb-6">
                    Pluto is a lightweight PHP framework designed for developers who want to build websites quickly without the bloat.
                </p>
                <p>
                    Unlike massive frameworks that include hundreds of files you'll never use, Pluto provides just the essentials: a powerful Router, an elegant MVC structure, and Helper functions. It's perfect for small to medium projects or for learning how frameworks work under the hood.
                </p>
            </section>

            <!-- Installation -->
            <section id="installation" class="mb-16 pt-10 border-t border-slate-800">
                <h2>Installation</h2>
                <p>Getting started with Pluto is extremely simple. You just need PHP 8.0 or higher installed on your machine.</p>
                
                <h3>1. Start the Server</h3>
                <p>Navigate to your project folder in the terminal and run the built-in PHP server pointing to the <code>public</code> folder.</p>
                
                <div class="code-block">
                    <pre><code class="language-bash"># Open your terminal
cd path/to/pluto-framework

# Start the server
php -S localhost:8000 -t public</code></pre>
                </div>
                
                <p>Now, open your browser and visit <code>http://localhost:8000</code>.</p>
            </section>

            <!-- Directory Structure -->
            <section id="structure" class="mb-16 pt-10 border-t border-slate-800">
                <h2>Directory Structure</h2>
                <p>Pluto follows a strict MVC (Model-View-Controller) pattern to keep your code organized.</p>

                <div class="code-block">
                    <pre><code class="language-plaintext">PLUTO-FRAMEWORK/
├── App/                 # Core Application Logic
│   ├── Controllers/     # Your Controller Classes
│   ├── Helpers.php      # Helper Functions (view, etc)
│   └── Pluto.php        # The Framework Core
├── public/              # Entry point (Web Root)
│   └── index.php        # Main file that handles requests
└── views/               # HTML Templates (Views)
    ├── home.php
    └── about.php</code></pre>
                </div>
            </section>

            <!-- Routing -->
            <section id="routing" class="mb-16 pt-10 border-t border-slate-800">
                <h2>Routing</h2>
                <p>Routes are defined in <code>public/index.php</code>. You can define routes for <code>GET</code> and <code>POST</code> requests effortlessly.</p>
                
                <h3>Basic Routing</h3>
                <div class="code-block">
                    <div class="bg-slate-800/50 px-4 py-2 text-xs text-slate-400 border-b border-white/5">public/index.php</div>
                    <pre><code class="language-php">$app->get('/hello', function() {
    echo "Hello World!";
});

$app->get('/about', function() {
    return view('about');
});</code></pre>
                </div>
            </section>

            <!-- Views -->
            <section id="views" class="mb-16 pt-10 border-t border-slate-800">
                <h2>Views & Data</h2>
                <p>Views are stored in the <code>views/</code> directory. You can use the <code>view()</code> helper to render them and pass data.</p>
                
                <h3>Passing Data to Views</h3>
                <div class="code-block">
                    <div class="bg-slate-800/50 px-4 py-2 text-xs text-slate-400 border-b border-white/5">Route Definition</div>
                    <pre><code class="language-php">$app->get('/profile', function() {
    $data = [
        'name' => 'Rival',
        'role' => 'Developer'
    ];
    return view('profile', $data);
});</code></pre>
                </div>

                <h3>Displaying Data in View</h3>
                <div class="code-block">
                    <div class="bg-slate-800/50 px-4 py-2 text-xs text-slate-400 border-b border-white/5">views/profile.php</div>
                    <pre><code class="language-php">&lt;h1&gt;Welcome, &lt;?= $name ?&gt;&lt;/h1&gt;
&lt;p&gt;Role: &lt;?= $role ?&gt;&lt;/p&gt;</code></pre>
                </div>
            </section>

            <!-- Controllers -->
            <section id="controllers" class="mb-24 pt-10 border-t border-slate-800">
                <h2>Controllers</h2>
                <p>For larger logic, instead of using closures in routes, you should use Controllers. Create your controller in <code>App/Controllers</code>.</p>

                <h3>1. Create Controller</h3>
                <div class="code-block">
                    <div class="bg-slate-800/50 px-4 py-2 text-xs text-slate-400 border-b border-white/5">App/Controllers/UserController.php</div>
                    <pre><code class="language-php">namespace App\Controllers;

class UserController {
    public function index() {
        return "User Index Page";
    }
}</code></pre>
                </div>

                <h3>2. Register Route</h3>
                <div class="code-block">
                    <pre><code class="language-php">use App\Controllers\UserController;

$app->get('/users', [UserController::class, 'index']);</code></pre>
                </div>
            </section>

        </div>
        
        <!-- Docs Footer -->
        <footer class="mt-20 pt-8 border-t border-white/5 text-center text-slate-500 text-sm">
            Built with <span class="text-indigo-400">Pluto Framework</span>. Documentation v1.0
        </footer>

    </main>

</body>
</html> 