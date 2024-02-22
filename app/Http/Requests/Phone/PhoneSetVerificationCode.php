<?php

namespace App\Http\Requests\Phone;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Rules\Phone\LastRecordCode;
use App\Rules\Phone\LastRecordCodeIp;

class PhoneSetVerificationCode extends FormRequest
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
    public function rules()
    {
        return  [
            'phone' => ['required', 'regex:/^\+380(\d{9})$/', 'unique:confirmed_phones', 'unique:users', new LastRecordCode],
            // 'ip' => ['required', new LastRecordCodeIp]
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => 'Некорректный формат номера телефона. Пожалуйста, используйте формат +380XXXXXXXXX.',
            'phone.confirmed_phones' => 'Этот номер уже подтверждён',
        ];
    }
}
