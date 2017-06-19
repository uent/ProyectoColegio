<?php

Route::group(['middleware' => ['auth','ControlPermisos']], function() {
  //los anteriores middleware validan que se este logeado
  //y que se tengan los permisos necesarios para accesar
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

  //reportes profesionales
  Route::post('Guardar_reporte', 'CitaController@AgregarReporteCita');//borrar


  Route::get('ingreso_profesional', 'UsuarioController@IngresoProfesional');
  Route::post('crear_Profesional', 'UsuarioController@CrearProfesional');
  Route::get('pantalla_generar_anamnesis', 'AnamnesisController@OrdenesPendientesDeAnamnesis');
  Route::get('generar_anamnesis_nino', 'AnamnesisController@FormularioAnamnesis');
  Route::get('EncuestaCoevaluacionFamiliar', 'EncuestaController@MostrarEncuesta');
  Route::POST('Guardar_reporte_tutor', 'EncuestaController@IngresarEncuesta');

});

Auth::routes();

Route::get('/', function () {
    return view('Menu');
});
Route::get('Mi_menu', function () {
    return view('Menu');
});
Route::get('PantallaFaltaPermisos', function () {
    return view('FaltaPermisos\FaltaPermisos');
});


Route::get('pdf', 'OrdenDiagnosticoController@PdfReportes');
Route::get('/home', 'HomeController@index')->name('home'); //borrar??


  Route::get('ajax', function () {
      return view('VistasMalas\Intento_ajax');
});

//Llamadas ajax
Route::get('validarRutNinoAjax/{rutNino}', 'AjaxController@validarRutNino');
//mail
Route::get('welcome-mail','MailController@MailIngresoTutor');


//reportes profesionales

Route::post('guardar_reporte_fonoaudiologo', 'CitaController@AgregarReporteCitaFonoaudiologo');
Route::post('guardar_reporte_psicologico', 'CitaController@AgregarReporteCitaPsicologo');
Route::post('guardar_reporte_terapista_ocupacional', 'CitaController@AgregarReporteCitaTerapiaOcupacional');
Route::post('guardar_reporte_psicopedagogo', 'CitaController@AgregarReporteCitaPsicopedagogo');
