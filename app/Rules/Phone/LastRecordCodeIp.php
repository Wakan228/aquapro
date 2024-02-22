<?php

namespace App\Rules\Phone;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Phone;
use Illuminate\Http\Request;

class LastRecordCodeIp implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $lastRecord =  Phone::getLastRecordCode($attribute, $value);

        if ($lastRecord && now()->diffInSeconds($lastRecord->expires_at, false) < 0) {
            $fail(__("messages.You can resend the SMS via") . " : " . (config("phone_auth.next_send_after") - now()->diffInSeconds($lastRecord->created_at)) . 's');
        }
    }
}
