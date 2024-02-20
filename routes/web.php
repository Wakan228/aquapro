<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController
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

Route::get('/', function () {
    return view('app/main');
})->name('main');

Route::get('/login', [App\Http\Controllers\HomeController::class, 'aboutCompany'])->name('login');
Route::post('/register', [RegisterController::class, 'aboutCompany'])

Route::get('/aboutCompany', [App\Http\Controllers\HomeController::class, 'aboutCompany'])->name('aboutCompany');
Route::get('/aboutWater', [App\Http\Controllers\HomeController::class, 'aboutWater'])->name('aboutWater');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contacts');
Route::get('/delivery', [App\Http\Controllers\HomeController::class, 'delivery'])->name('delivery');
Route::get('/stock', [App\Http\Controllers\HomeController::class, 'stock'])->name('stock');
Route::get('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/stock/kupy-kuler-ta-otrymaj-2-butli-vody-u-podarunok', function () {
    return view('stock/kupy-kuler-ta-otrymaj-2-butli-vody-u-podarunok');
})->name('kupy-kuler-ta-otrymaj-2-butli-vody-u-podarunok');
Route::get('/stock/novym-kliyentam-butel-vody-u-podarunok-ta-znyzhka', function () {
    return view('stock/novym-kliyentam-butel-vody-u-podarunok-ta-znyzhka');
})->name('novym-kliyentam-butel-vody-u-podarunok-ta-znyzhka');
Route::get('/stock/privedi-druga-i-poluchi-butyl-vody-besplatno', function () {
    return view('stock/privedi-druga-i-poluchi-butyl-vody-besplatno');
})->name('privedi-druga-i-poluchi-butyl-vody-besplatno');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
