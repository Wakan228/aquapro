<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/aboutCompany', [App\Http\Controllers\HomeController::class, 'aboutCompany'])->name('aboutCompany');
Route::get('/aboutWater', [App\Http\Controllers\HomeController::class, 'aboutWater'])->name('aboutWater');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contacts');
Route::get('/delivery', [App\Http\Controllers\HomeController::class, 'delivery'])->name('delivery');
Route::get('/stock', [App\Http\Controllers\HomeController::class, 'stock'])->name('stock');
Route::get('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
