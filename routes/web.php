<?php

use App\Http\Controllers\ClientController;
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
Route::get('/', 'App\Http\Controllers\ProdukController@home');
Route::get('/about', function () {
    return view('client.about');
});
Route::get('/contact', function () {
    return view('client.contact');
});
Route::get('/shop', 'App\Http\Controllers\ProdukController@shop');

//Routing Admin
Route::group(['middleware' => ['cek-login:0']], function () {
    Route::get('admin/dashboard', 'App\Http\Controllers\PromosiController@resultPromosi');
    //produk
    Route::get('admin/produk', 'App\Http\Controllers\ProdukController@read');
    Route::post('tambah-produk', 'App\Http\Controllers\ProdukController@create');
    Route::delete('/delete-produk{id}', 'App\Http\Controllers\ProdukController@delete')->name('delete-produk');
    Route::put('/update-produk/{Produk}', 'App\Http\Controllers\ProdukController@update')->name('update-produk');

    //kategori
    Route::get('admin/kategori', 'App\Http\Controllers\KategoriController@read');
    Route::post('tambah-kategori', 'App\Http\Controllers\KategoriController@create');
    Route::delete('/delete-kategori{id}', 'App\Http\Controllers\KategoriController@delete')->name('delete-kategori');

    //promosi
    Route::get('admin/promosi', 'App\Http\Controllers\PromosiController@read');
    Route::post('tambah-promosi', 'App\Http\Controllers\PromosiController@create');
    Route::delete('/delete-promosi{id}', 'App\Http\Controllers\PromosiController@delete')->name('delete-promosi');
    Route::put('/update-promosi/{Produk}', 'App\Http\Controllers\PromosiController@update')->name('update-promosi');
});
