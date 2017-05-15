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

Route::group(['middleware' => 'auth'], function() {

  Route::get('ingresar_nino', 'NinoController@pagCrear');

  Route::get('contactos_pendientes', 'NinoController@MostrarNinosParaLlamar');

  Route::post('ingresar_nino', 'NinoController@Crear');

  Route::post('ingresar_tutor', 'TutorController@InsertarDatos');

  Route::get('Contactar_nino', 'NinoController@Contactar');

  Route::get('Cambiar_status_contacto', 'NinoController@CambiarStatusContacto');

  Route::get('pantalla_asignar_Citas', 'OrdenDiagnosticoController@MostrarCitasPendientes');

  Route::get('mostrar_citas_nino', 'OrdenDiagnosticoController@PantallaMostrarCitasNino');

  Route::get('crear_cita', 'CitaController@PantallaAsignarCitasNino');

  Route::post('insertar_cita', 'CitaController@InsertarCita');

  Route::get('citas_pendientes_profesional', 'CitaController@CitasPendientesPorUsuarioActual');

  Route::get('Llenar_informe_cita', 'CitaController@FormularioInformeCita');

  Route::post('Guardar_reporte', 'CitaController@AgregarReporteCita');

});


Route::get('/', function () {
    return view('Menu');
});

Route::get('Mi_menu', function () {
    return view('Menu');
});

Route::get('ingreso_profesional', 'UsuarioController@IngresoProfesional');

Route::post('crear_Profesional', 'UsuarioController@CrearProfesional');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //borrar??
