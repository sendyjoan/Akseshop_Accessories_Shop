<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\stokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\stokPageController;
use App\Http\Controllers\OrderUserController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Artisan;

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

// Route::get('/', [LandingPageController::class, 'landingpage']); //Menampilkan Landing Page
// Route::get('/about', [LandingPageController::class, 'aboutus']); //Menampilkan Halaman About Us
// Route::get('/product', [LandingPageController::class, 'product']); //Menampilkan Halaman Product

Route::get('/mysql', function () {
    // Artisan::call('migrate:rollback', ['--force' => true]);
    Artisan::call('migrate', ['--force' => true]);
    Artisan::call('db:seed', ['--force' => true]);
});

Route::prefix('dashboard')->group(function () {
    Route::resource('users', UserController::class)->middleware('checkRole: 1');
    Route::resource('products', ProductController::class)->middleware('checkRole: 1');
    Route::resource('categories', CategoryController::class)->middleware('checkRole: 1');
    Route::resource('addstok', stokController::class)->middleware('checkRole: 1');
    Route::resource('/', AdminController::class)->middleware('checkRole: 1');
    Route::resource('orders', OrderAdminController::class)->middleware('checkRole: 1');    
});

Route::prefix('/')->group(function () {
    Route::get('/', [LandingPageController::class, 'landingpage']);
    Route::get('about', [LandingPageController::class, 'aboutus']); //Menampilkan Halaman About Us
    Route::resource('barang', BarangController::class)->middleware('checkRole: 2');
    Route::resource('chart', ChartController::class)->middleware('checkRole: 2');
    Route::resource('checkout', OrderUserController::class)->middleware('checkRole: 2');
    Route::get('/checkout/cetak/{id}', [OrderUserController::class, 'cetak'])->name('cetak')->middleware('checkRole: 2');
    // Route::get('checkout', [CheckoutController::class, 'index'])->middleware('checkRole: 2')->name('checkout');
});




// Route::get('/detail', function () {
//     return view('User/detailProduct');
// });

Route::get('/editProfile', function () {
    return view('User/editProfile');// Edit Profile User (RF)
});

// Route::get('/chart', function () {
//     return view('User/chart');// Show Chart
// })->middleware('checkRole:  2');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/cekout', function () {
//     return view('User/checkout');// Checkout Page
// });



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

//  Route::get('/kategori', function () {
//      return view('Admin/Kategori/kategoriIndex');// View List Kategori
//  });

// Route::get('/barang', function () {
//     return view('Admin/Barang/barangIndex');// View List Barang
// });
// Route::get('/transaksi', function () {
//     return view('admin/transaksi/transaksiIndex');// View List transaksi
// });


//route DETAIL
// Route::get('/detailCust', function () {
//     return view('admin/customer/detailCustomer');// View Detail Customer
// });

// Route::get('/detailBarang', function () {
//     return view('admin/barang/detailBarang');// View Detail Barang
// });

// Route::get('/detailTransaksi', function () {
//     return view('admin/transaksi/detailTransaksi');// View Detail Transaksi
// });


//Route UPDATE
// Route::get('/updateBarang', function () {
//     return view('admin/barang/updateBarang');// View Update Barang
// });

// Route::get('/updateKategori', function () {
//     return view('admin/kategori/updateKategori');// View Update kategori
// });

// Route::get('/createBarang', function () {
//     return view('admin/barang/createBarang');// View Tambah Barang
// });


//Route Create
// Route::get('/createKategori', function () {
//     return view('admin/kategori/createKategori');// View create kategori
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//  Route::get('/addStock', function () {
//      return view('Admin/stok/stokIndex');// View create kategori
//  });

// Route::get('/payment', function () {
//     return view('User/payment');// Checkout Page
// });



// Route::get('/struk', function () {
//     return view('User/tampilanStruk');// Checkout Page
// });

// Route::get('/payment', function () {
//     return view('User/payment');// Checkout Page
// });


Route::get('User/checkout/cetak_pdf',[CheckoutController::class,'cetak_pdf'])->name('cetak_pdf');