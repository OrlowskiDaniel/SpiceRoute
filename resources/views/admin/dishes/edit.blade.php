@extends('layouts.admin')

@section('content')
<div class="max-w-4xl">
    <div class="mb-8">
        <a href="/admin/dishes" class="text-sm font-bold text-brand hover:underline">&larr; Back to Dishes</a>
        <h1 class="text-4xl font-black text-text mt-2">Edit <span class="text-brand">Dish</span></h1>
    </div>

    <form action="/admin/dishes/{{ $dish->id }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        @method('PUT')

        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-brand-100">
                <div class="space-y-6">
                    <div>
                        <label class="form-label">Dish Name</label>
                        <input type="text" name="name" value="{{ old('name', $dish->name) }}" class="input-field" required>
                    </div>

                    <div>
                        <label class="form-label">Description</label>
                        <textarea name="description" rows="5" class="input-field">{{ old('description', $dish->description) }}</textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="form-label">Price (€)</label>
                            <input type="number" step="0.01" name="price" value="{{ old('price', $dish->price) }}" class="input-field" required>
                        </div>
                        <div>
                            <label class="form-label">Category</label>
                            <select name="category" class="input-field">
                                @foreach(['curry', 'tandoor', 'starter', 'side'] as $cat)
                                    <option value="{{ $cat }}" {{ $dish->category === $cat ? 'selected' : '' }}>
                                        {{ ucfirst($cat) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-brand-100">
                <label class="form-label">Dish Image</label>

                {{-- Current image preview --}}
                <div class="mb-3">
                    <img id="imagePreview" src="{{ $dish->image }}" class="w-full h-32 object-cover rounded-xl border border-brand-100">
                </div>

                <div class="flex flex-col items-center justify-center border-2 border-dashed border-brand-200 rounded-2xl p-4 hover:border-brand transition-colors cursor-pointer group"
                     onclick="document.getElementById('imageInput').click()">
                    <span class="text-3xl">📸</span>
                    <p class="text-xs font-bold text-gray-400 group-hover:text-brand mt-1">Click to replace image</p>
                    <input type="file" name="image" class="hidden" id="imageInput" accept="image/*">
                </div>
            </div>

            <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-brand-100">
                <label class="form-label mb-4">Attributes</label>
                <div class="space-y-3">
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="checkbox" name="is_spicy" value="1"
                               {{ $dish->is_spicy ? 'checked' : '' }}
                               class="w-5 h-5 rounded border-brand-200 text-brand focus:ring-brand">
                        <span class="text-sm font-medium text-text group-hover:text-brand">Mark as Spicy 🔥</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="checkbox" name="is_popular" value="1"
                               {{ $dish->is_popular ? 'checked' : '' }}
                               class="w-5 h-5 rounded border-brand-200 text-brand focus:ring-brand">
                        <span class="text-sm font-medium text-text group-hover:text-brand">Feature as Popular ⭐</span>
                    </label>
                </div>
            </div>

            <button type="submit" class="btn-primary w-full py-5 text-xl shadow-xl shadow-brand/20">
                Update Dish
            </button>
        </div>
    </form>
</div>

<script>
    document.getElementById('imageInput').onchange = evt => {
        const [file] = document.getElementById('imageInput').files;
        if (file) {
            document.getElementById('imagePreview').src = URL.createObjectURL(file);
        }
    }
</script>
@endsection