<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/detail', function () {
    return view('detailProduct');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('About');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cekout', function () {
    return view('checkout');
});

