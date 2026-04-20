@extends('layouts.admin')

@section('content')
<div class="py-6">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
        <div>
            <h1 class="text-4xl font-black text-text">Menage <span class="text-brand">Users</span></h1>
            <p class="text-gray-500 font-medium">Manage your Users.</p>
        </div>
        
        <div class="flex gap-3">
            <button class="bg-white border border-brand-100 px-4 py-2 rounded-xl font-bold text-sm hover:bg-brand-light transition">Export List</button>
            <a href="/admin/users/create" class="btn-primary !py-2 !px-5 !text-sm">Add User +</a>
        </div>
    </div>

    <div class="bg-white rounded-[2rem] shadow-sm border border-brand-100 overflow-hidden">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100">
                    <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">ID</th>
                    <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Name&Email</th>
                    <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Account creation</th>
                    <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Role</th>
                    <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($users as $user)
                <tr class="hover:bg-brand-light/20 transition-colors">
                    <td class="p-6">
                        <p class="font-bold text-text"> {{ $user->id }}</p>
                    </td>
                    <td class="p-6">
                        <p class="font-bold text-text">{{ $user->name }}</p>
                        <p class="text-xs text-gray-400">{{ $user->email }}</p>
                    </td>
                    <td class="p-6">
                        <p class="font-bold text-text">{{ $user->created_at }}</p>
                    </td>
                    <td class="p-6">
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-black uppercase rounded-full">{{ $user->role }}</span>
                    </td>
                    <td class="p-6 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="/admin/users/{{ $user->id }}/edit" class="p-2 text-gray-400 hover:text-brand hover:bg-brand-light rounded-lg transition-all">
                                Edit
                            </a>
                            <form method="POST" action="/admin/users/{{ $user->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="p-2 text-gray-400 hover:text-red-600 rounded-lg">×</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection