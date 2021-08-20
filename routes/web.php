<?php

namespace App\Http\Controllers;

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
    return view('landigpage');
});


Route::resource('RegistroArrendador',ControllerRegistro::class);

Route::resource('ingresar',controllerLogin::class);

Route::resource('home',controllerHome::class);

Route::resource('AnunciosC',controllerAnuncio::class);

Route::resource('RegistroArrendatario',ControllerRegistroArrendatario::class);

Route::get('anuncios/{id}','App\Http\Controllers\controllerHome@anuncioDetalle');




