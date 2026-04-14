@extends('layouts.app')

@section('content')
<div class="py-6 relative">
    
    <div class="fixed bottom-8 right-8 z-50 animate-bounce-slow">
        @php
        $cart = session('cart', []);
        $count = array_sum(array_column($cart, 'quantity'));
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
        @endphp
        <a href="/cart" class="flex items-center gap-4 bg-text text-white p-2 pl-6 rounded-full shadow-2xl border-2 border-brand hover:scale-105 transition-transform">
            <div class="flex flex-col">
                <span class="text-[10px] uppercase font-bold text-brand-300 leading-none">Your Tray</span>
                <span class="font-black text-lg">€{{ $total }}</span>
            </div>
            <div class="w-12 h-12 bg-brand rounded-full flex items-center justify-center shadow-inner">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span class="absolute -top-1 -right-1 bg-white text-brand text-[10px] font-black w-5 h-5 rounded-full flex items-center justify-center border-2 border-brand">{{ $count }}</span>
            </div>
        </a>
    </div>

    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-black text-text mb-4">Our <span class="text-brand">Signature</span> Menu</h1>
        <p class="text-gray-500 max-w-xl mx-auto">From the streets of Delhi to your table...</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($dishes as $dish)
            <div class="group bg-white rounded-3xl shadow-sm border border-brand-100 overflow-hidden hover:shadow-2xl transition-all duration-300">
                <div class="relative overflow-hidden">
                    {{-- Dynamic Image --}}
                    <img src="{{ $dish->image }}" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full shadow-sm">
                        <span class="text-xs font-bold text-brand-900 uppercase tracking-wider">🔥 Popular</span>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        {{-- Dynamic Name & Price --}}
                        <h2 class="text-2xl font-bold text-text group-hover:text-brand transition-colors">{{ $dish->name }}</h2>
                        <span class="text-xl font-black text-brand-700">€{{ number_format($dish->price, 2) }}</span>
                    </div>
                    
                    {{-- Dynamic Description --}}
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">{{ $dish->description }}</p>

                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <span class="text-xs font-bold px-2 py-1 bg-green-50 text-green-700 rounded-md">Gluten Free</span>
                        <form method="POST" action="/cart/add/{{ $dish->id }}">
                            @csrf
                            <button class="btn-primary !py-2 !px-4 !rounded-xl text-sm flex items-center gap-2">
                                Add to Cart
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                                </svg>
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection