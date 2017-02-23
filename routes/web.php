<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');	


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('jabatan', 'JabatanController');

Route::resource('golongan', 'GolonganController');

Route::resource('pegawai', 'PegawaiController');

Route::resource('kategorilembur', 'KategoriLemburController');

Route::resource('lemburpegawai', 'LemburPegawaiController');

Route::resource('tunjangan', 'TunjanganController');

Route::resource('tunjanganpegawai', 'TunjanganPegawaiController');

Route::resource('penggajian', 'PenggajianController');

Route::resource('gaji', 'PenggajianKaryawanController');

Route::resource('penggajianupdate', 'PenggajianKaryawanController');
