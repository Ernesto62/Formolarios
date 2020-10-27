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

    Route::get('contactos','App\Http\Controllers\FormContreller@mostrarForm')->name('mostrar.form');

    Route::post('contactos','App\Http\Controllers\FormContreller@processarForm')->name('processar.form');

    Route::get('/','App\Http\Controllers\FormContreller@index')->name('index');

    Route::get('/entrada','App\Http\Controllers\FormContreller@index')->name('entrada');


 