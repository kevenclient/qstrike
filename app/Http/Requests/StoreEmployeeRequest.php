<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'factory_id' => 'factory',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'factory_id' => ['required', 'exists:factories,id'],
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'email' => ['email', 'nullable'],
            'phone' => ['string', 'nullable'],
        ];
    }
}
