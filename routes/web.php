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
    return view('Base');
});

Route::get('Mi_menu', function () {
    return view('Menu');
});

Route::get('ingresar_niño', 'NiñoController@index');

Route::get('Contactos_pendiente','NiñoController@MostrarNiñosParaLlamar');

Route::post('ingresar_niño', 'NiñoController@crear');
