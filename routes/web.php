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
    return view('Menu');
});

Route::get('Mi_menu', function () {
    return view('Menu');
});

Route::get('ingresar_niño', 'NiñoController@pagCrear');

Route::get('contactos_pendientes', 'NiñoController@MostrarNiñosParaLlamar');

Route::post('ingresar_niño', 'NiñoController@Crear');

Route::post('ingresar_tutor', 'TutorController@InsertarDatos');

Route::get('Contactar_niño', 'NiñoController@Contactar');

Route::get('Cambiar_status_contacto', 'NiñoController@CambiarStatusContacto');

Route::get('pantalla_asignar_Citas', 'OrdenDiagnosticoController@MostrarCitasPendientes');

Route::get('mostrar_citas_niño', 'OrdenDiagnosticoController@PantallaMostrarCitasNiño');

Route::get('crear_cita', 'CitaController@PantallaAsignarCitasNiño');

Route::get('ingreso_profesional', 'UsuarioController@IngresoProfesional');

Route::post('crear_Profesional', 'UsuarioController@CrearProfesional');

Route::post('insertar_cita', 'CitaController@InsertarCita');
