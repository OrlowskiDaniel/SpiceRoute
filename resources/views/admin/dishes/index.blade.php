@extends('layouts.admin')

@section('content')
<div class="py-6">
    <div class="flex flex-col md:row justify-between items-end md:items-center mb-10 gap-4">
        <div>
            <nav class="flex text-sm text-gray-400 mb-2">
                <a href="/admin" class="hover:text-brand">Admin</a>
                <span class="mx-2">/</span>
                <span class="text-text font-bold">Menu Management</span>
            </nav>
            <h1 class="text-4xl font-black text-text">All Dishes</h1>
        </div>

        <a href="/admin/dishes/create" class="btn-primary flex items-center gap-2 !rounded-2xl shadow-lg shadow-brand/20">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            <span>Add New Dish</span>
        </a>
    </div>

    <div class="bg-white rounded-[2rem] shadow-sm border border-brand-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100">
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Image</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Dish Information</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Category</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Price</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @foreach($dishes as $dish)
                    <tr class="hover:bg-brand-light/20 transition-colors">
                        <td class="p-6">
                            <div class="flex items-center gap-4">
                                <img src="{{ $dish->image }}" class="w-12 h-12 rounded-xl object-cover shadow-sm">
                            </div>
                        </td>

                        <td class="p-6">
                            <div class="flex items-center gap-4">
                                <div>
                                    <p class="font-bold text-text">{{ $dish->name }}</p>
                                    <p class="text-xs text-gray-400">{{ $dish->description }}</p>
                                </div>
                            </div>
                        </td>

                        <td class="p-6">
                            <span class="text-xs text-brand font-bold uppercase tracking-wider">{{ $dish->category }}</span>
                        </td>

                        <td class="p-6">
                            <span class="inline-flex items-center justify-center px-3 py-1 rounded-lg bg-gray-100 font-black text-text">
                                €{{ $dish->price }}
                            </span>
                        </td>

                        <td class="p-6 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="/admin/dishes/{{ $dish->id }}/edit" class="p-2 text-gray-400 hover:text-brand hover:bg-brand-light rounded-lg transition-all">
                                    Edit
                                </a>
                                <form method="POST" action="/admin/dishes/{{ $dish->id }}" onsubmit="return confirm('Delete dish?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-2 text-gray-400 hover:text-red-600 transition-colors rounded-lg">
                                        <span class="sr-only">Delete</span>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- <div class="bg-gray-50 px-6 py-4 border-t border-gray-100 flex justify-between items-center text-xs font-bold text-gray-400">
            <span>Showing 1 to 10 of 42 dishes</span>
            <div class="flex gap-2">
                <button class="px-3 py-1 rounded border border-gray-200 bg-white hover:bg-gray-50">Prev</button>
                <button class="px-3 py-1 rounded border border-gray-200 bg-white hover:bg-gray-50">Next</button>
            </div>
        </div> -->
    </div>
</div>
@endsection