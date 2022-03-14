<?php

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
    return view('welcome');
});

Route::resource('mahasiswa','MahasiswaController');
Route::resource('petugas','PetugasController');
Route::resource('buku','BukuController');
Route::resource('kategori','KategoriController');

Route::post('/mahasiswa', 'MahasiswaController@store');
Route::post('/petugas', 'PetugasController@store');
Route::post('/buku', 'BukuController@store');
Route::post('/kategori', 'KategoriController@store');