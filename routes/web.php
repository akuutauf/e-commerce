<?php

use App\Http\Controllers\CarouselPromo;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\DetailsProduct;
use App\Http\Controllers\DetailsProductCustomer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsItm;
use App\Http\Controllers\PromoProducts;
use App\Http\Controllers\SearchAdmin;
use App\Http\Controllers\SearchCustomer;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::get('/delete-promo', function () {
    return view('admin.delete-promo');
});

Route::get('/join-mitra', function () {
    return view('join-mitra');
});

// resource
Route::resource('beranda-customer', 'App\Http\Controllers\BerandaCustomer');
Route::resource('details-product-customer', 'App\Http\Controllers\DetailsProduct');
Route::resource('dashboard-toko-customer', 'App\Http\Controllers\DashboardTokoCustomer');
Route::resource('search-admin', 'App\Http\Controllers\SearchAdmin');
Route::resource('search-customer', 'App\Http\Controllers\SearchCustomer');

// get route from resource
Route::get('/beranda_customer', [ProductsItm::class, 'index']);
Route::get('/details_product_customer/{id}/show', [DetailsProductCustomer::class, 'show']);
Route::get('/search-admin', [SearchAdmin::class, 'index']);
Route::get('/search-customer', [SearchCustomer::class, 'index']);

Route::middleware(['auth'])->group(function () {
    // resource
    Route::resource('productsitm', 'App\Http\Controllers\ProductsItm');
    Route::resource('productsitm', 'App\Http\Controllers\ProductsItm');
    Route::resource('beranda-admin', 'App\Http\Controllers\BerandaAdmin');
    Route::resource('details-product', 'App\Http\Controllers\DetailsProduct');
    Route::resource('dashboard-toko-admin', 'App\Http\Controllers\DashboardAdmin');
    Route::resource('promoproducts', 'App\Http\Controllers\PromoProducts');

    // get route from resource
    Route::get('/kelola-produk', [ProductsItm::class, 'index']);
    Route::get('/beranda_admin', [ProductsItm::class, 'index']);
    Route::get('/dashboard-toko-admin', [DashboardAdmin::class, 'index']);
    Route::get('/details_product/{id}/show', [DetailsProduct::class, 'show']);
    Route::get('/productsitm/{id}/show', [ProductsItm::class, 'show']);
    Route::get('/kelola-promo', [PromoProducts::class, 'index']);
    Route::get('/promoproducts/{id}/show', [PromoProducts::class, 'show']);
});

Auth::routes([
    'register' => false, // mematikan halaman register
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
