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

//Auth
Route::get('/admin', function () {
    return view('admin.index');
});
Route::post('/admin-login', 'App\Http\Controllers\AuthController@login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

//Routing Client
Route::get('/', function () {
    return view('client.home');
});
Route::get('/about', function () {
    return view('client.about');
});
Route::get('/contact', function () {
    return view('client.contact');
});
Route::get('/shop', function () {
    return view('client.shop');
});

//Routing Admin
Route::group(['middleware' => ['cek-login:0']], function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('admin/produk', function () {
        return view('admin.produk');
    });
    Route::get('admin/kategori', function () {
        return view('admin.kategori');
    });
    Route::get('admin/promosi', function () {
        return view('admin.promosi');
    });
});