<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|filled',
            'description' => 'required|string|filled',
            'price' => 'required|numeric',
            'game_name' => 'required|string',
            'game_website' => 'required|string',
            'discount_price' => 'nullable|numeric',
        ];
    }
}
