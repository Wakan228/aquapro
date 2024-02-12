<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    static function aboutCompany(){
        return view('app/aboutCompany');
   }
   static function aboutWater(){
        return view('app/aboutWater');
   }
   static function blog(){
        return view('app/blog');
   }
   static function contacts(){
        return view('app/contacts');
   }
   static function delivery(){
        return view('app/delivery');
   }
   static function stock(){
        return view('app/stock');
   }
   static function store(){
        return view('app/store');
   }
   static function cart(){
        return view('app/cart');
   }
   static function login(){
        return view('app/login');
   }


}
