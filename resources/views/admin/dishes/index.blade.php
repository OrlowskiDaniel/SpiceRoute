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
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Dish Information</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Category</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Price</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    {{-- @foreach($dishes as $dish) --}}
                    <tr class="hover:bg-brand-light/30 transition-colors group">
                        <td class="p-6">
                            <div class="flex items-center gap-4">
                                <img src="https://images.unsplash.com/photo-1588166524941-3bf61a9c41db?auto=format&fit=crop&w=100&q=80" 
                                     class="w-12 h-12 rounded-xl object-cover shadow-sm">
                                <div>
                                    <p class="font-bold text-text group-hover:text-brand transition-colors">Butter Chicken</p>
                                    <p class="text-xs text-gray-400">Mild & Creamy</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-6">
                            <span class="px-3 py-1 bg-brand-100 text-brand-800 text-[10px] font-black uppercase rounded-full tracking-tighter">
                                Curry
                            </span>
                        </td>
                        <td class="p-6">
                            <span class="font-black text-text">€12.00</span>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-end gap-3">
                                <a href="#" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <button class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
        
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-100 flex justify-between items-center text-xs font-bold text-gray-400">
            <span>Showing 1 to 10 of 42 dishes</span>
            <div class="flex gap-2">
                <button class="px-3 py-1 rounded border border-gray-200 bg-white hover:bg-gray-50">Prev</button>
                <button class="px-3 py-1 rounded border border-gray-200 bg-white hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection