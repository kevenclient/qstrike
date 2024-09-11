<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFactoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'factory_name' => ['required', 'string'],
            'location' => ['required', 'string'],
            'email' => ['email', 'nullable'],
            'website' => ['url', 'nullable'],
        ];
    }
}
