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

use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('layouts.landing');
});
Route::resource('pengaduan', 'PengaduanController');
Route::resource('tanggapan', 'TanggapanController');

Route::get('/init', 'HomeController@init')->name('init');

Route::middleware('auth')->group(function(){
    Route::group(['prefix'=>'/admin', 'as'=>'admin.', 'middleware'=>'admin'], function(){
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    });

    Route::group(['prefix'=>'/petugas', 'as'=>'petugas.', 'middleware'=>'petugas'], function(){
        Route::get('/dashboard', 'PetugasController@index')->name('dashboard');
    });

    Route::group(['prefix'=>'/masyarakat', 'as'=>'masyarakat.', 'middleware'=>'masyarakat'], function(){
        Route::get('/dashboard', 'MasyarakatController@index')->name('dashboard');
    });
});

Auth::routes();
