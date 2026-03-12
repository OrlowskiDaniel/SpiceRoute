@extends('layouts.admin')

@section('content')
<div class="py-6">
    <div class="mb-10">
        <h1 class="text-4xl font-black text-text italic">Management <span class="text-brand">Hub</span></h1>
        <p class="text-gray-500 font-medium">Welcome back, Captain. Here is what's happening today.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
        <div class="bg-white p-6 rounded-3xl border border-brand-100 shadow-sm">
            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Today's Orders</p>
            <p class="text-3xl font-black text-text">24</p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-brand-100 shadow-sm">
            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Reservations</p>
            <p class="text-3xl font-black text-brand">8</p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-brand-100 shadow-sm">
            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Revenue</p>
            <p class="text-3xl font-black text-text">€1,420</p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-brand-100 shadow-sm">
            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Active Staff</p>
            <p class="text-3xl font-black text-text">6</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <a href="/admin/dishes" class="group bg-white border border-brand-100 p-8 rounded-[2rem] shadow-sm hover:shadow-xl hover:border-brand transition-all duration-300">
            <div class="w-14 h-14 bg-brand-light text-brand rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand group-hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-text mb-2">Menu Items</h2>
            <p class="text-gray-500 leading-relaxed">Update pricing, descriptions, and availability of your dishes.</p>
        </a>

        <a href="/admin/reservations" class="group bg-white border border-brand-100 p-8 rounded-[2rem] shadow-sm hover:shadow-xl hover:border-brand transition-all duration-300">
            <div class="w-14 h-14 bg-brand-light text-brand rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand group-hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 00-2 2z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-text mb-2">Bookings</h2>
            <p class="text-gray-500 leading-relaxed">Check floor plans and upcoming guest reservations for tonight.</p>
        </a>

        <a href="/admin/orders" class="group bg-white border border-brand-100 p-8 rounded-[2rem] shadow-sm hover:shadow-xl hover:border-brand transition-all duration-300">
            <div class="w-14 h-14 bg-brand-light text-brand rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand group-hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-text mb-2">Live Orders</h2>
            <p class="text-gray-500 leading-relaxed">Monitor incoming delivery and pickup requests in real-time.</p>
        </a>
    </div>
</div>
@endsection