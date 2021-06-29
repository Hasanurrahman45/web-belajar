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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('matkul', 'MatkulController@index')->name('matkul');
Route::get('tambah-matkul', 'MatkulController@create')->name('tambah.matkul');
Route::post('simpan-matkul', 'MatkulController@store')->name('simpan.matkul');

Route::get('edit-matkul/{id}', 'MatkulController@edit')->name('edit.matkul');
Route::post('update-matkul/{id}', 'MatkulController@update')->name('update.matkul');
Route::get('hapus-matkul/{id}', 'MatkulController@destroy')->name('hapus.matkul');