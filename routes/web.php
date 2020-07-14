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

Route::get('/', function () {
    return view('login');
})->middleware('guest')->name('login');
Route::get('/register', function () {
    return view('users.register');
})->middleware('guest')->name('register');
Route::post('/register', 'mainController@register')->middleware('guest');
Route::post('/login', 'mainController@login')->middleware('guest');

Route::get('/logout', 'mainController@logout')->name('logout');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');
    Route::resource('kategori', 'KategoriController');
    Route::resource('subkat', 'SubkategoriController');
    Route::resource('produk', 'ProdukController');
});