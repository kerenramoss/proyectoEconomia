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
    return view('landigpage');
});

//Route::get('home/','App\Http\Controllers\controllerHome@index')->name('home.index');
//Route::get('home/{depto}','App\Http\Controllers\controllerHome@home')->name('home.home');

Route::resource('ingresar',App\Http\Controllers\controllerLogin::class);

Route::resource('home',App\Http\Controllers\controllerHome::class);

Route::get('anuncios/{id}','App\Http\Controllers\controllerHome@anuncioDetalle');

Route::resource('RegistroArrendador',App\Http\Controllers\ControllerRegistro::class);

Route::resource('RegistroArrendatario',App\Http\Controllers\ControllerRegistroArrendatario::class);
//Route::post("registroA",'App\Http\Controllers\controllerRegistro@index');
/*


Route::get('login','App\Http\Controllers\controllerlogin@index');



Route::get("registro",'App\Http\Controllers\controllerRegistro@index');*/


