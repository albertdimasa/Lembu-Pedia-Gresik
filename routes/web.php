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

//Routing Client
Route::get('/', function () {
    return view('client.home');
});

//Routing Admin 
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/produk', function () {
        return view('admin.produk');
    });
    Route::get('/kategori', function () {
        return view('admin.kategori');
    });
    Route::get('/promosi', function () {
        return view('admin.promosi');
    });
});
