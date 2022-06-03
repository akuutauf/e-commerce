<?php

use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\DetailsProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsItm;
use App\Http\Controllers\FrontEnd\BerandaAdmin;

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

// routes view
Route::get('/', function () {
    return view('login');
});

Route::get('/login-obugame', function () {
    return view('login');
});

Route::get('/dashboard-toko-customer', function () {
    return view('customer.dashboard-toko-customer');
});

Route::get('/add-produk', function () {
    return view('admin.tambah-produk');
});

// resource
Route::resource('productsitm', 'App\Http\Controllers\ProductsItm');
Route::resource('beranda-admin', 'App\Http\Controllers\BerandaAdmin');
Route::resource('beranda-customer', 'App\Http\Controllers\BerandaCustomer');
Route::resource('details-product', 'App\Http\Controllers\DetailsProduct');
Route::resource('productsitm', 'App\Http\Controllers\ProductsItm');
Route::resource('dashboard-toko-admin', 'App\Http\Controllers\DashboardAdmin');

// get route from resource
Route::get('/kelola-produk', [ProductsItm::class, 'index']);
Route::get('/beranda_admin', [ProductsItm::class, 'index']);
Route::get('/beranda_customer', [ProductsItm::class, 'index']);
Route::get('/details_product/{id}/show', [DetailsProduct::class, 'show']);
Route::get('/productsitm/{id}/show', [ProductsItm::class, 'show']);
Route::get('/dashboard-toko-admin', [DashboardAdmin::class, 'index']);

// controller
Route::get('/dashboard-toko-customer', 'App\Http\Controllers\BerandaController@produkKategoriClient');

// not use controller
// Route::get('/beranda-admin', 'App\Http\Controllers\BerandaController@produkAdmin');
// Route::get('/beranda-customer', 'App\Http\Controllers\BerandaController@produkUser');
// Route::get('/dashboard-toko-admin', 'App\Http\Controllers\BerandaController@produkKategoriAdmin');
// Route::get('product/add', [\App\Http\Controllers\ProductObugami::class, 'produk']);
// Route::put('/updateitm1/{DocEntry}',[ProductsItm::class, 'updateData']);
// Route::put('/updateitm1/{DocEntry}',[ProductsItm::class, 'update']);
// Route::get('/kelola-produk', [ProductsItm::class, 'index']);
// Route::get('/beranda-admin', [ProductsItm::class, 'index']);
// Route::post('/dashboard-toko-admin/{id}', 'App\Http\Controllers\ProductsItm');
// Route::get('/dashboard-toko-admin/{id}', 'App\Http\Controllers\ProductsItm');

// not use view
// Route::get('/edit-produk', function () {
//     return view('admin.edit-produk');
// });

// Route::get('/beranda-admin', function () {
//     return view('admin.beranda-admin');
// });

// Route::get('/detail-produk', function () {
//     return view('detail-produk');
// });

// Route::get('/delete-produk', function () {
//     return view('admin.delete-produk');
// });

// Route::get('/beranda-customer', function () {
//     return view('customer.beranda-customer');
// });

// Route::get('/dashboard-toko-admin', function () {
//     return view('admin.dashboard-toko-admin');
// });
