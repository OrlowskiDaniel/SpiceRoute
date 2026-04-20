@extends('layouts.admin')

@section('content')
<div class="py-6">
    <div class="mb-10">
        <h1 class="text-4xl font-black text-text">Live <span class="text-brand">Orders</span></h1>
        <div class="flex gap-4 mt-4">
            {{-- Dynamic Pending Count --}}
            <span class="flex items-center gap-2 text-xs font-bold text-orange-600 bg-orange-50 px-3 py-1 rounded-full">
                <span class="w-2 h-2 bg-orange-600 rounded-full animate-pulse"></span> 
                {{ $pendingCount }} Pending
            </span>
            
            {{-- Dynamic Completed Today Count --}}
            <span class="text-xs font-bold text-gray-400 px-3 py-1">
                {{ $completedTodayCount }} Completed Today
            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6">
        @foreach($orders as $order)
        <div class="bg-white border-l-8 border-orange-500 rounded-3xl shadow-sm p-6 hover:shadow-md transition-shadow">
            
            <div class="flex flex-col lg:flex-row justify-between lg:items-center gap-6">

                {{-- LEFT SIDE --}}
                <div class="flex gap-6 items-center">
                    
                    <div class="text-center bg-gray-50 p-3 rounded-2xl min-w-[80px]">
                        <p class="text-xs font-bold text-gray-400 uppercase">Order</p>
                        <p class="text-xl font-black text-text">#{{ $order->id }}</p>
                    </div>

                    <div>
                        {{-- USER NAME --}}
                        <h3 class="font-black text-xl text-text leading-none mb-1">
                            {{ $order->user->name ?? 'Unknown User' }}
                        </h3>

                        {{-- DATE --}}
                        <p class="text-sm text-gray-400">
                            {{ $order->created_at->format('d M Y • H:i') }}
                        </p>
                    </div>
                </div>

                {{-- ORDER ITEMS --}}
                <div class="flex-grow flex gap-2 overflow-x-auto py-2">
                    @foreach($order->items as $item)
                        <span class="bg-brand-light text-brand-900 px-3 py-1 rounded-xl text-sm font-bold whitespace-nowrap">
                            {{ $item->quantity }}x {{ $item->dish->name ?? 'Dish deleted' }}
                        </span>
                    @endforeach
                </div>

                {{-- RIGHT SIDE --}}
                <div class="flex items-center gap-6 border-t lg:border-t-0 pt-4 lg:pt-0">
                    
                    <div class="text-right">
                        <p class="text-xs font-bold text-gray-400 uppercase">Total</p>
                        <p class="text-2xl font-black text-text">€{{ $order->total_price }}</p>
                    </div>

                    <div class="flex gap-2">
                        @if($order->status !== 'completed')
                            <form action="/admin/orders/{{ $order->id }}/status" method="POST">
                                @csrf
                                <input type="hidden" name="status" value="completed">
                                <button class="bg-green-500 text-white px-6 py-3 rounded-2xl font-bold hover:bg-green-600">
                                    Mark Completed
                                </button>
                            </form>
                        @else
                            <p class="bg-gray-400 text-white px-6 py-3 rounded-2xl font-bold">
                                Completed
                            </p>
                        @endif
                    </div>

                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection