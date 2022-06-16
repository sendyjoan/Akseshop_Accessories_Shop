<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/', [LandingPageController::class, 'landingpage']); //Menampilkan Landing Page
Route::get('/about', [LandingPageController::class, 'aboutus']); //Menampilkan Halaman About Us
Route::get('/product', [LandingPageController::class, 'product']); //Menampilkan Halaman Product

Route::prefix('dashboard')->group(function () {
    Route::resource('users', UserController::class)->middleware('checkRole: 1');
    Route::resource('products', ProductController::class)->middleware('checkRole: 1');
    Route::resource('categories', CategoryController::class)->middleware('checkRole: 1');
    Route::get('/', [AdminController::class, 'index'])->middleware('checkRole: 1');    
});

Route::get('/detail', function () {
    return view('User/detailProduct');
});

Route::get('/editProfile', function () {
    return view('User/editProfile');// Edit Profile User (RF)
});

Route::get('/chart', function () {
    return view('User/chart');// Show Chart
})->middleware('checkRole: 2');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cekout', function () {
    return view('User/checkout');// Checkout Page
});



Route::get('/alert', function () {
    return view('alert');// View Not Found
});

// admin
// Route::get('/indexAdmin', function () {
//     return view('Admin/indexAdmin');// View Dashboard
// });

// Route::get('/customerAdmin', function () {
//     return view('Admin/customerAdmin');
// });

// Route::get('/customerAdmin', function () {
//     return view('Admin/customer/customerAdmin');//View List User
// });

// Route::get('/kategori', function () {
//     return view('Admin/Kategori/kategoriIndex');// View List Kategori
// });

// Route::get('/barang', function () {
//     return view('Admin/Barang/barangIndex');// View List Barang
// });
Route::get('/transaksi', function () {
    return view('admin/transaksi/transaksiIndex');// View List transaksi
});

Route::get('/detailCust', function () {
    return view('admin/customer/detailCustomer');// View Detail Customer
});