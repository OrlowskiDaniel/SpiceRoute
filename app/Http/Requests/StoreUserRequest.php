<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // On update, grab the user from the route to ignore their own email
        $userId = $this->route('user')?->id;
        
        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $userId,
            'password' => $this->isMethod('POST')
                            ? 'required|string|min:8|confirmed'
                            : 'nullable|string|min:8|confirmed',
            'role'     => 'nullable|string',
        ];
    }
}
