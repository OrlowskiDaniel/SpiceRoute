@extends('layouts.admin')

@section('content')
<div class="max-w-2xl">
    <div class="mb-8">
        <a href="/admin/users" class="text-sm font-bold text-brand hover:underline">&larr; Back to Users</a>
        <h1 class="text-4xl font-black text-text mt-2">Edit <span class="text-brand">User</span></h1>
    </div>

    <form action="/admin/users/{{ $user->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-brand-100 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="input-field" required>
                </div>
                <div>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="input-field" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="form-label">New Password <span class="text-gray-400 font-normal">(leave blank to keep)</span></label>
                    <input type="password" name="password" class="input-field" placeholder="••••••••">
                </div>
                <div>
                    <label class="form-label">Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="input-field" placeholder="••••••••">
                </div>
            </div>

            <div>
                <label class="form-label">Role</label>
                <select name="role" class="input-field">
                    @foreach(['staff', 'admin', 'customer'] as $role)
                        <option value="{{ $role }}" {{ old('role', $user->role ?? '') === $role ? 'selected' : '' }}>
                            {{ ucfirst($role) }}
                        </option>
                    @endforeach
                </select>
            </div>

            @if($errors->any())
                <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                    @foreach($errors->all() as $error)
                        <p class="text-sm text-red-600 font-medium">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <button type="submit" class="btn-primary w-full py-4 text-lg shadow-xl shadow-brand/20 mt-6">
            Update User
        </button>
    </form>
</div>
@endsection