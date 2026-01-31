<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jobs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                * { margin: 0; padding: 0; box-sizing: border-box; }
                body { font-family: 'Instrument Sans', sans-serif; }
                .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 0 50px; position: fixed; width: 100%; top: 0; z-index: 1000; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
                .navbar { display: flex; justify-content: space-between; align-items: center; height: 70px; max-width: 1200px; margin: 0 auto; }
                .logo { font-size: 28px; font-weight: 700; color: #fff; text-decoration: none; letter-spacing: 1px; }
                .logo span { color: #ffd700; }
                .nav-links { display: flex; gap: 10px; }
                .nav-links a { color: #fff; text-decoration: none; padding: 12px 24px; border-radius: 25px; font-weight: 500; font-size: 16px; transition: all 0.3s ease; }
                .nav-links a:hover { background: rgba(255,255,255,0.2); transform: translateY(-2px); }
                .nav-links a.active { background: #fff; color: #667eea; }
                .hamburger { display: none; flex-direction: column; cursor: pointer; gap: 5px; }
                .hamburger span { width: 25px; height: 3px; background: #fff; border-radius: 2px; }
                .main-content { margin-top: 70px; padding: 40px 20px; min-height: calc(100vh - 70px); display: flex; align-items: center; justify-content: center; }
                @media (max-width: 768px) {
                    .header { padding: 0 20px; }
                    .hamburger { display: flex; }
                    .nav-links { display: none; position: absolute; top: 70px; left: 0; right: 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); flex-direction: column; padding: 20px; gap: 10px; }
                    .nav-links.active { display: flex; }
                    .nav-links a { text-align: center; }
                }
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18]">
        <!-- Header -->
        <header class="header">
            <nav class="navbar">
                <a href="/welcome" class="logo">My<span>App</span></a>
                <div class="nav-links" id="navLinks">
                    <a href="/welcome">Home</a>
                    <a href="/jobs" class="active">Job</a>
                    <a href="/contact">Contact</a>
                </div>
                <div class="hamburger" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <h1 style="font-size: 2.5rem; color: #333;">Jobs Page</h1>
        </main>

        <script>
            function toggleMenu() {
                document.getElementById('navLinks').classList.toggle('active');
            }
        </script>
    </body>
</html>
