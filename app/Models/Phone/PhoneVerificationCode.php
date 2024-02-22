<?php

namespace App\Models\Phone;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneVerificationCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'phone',
        'code',
        'expires_at',
        'created_at',
        'updated_at',
    ];
    static function setVerificationCodePhone($request)
    {
        return PhoneVerificationCode::create([
            'ip' => $request->ip(),
            'phone' => $request->phone,
            'code' => random_int(100000, 999999),
            'expires_at' => now()->addSeconds(config("phone_auth.expire_seconds")),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    static function getLastRecordCode($phone)
    {
        return  PhoneVerificationCode::where('phone', $phone)
            ->latest('created_at')
            ->first();
    }
}
