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
Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('clients.beranda-client');
});

Route::get('/beranda-admin', function () {
    return view('admin.beranda-admin');
});

Route::get('/dashboard-toko-client', function () {
    return view('clients.dashboard-toko-client');
});

Route::get('/dashboard-toko-admin', function () {
    return view('admin.dashboard-toko-admin');
});

// controller
Route::get('/', 'App\Http\Controllers\BerandaController@produkUser');
Route::get('/beranda-admin', 'App\Http\Controllers\BerandaController@produkAdmin');
Route::get('/dashboard-toko-client', 'App\Http\Controllers\BerandaController@produkKategoriClient');
Route::get('/dashboard-toko-admin', 'App\Http\Controllers\BerandaController@produkKategoriAdmin');
