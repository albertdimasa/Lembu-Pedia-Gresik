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

//auth
Route::get('/admin', function () {
    return view('admin.index');
});

//admin
Route::get('/', function () {
    return view('client.home');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/produk', function () {
    return view('admin.produk');
});
Route::get('/admin/kategori', function () {
    return view('admin.kategori');
});
Route::get('/admin/promosi', function () {
    return view('admin.promosi');
});