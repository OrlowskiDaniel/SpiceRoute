@extends('layouts.admin')

@section('content')
<div class="py-6">
    <div class="mb-10">
        <h1 class="text-4xl font-black text-text">Live <span class="text-brand">Orders</span></h1>
        <div class="flex gap-4 mt-4">
            <span class="flex items-center gap-2 text-xs font-bold text-orange-600 bg-orange-50 px-3 py-1 rounded-full">
                <span class="w-2 h-2 bg-orange-600 rounded-full animate-pulse"></span> 3 Pending
            </span>
            <span class="text-xs font-bold text-gray-400 px-3 py-1">12 Completed Today</span>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6">
        {{-- @foreach($orders as $order) --}}
        <div class="bg-white border-l-8 border-orange-500 rounded-3xl shadow-sm p-6 hover:shadow-md transition-shadow">
            <div class="flex flex-col lg:flex-row justify-between lg:items-center gap-6">
                <div class="flex gap-6 items-center">
                    <div class="text-center bg-gray-50 p-3 rounded-2xl min-w-[80px]">
                        <p class="text-xs font-bold text-gray-400 uppercase">Order</p>
                        <p class="text-xl font-black text-text">#102</p>
                    </div>
                    <div>
                        <h3 class="font-black text-xl text-text leading-none mb-1">Daniel Smith</h3>
                        <p class="text-sm text-gray-400">Delivery • 12:45 PM • 1.2km away</p>
                    </div>
                </div>

                <div class="flex-grow flex gap-2 overflow-x-auto py-2">
                    <span class="bg-brand-light text-brand-900 px-3 py-1 rounded-xl text-sm font-bold whitespace-nowrap">2x Butter Chicken</span>
                    <span class="bg-brand-light text-brand-900 px-3 py-1 rounded-xl text-sm font-bold whitespace-nowrap">1x Garlic Naan</span>
                    <span class="bg-brand-light text-brand-900 px-3 py-1 rounded-xl text-sm font-bold whitespace-nowrap">1x Mango Lassi</span>
                </div>

                <div class="flex items-center gap-6 border-t lg:border-t-0 pt-4 lg:pt-0">
                    <div class="text-right">
                        <p class="text-xs font-bold text-gray-400 uppercase">Total</p>
                        <p class="text-2xl font-black text-text">€34.50</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="bg-text text-white px-6 py-3 rounded-2xl font-bold hover:bg-black transition-colors">Accept</button>
                        <button class="bg-brand text-white px-6 py-3 rounded-2xl font-bold hover:bg-brand-dark transition-colors">Complete</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
</div>
@endsection