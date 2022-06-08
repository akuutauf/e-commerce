<?php

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

// Route::get('/kelola-promo', function () {
//     return view('admin.kelola-promo');
// });

// Route::get('/add-promo', function () {
//     return view('admin.tambah-promo');
// });

Route::get('/edit-promo', function () {
    return view('admin.edit-promo');
});

Route::get('/delete-promo', function () {
    return view('admin.delete-promo');
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


/* not use controller
Route::get('/dashboard-toko-customer', 'App\Http\Controllers\BerandaController@produkKategoriClient');
Route::get('/beranda-admin', 'App\Http\Controllers\BerandaController@produkAdmin');
Route::get('/beranda-customer', 'App\Http\Controllers\BerandaController@produkUser');
Route::get('/dashboard-toko-admin', 'App\Http\Controllers\BerandaController@produkKategoriAdmin');
*/

/* not use resource get
Route::get('product/add', [\App\Http\Controllers\ProductObugami::class, 'produk']);
Route::put('/updateitm1/{DocEntry}',[ProductsItm::class, 'updateData']);
Route::put('/updateitm1/{DocEntry}',[ProductsItm::class, 'update']);
Route::get('/kelola-produk', [ProductsItm::class, 'index']);
Route::get('/beranda-admin', [ProductsItm::class, 'index']);
Route::post('/dashboard-toko-admin/{id}', 'App\Http\Controllers\ProductsItm');
Route::get('/dashboard-toko-admin/{id}', 'App\Http\Controllers\ProductsItm');
Route::get('/dashboard_toko_customer', [DashboardTokoCustomer::class, 'index']);
*/

/* not use view
Route::get('/login', function () {
     return view('login');
});

Route::get('/edit-produk', function () {
    return view('admin.edit-produk');
});

Route::get('/beranda-admin', function () {
    return view('admin.beranda-admin');
});

Route::get('/detail-produk', function () {
    return view('detail-produk');
});

Route::get('/delete-produk', function () {
    return view('admin.delete-produk');
});

Route::get('/beranda-customer', function () {
    return view('customer.beranda-customer');
});

Route::get('/dashboard-toko-admin', function () {
    return view('admin.dashboard-toko-admin');
});

Route::get('/add-produk', function () {
    return view('admin.tambah-produk');
});

Route::get('/dashboard-toko-customer', function () {
    return view('customer.dashboard-toko-customer');
});
*/

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
    Route::get('/kelola-promo',[PromoProducts::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
