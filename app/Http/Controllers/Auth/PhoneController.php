<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhoneSendMessage;
use Illuminate\Http\Request;
use App\Models\Phone\PhoneVerificationCode;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Phone\PhoneSetVerificationCode;
use Illuminate\Support\Facades\Auth;
use App\Rules\Phone\LastRecordCode;
use App\Models\User;
use App\Models\Phone;
use App\Http\Controllers\UserController;
use App\Rules\Phone\CorrectCode;
use Illuminate\Support\Facades\Redirect;


class PhoneController extends Controller
{
    //
    static public  function setVerificationCodePhone($phone, $ip)
    {
        $validator = Validator::make(['phone' => $phone, 'ip' => $ip], [
            'phone' => ['required', 'regex:/^\+380(\d{9})$/', 'unique:confirmed_phones', 'unique:users', new LastRecordCode],
            'ip' => ['required', new LastRecordCode]
        ]);

        if ($validator->fails()) {
            return  ['message' => $validator->errors(), 'status' => '400'];
        }
        $VerificationCode = PhoneVerificationCode::setVerificationCodePhone($phone, $ip);
        PhoneSendMessage::send($VerificationCode->phone, $VerificationCode->code);
        return  ['time_out' => (now()->diffInSeconds($VerificationCode->expires_at)), 'status' => 201];
    }
    static function isUniqPhone($phone, $user_id)
    {
        return Phone::isUniqPhone($phone, $user_id);
    }

    static public  function sendMassage()
    {
    }
    static public  function setVerification($data)
    {
        $validator = Validator::make($data, [
            'code' => ['required', 'min:6', 'max:6', new CorrectCode],
            'phone' => ['required', 'regex:/^\+380(\d{9})$/', 'unique:users']
        ]);
        if ($validator->fails()) {

            return  ['message' => $validator->errors(), 'status' => 400];
        }
        Phone::deleteVerificationCode($data);
        Phone::setVerificationConfirm($data);
        return ['status' => 200];
    }
}
