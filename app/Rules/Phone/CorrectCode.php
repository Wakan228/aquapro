<?php

namespace App\Rules\Phone;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Phone;

class CorrectCode implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $ExpiresCode =  Phone::getExpiresCodeAt($value);
        if (!$ExpiresCode) {
            $fail('Incorrect code');
        }

        if ($ExpiresCode && now()->diffInSeconds($ExpiresCode->expires_at, false) < 0) {
            $fail('Time out');
        }
    }
}
