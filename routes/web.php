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
    return view('clients.beranda-client');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard-toko-client', function () {
    return view('clients.dashboard-toko-client');
});

Route::get('/register', function () {
    return view('register');
});

// controller
Route::get('/', 'App\Http\Controllers\BerandaController@produk');

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });
