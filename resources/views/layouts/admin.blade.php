<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpiceRoute Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] text-text font-sans antialiased">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-text text-white flex flex-col sticky top-0 h-screen shadow-2xl">
            <div class="p-6">
                <a href="/admin" class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-brand rounded-lg flex items-center justify-center text-sm">🌶️</div>
                    <span class="text-xl font-black tracking-tight">Spice<span class="text-brand">Admin</span></span>
                </a>
            </div>

            <nav class="flex-grow px-4 space-y-2 mt-4">
                <a href="/admin" 
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin') ? 'bg-white/10 text-brand font-bold shadow-inner' : 'hover:bg-white/5 text-gray-400 hover:text-white' }}">
                    <span>📊</span> Dashboard
                </a>

                <a href="/admin/dishes" 
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/dishes*') ? 'bg-white/10 text-brand font-bold shadow-inner' : 'hover:bg-white/5 text-gray-400 hover:text-white' }}">
                    <span>🍲</span> Menu Items
                </a>

                <a href="/admin/reservations" 
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/reservations*') ? 'bg-white/10 text-brand font-bold shadow-inner' : 'hover:bg-white/5 text-gray-400 hover:text-white' }}">
                    <span>📅</span> Bookings
                </a>

                <a href="/admin/orders" 
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/orders*') ? 'bg-white/10 text-brand font-bold shadow-inner' : 'hover:bg-white/5 text-gray-400 hover:text-white' }}">
                    <span>⚡</span> Live Orders
                </a>

                <a href="/admin/users" 
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/users*') ? 'bg-white/10 text-brand font-bold shadow-inner' : 'hover:bg-white/5 text-gray-400 hover:text-white' }}">
                    <span>📅</span> Menage Users
                </a>

                <a href="/admin/messages" 
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/messages*') ? 'bg-white/10 text-brand font-bold shadow-inner' : 'hover:bg-white/5 text-gray-400 hover:text-white' }}">
                    <span>📩</span> Messages
                </a>
            </nav>

            <div class="p-4 border-t border-white/10">
                <a href="/" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-400 hover:text-white transition-colors">
                    <span>&larr;</span> Back to Public Site
                </a>
            </div>
        </aside>

        <main class="flex-grow p-10">
            @yield('content')
        </main>
    </div>

</body>
</html>