<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Phone extends Model
{
    use HasFactory;

    static function setVerificationCodePhone($request)
    {
        return DB::table("phone_verification_codes")->insert([
            'ip' => $request->ip(),
            'phone' => $request->phone,
            'code' => random_int(100000, 999999),
            'expires_at' => now()->addSeconds(config("phone_auth.expire_seconds")),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    static function setVerificationConfirm($data)
    {
        return DB::table("confirmed_phones")->insert([
            'ip' => $data['ip'],
            'user_id' => $data['user_id'],
            'phone' => $data['phone'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    static function getLastRecordCode($attribute, $phone)
    {
        return  DB::table('phone_verification_codes')
            ->where($attribute, $phone)
            ->latest('created_at')
            ->first();
    }
    static function getExpiresCodeAt($code)
    {
        return  DB::table('phone_verification_codes')
            ->where('code', $code)
            ->latest('created_at')
            ->first();
    }
    static function getVerification($data)
    {
        return  DB::table('phone_verification_codes')
            ->where('code', $data['code'])
            ->where('phone', $data['phone'])
            ->latest('created_at')
            ->first();
    }
}
