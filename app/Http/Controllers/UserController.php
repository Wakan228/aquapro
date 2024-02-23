<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\UserUpdate;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\Auth\PhoneController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    static function existCode($request, $userId, $ip)
    {
        $status = PhoneController::setVerification(['phone' => $request['phone'], 'code' => $request['code'], 'user_id' => $userId, 'ip' => $ip]);
        if ($status['status'] == 200) {
            return self::updateUser($request, $userId);
        } else {
            return Redirect::back()->withErrors($status['message'])->withInput();
        }
    }
    static function updateUser($request, $userId)
    {
        $user = User::getPhoneById($userId);
        $validator = Validator::make($request, [
            'phone' => ['required', 'regex:/^\+380(\d{9})$/'],
            'name' => ['max:100'],
            'surname' => ['max:100'],
            'display_name' => ['max:100'],
            'email' => ['required', 'string', 'email', 'max:320', Rule::unique('users')->ignore($userId)],
            'password' => ['nullable', 'confirmed', 'min:8', 'max:30'],
            'password_current' => ['nullable', 'max:30']
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }
        if ($request['password_current'] && $request['password']  && Hash::check($request['password_current'], $user->password)) {
            $request['confirmePassword'] = $request['password'];
        }

        User::updateUser($request, $userId);

        return redirect()->route('my-account.edit-account');
    }
}
