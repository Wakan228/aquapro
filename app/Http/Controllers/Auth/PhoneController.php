<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhoneSendMessage;
use Illuminate\Http\Request;
use App\Models\Phone\PhoneVerificationCode;
use App\Http\Requests\Phone\PhoneSetVerificationCode;


class PhoneController extends Controller
{
    //
    public function setVerificationCodePhone(PhoneSetVerificationCode $request)
    {

        $VerificationCode = PhoneVerificationCode::setVerificationCodePhone($request);
        PhoneSendMessage::send($VerificationCode->phone, $VerificationCode->code);
        return  ['time_out' => (now()->diffInSeconds($VerificationCode->expires_at)), 'status' => 201];
    }
}
