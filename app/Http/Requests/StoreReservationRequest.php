<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            'guests' => 'required|integer|min:1|max:10',
            'status' => 'required',
        ];
    }
}