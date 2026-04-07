@extends('layouts.app')

@section('content')
<div class="relative overflow-hidden bg-brand-light rounded-3xl py-16 px-8 mb-20">
    <div class="relative z-10 text-center max-w-3xl mx-auto">
        <span class="inline-block px-4 py-1.5 mb-6 text-sm font-semibold tracking-wide text-brand-800 uppercase bg-brand-200 rounded-full">
            Now Delivering in your City
        </span>
        <h1 class="text-5xl md:text-6xl font-black text-text mb-6">
            Welcome to <span class="text-brand">SpiceRoute</span>
        </h1>
        <p class="text-xl text-gray-700 mb-10 leading-relaxed">
            Experience authentic Indian street food crafted with traditional spices and delivered fresh to your door.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/menu" class="btn-primary text-lg px-8 py-4">
                Explore Our Menu
            </a>
            <a href="/contact" class="btn-secondary text-lg px-8 py-4">
                Contact Us
            </a>
        </div>
    </div>
    
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-brand-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
</div>

<div class="max-w-7xl mx-auto px-4">
    <div class="flex items-center justify-between mb-10">
        <h2 class="text-3xl font-bold text-text">Popular Dishes</h2>
        <div class="h-1 flex-grow mx-8 bg-brand-100 rounded hidden md:block"></div>
        <a href="/menu" class="text-brand font-semibold hover:underline">View All &rarr;</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        @foreach($dishes as $dish)
        <div class="group bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
            <div class="w-12 h-12 bg-brand-light rounded-lg flex items-center justify-center mb-4 group-hover:bg-brand group-hover:text-white transition-colors">
                <span class="font-bold">🌶️</span>
            </div>
            <h3 class="font-bold text-xl text-text mb-2">{{ $dish->name }}</h3>
            <div class="flex items-center justify-between">
                <span class="text-brand-800 font-bold text-lg">{{ $dish->price }}</span>
                <button class="text-sm font-bold text-brand hover:text-brand-dark">Add to Cart +</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection