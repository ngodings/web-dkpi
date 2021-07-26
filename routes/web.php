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
    return view('template.index');
});

//Jadwal
Route::get('/mahasiswa', 'App\Http\Controllers\C_Mahasiswa@index');
Route::get('/mahasiswa/create', 'App\Http\Controllers\C_Mahasiswa@create');
Route::post('/mahasiswa/store', 'App\Http\Controllers\C_Mahasiswa@store');
Route::get('/mahasiswa/edit/{id}', 'App\Http\Controllers\C_Mahasiswa@edit');
Route::put('/mahasiswa/update/{id}', 'App\Http\Controllers\C_Mahasiswa@update');
Route::get('/mahasiswa/delete/{id}', 'App\Http\Controllers\C_Mahasiswa@delete');
