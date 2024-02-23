<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdate extends FormRequest
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
        return [
            //
            'phone' => ['required', 'regex:/^\+380(\d{9})$/', 'unique:users'],
            'name' => ['max:100'],
            'surname' => ['max:100'],
            'display_name' => ['max:100'],
            'email' => ['required', 'string', 'email', 'max:320', 'unique:users']
        ];
    }
}
