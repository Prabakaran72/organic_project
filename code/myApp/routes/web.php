<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('index');
});
Route::get('/home', function () {
    return view('layouts.page.home');
})->name('home');
Route::get('/about', function () {
    return view('layouts.page.about');
})->name('about');
Route::get('/contact', function () {
    return view('layouts.page.contact');
})->name('contact');
Route::get('/product', function () {
    return view('layouts.page.product');
})->name('product');
Route::get('/login', function () {
    return view('layouts.page.login');
})->name('login');
Route::get('/cart', function () {
    return view('layouts.page.cart');
})->name('cart');
Route::get('/wishlist', function () {
    return view('layouts.page.wishlist');
})->name('wishlist');


Route::post('verifylogin', [AuthController::class, 'verify'])->name('verifylogin');
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');



