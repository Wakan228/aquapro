<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone\ConfirmedPhone;
use App\Http\Controllers\Auth\PhoneController;
use App\Http\Requests\Phone;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    static function aboutCompany()
    {
        return view('app/aboutCompany');
    }
    static function aboutWater()
    {
        return view('app/aboutWater');
    }
    static function blog()
    {
        return view('app/blog');
    }
    static function contacts()
    {
        return view('app/contacts');
    }
    static function delivery()
    {
        return view('app/delivery');
    }
    static function stock()
    {
        return view('app/stock');
    }
    static function store()
    {
        return view('app/store');
    }
    static function cart()
    {
        return view('app/cart');
    }
    static function login()
    {
        return view('auth/login');
    }
    static function editAccount()
    {
        return view('auth/edit');
    }
    static function setVerificationCode(Request $request)
    {
        return PhoneController::setVerificationCodePhone($request->phone, $request->ip());
    }
    static function UpdateUser(Request $request)
    {
        if (PhoneController::isUniqPhone($request->phone, Auth::user()->id)) {
            return ['status' => 301];
        } else {
            return PhoneController::setVerificationCodePhone($request->phone, $request->ip());
        }
    }
    static function UpdateUserCode(Request $request)
    {
        return UserController::existCode($request->input(), Auth::user()->id, $request->ip());
    }
    static function UpdateUserWithoutCode(Request $request)
    {
        return UserController::updateUser($request->input(), Auth::user()->id);
    }
}
