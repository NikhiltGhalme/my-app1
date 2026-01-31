<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

    </head>
    <body class="bg-gray-50">
        <!-- Header -->
        <header class="bg-indigo-600 fixed w-full top-0 z-50 shadow-lg">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <a href="/welcome" class="text-2xl font-bold text-white">MyApp</a>
                    <div class="hidden md:flex space-x-1">
                        <a href="/welcome" class="text-indigo-100 hover:bg-indigo-500 hover:text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                        <a href="/jobs" class="text-indigo-100 hover:bg-indigo-500 hover:text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">Job</a>
                        <a href="/contact" class="bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                    <div class="md:hidden">
                        <button onclick="toggleMenu()" class="text-white hover:text-indigo-200 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="navLinks" class="hidden md:hidden pb-4">
                    <a href="/welcome" class="block text-indigo-100 hover:bg-indigo-500 hover:text-white px-4 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="/jobs" class="block text-indigo-100 hover:bg-indigo-500 hover:text-white px-4 py-2 rounded-md text-sm font-medium">Job</a>
                    <a href="/contact" class="block bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8 max-w-3xl mx-auto">
        <form>
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
      <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">workcation.com/</div>
              <input id="username" type="text" name="username" placeholder="janesmith" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="about" class="block text-sm/6 font-medium text-gray-900">About</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
        </div>

        
    </div>

    
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
        </main>

        <script>
            function toggleMenu() {
                document.getElementById('navLinks').classList.toggle('active');
            }
        </script>
    </body>
</html>
