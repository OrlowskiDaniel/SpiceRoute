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
            'name' => 'required|min:2',
            'description' => 'required|min:5',
            'price' => 'required|numeric|min:0',
            'category' => 'required|in:curry,tandoor,starter,side,drink',
            'image' => 'nullable|image|max:2048',
        ];
    }
}