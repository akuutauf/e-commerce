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

// routes view
Route::get('/', function () {
    return view('login');
});

Route::get('/login-obugame', function () {
    return view('login');
});

Route::get('/beranda-customer', function () {
    return view('customer.beranda-customer');
});

Route::get('/beranda-admin', function () {
    return view('admin.beranda-admin');
});

Route::get('/dashboard-toko-customer', function () {
    return view('customer.dashboard-toko-customer');
});

Route::get('/dashboard-toko-admin', function () {
    return view('admin.dashboard-toko-admin');
});

Route::get('/kelola-produk', function () {
    return view('admin.kelola-produk');
});

Route::get('/edit-produk', function () {
    return view('admin.edit-produk');
});

Route::get('/add-produk', function () {
    return view('admin.tambah-produk');
});

// controller
Route::get('/beranda-customer', 'App\Http\Controllers\BerandaController@produkUser');
Route::get('/beranda-admin', 'App\Http\Controllers\BerandaController@produkAdmin');
Route::get('/dashboard-toko-customer', 'App\Http\Controllers\BerandaController@produkKategoriClient');
Route::get('/dashboard-toko-admin', 'App\Http\Controllers\BerandaController@produkKategoriAdmin');
