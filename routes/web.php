<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Services\Localization\LocalizationService;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(
    [
        "prefix" => LocalizationService::locale(),
        "middleware" => 'setLocale'
    ],
    function () {
        Route::get('/', function () {
            return view('app/main');
        })->name('main');

        Route::post('/set-code-verify', [App\Http\Controllers\Auth\PhoneController::class, 'setVerificationCodePhone'])->name('set-code-verify');
        Route::get('/my-account/login-account', [App\Http\Controllers\HomeController::class, 'login'])->name('my-account.login-account');
        Route::get('/my-account/edit-account', [App\Http\Controllers\HomeController::class, 'editAccount'])->middleware('auth')->name('my-account.edit-account');
        Route::middleware(['auth'])->group(function () {
        });


        // Route::post('/register', [RegisterController::class])->name('registration');
        Auth::routes();

        Route::get('/aboutCompany', [App\Http\Controllers\HomeController::class, 'aboutCompany'])->name('aboutCompany');
        Route::get('/aboutWater', [App\Http\Controllers\HomeController::class, 'aboutWater'])->name('aboutWater');
        Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
        Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contacts');
        Route::get('/delivery', [App\Http\Controllers\HomeController::class, 'delivery'])->name('delivery');
        Route::get('/stock', [App\Http\Controllers\HomeController::class, 'stock'])->name('stock');
        Route::get('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
        Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
        Route::get('/stock/kupy-kuler-ta-otrymaj-2-butli-vody-u-podarunok', function () {
            return view('stock/kupy-kuler-ta-otrymaj-2-butli-vody-u-podarunok');
        })->name('kupy-kuler-ta-otrymaj-2-butli-vody-u-podarunok');
        Route::get('/stock/novym-kliyentam-butel-vody-u-podarunok-ta-znyzhka', function () {
            return view('stock/novym-kliyentam-butel-vody-u-podarunok-ta-znyzhka');
        })->name('novym-kliyentam-butel-vody-u-podarunok-ta-znyzhka');
        Route::get('/stock/privedi-druga-i-poluchi-butyl-vody-besplatno', function () {
            return view('stock/privedi-druga-i-poluchi-butyl-vody-besplatno');
        })->name('privedi-druga-i-poluchi-butyl-vody-besplatno');
    }
);




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
