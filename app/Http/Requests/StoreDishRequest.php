<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'        => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price'       => ['required', 'numeric', 'min:0'],
            'category'    => ['required', 'string'],
            'image'       => ['nullable', 'image', 'max:2048'],
            'is_spicy'    => ['nullable', 'boolean'],
            'is_popular'  => ['nullable', 'boolean'],
        ];
    }
}