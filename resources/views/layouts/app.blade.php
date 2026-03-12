<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpiceRoute | Authentic Indian Street Food</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FCF9F6] text-text min-h-screen flex flex-col font-sans">

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-brand-100 shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-brand rounded-xl flex items-center justify-center text-white shadow-lg shadow-brand/20 group-hover:rotate-12 transition-transform">
                    <span class="text-xl">🌶️</span>
                </div>
                <span class="text-2xl font-black tracking-tight text-text">
                    Spice<span class="text-brand">Route</span>
                </span>
            </a>

            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="font-semibold text-gray-600 hover:text-brand transition-colors">Home</a>
                <a href="/menu" class="font-semibold text-gray-600 hover:text-brand transition-colors">Menu</a>
                <a href="/contact" class="font-semibold text-gray-600 hover:text-brand transition-colors">Contact</a>
                <a href="/reservations" class="btn-primary !py-2 !px-5 !text-sm">Book a Table</a>
            </div>

            <button class="md:hidden text-text">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-6 py-12">
        @yield('content')
    </main>

    <footer class="bg-text text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <h3 class="text-brand font-bold text-lg mb-4">SpiceRoute</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Bringing the vibrant flavors of Indian streets to your neighborhood. Fresh ingredients, ancient recipes, modern love.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold mb-4 text-white">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/menu" class="hover:text-brand transition-colors">Our Menu</a></li>
                        <li><a href="/contact" class="hover:text-brand transition-colors">Catering</a></li>
                        <li><a href="/reservations" class="hover:text-brand transition-colors">Reservations</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4 text-white">Visit Us</h4>
                    <p class="text-gray-400">123 Masala Street, Flavor Town</p>
                    <p class="text-gray-400">Open Daily: 11am - 10pm</p>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8 flex flex-col md:row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm italic">
                    &copy; {{ date('Y') }} SpiceRoute. All rights reserved. Made with ❤️ and turmeric.
                </p>
                <div class="flex space-x-4">
                    <div class="w-8 h-8 rounded-full bg-gray-700 hover:bg-brand cursor-pointer transition-colors"></div>
                    <div class="w-8 h-8 rounded-full bg-gray-700 hover:bg-brand cursor-pointer transition-colors"></div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>