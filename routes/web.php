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
    return view('User/index');
});

Route::get('/product', function () {
    return view('User/product');
});

Route::get('/detail', function () {
    return view('User/detailProduct');
});

Route::get('/editProfile', function () {
    return view('User/editProfile');
});

Route::get('/chart', function () {
    return view('User/chart');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('User/About');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cekout', function () {
    return view('User/checkout');
});



Route::get('/alert', function () {
    return view('alert');
});

// admin
Route::get('/indexAdmin', function () {
    return view('Admin/indexAdmin');
});

// Route::get('/customerAdmin', function () {
//     return view('Admin/customerAdmin');
// });

Route::get('/customerAdmin', function () {
    return view('Admin/customer/customerAdmin');
});