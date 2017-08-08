<?php

Route::group(['middleware' => ['auth','ControlPermisos']], function() {
  //los anteriores middleware validan que el usuario tenga una sesion activa en el sistema
  //y que se tengan los permisos necesarios para usar las funcionalidades
  Route::get('ingresar_nino', 'NinoController@pagCrear');
  Route::get('contactos_pendientes', 'NinoController@MostrarNinosParaLlamar');
  Route::post('ingresar_nino', 'NinoController@Crear');
  Route::post('ingresar_tutor', 'TutorController@InsertarDatos');
  Route::get('Contactar_nino', 'NinoController@Contactar');
  Route::get('Cambiar_status_contacto', 'NinoController@CambiarStatusContacto');
  Route::get('pantalla_asignar_Citas', 'OrdenDiagnosticoController@MostrarCitasPendientes');
  Route::get('mostrar_citas_nino', 'OrdenDiagnosticoController@PantallaMostrarCitasNino');
  Route::get('crear_cita', 'CitaController@PantallaAsignarCitasNino');

  Route::get('citas_pendientes_profesional', 'CitaController@CitasPendientesPorUsuarioActual');
  Route::get('Llenar_informe_cita', 'CitaController@FormularioInformeCita');

  //reportes profesionales
  Route::post('Guardar_reporte', 'CitaController@AgregarReporteCita');//borrar


  Route::get('ingreso_profesional', 'UsuarioController@IngresoProfesional');
  Route::post('crear_Profesional', 'UsuarioController@CrearProfesional');
  Route::get('pantalla_generar_anamnesis', 'AnamnesisController@OrdenesPendientesDeAnamnesis');

  Route::get('aprobar_informe_final_nino', 'AnamnesisController@AprobarInformeFinal');


  Route::get('encuesta_coevaluacion_familiar', 'EncuestaController@MostrarEncuesta');
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


Route::get('pdf', 'OrdenDiagnosticoController@PdfReportes'); //no existe metodo(?)
Route::get('/home', 'HomeController@index')->name('home'); //borrar??


  Route::get('ajax', function () {
      return view('VistasMalas\Intento_ajax');
});

//Llamadas ajax
Route::get('validarRutNinoAjax/{rutNino}', 'AjaxController@validarRutNino');//no se usa

Route::get('horarioProfesional/{idProfesional}', 'AjaxController@horarioProfesionalPorIdProfesional');

Route::post('insertar_cita', 'AjaxController@InsertarCita');
//mail
Route::get('welcome-mail','MailController@MailIngresoTutor');


//reportes profesionales

Route::post('guardar_reporte_fonoaudiologo', 'CitaController@AgregarReporteCitaFonoaudiologo');
Route::post('guardar_reporte_psicologico', 'CitaController@AgregarReporteCitaPsicologo');
Route::post('guardar_reporte_terapista_ocupacional', 'CitaController@AgregarReporteCitaTerapiaOcupacional');
Route::post('guardar_reporte_psicopedagogo', 'CitaController@AgregarReporteCitaPsicopedagogo');


//ingreso ficha
Route::POST('ingresar_ficha', 'NinoController@NuevaFicha');

//listar
Route::get('ver_listado_ninos', 'NinoController@ListadoNinos');
Route::get('ver_listado_profesionales', 'UsuarioController@ListadoProfesionales');
//modificar
Route::get('modificar_ficha_nino', 'Nino_TutorController@ModificarDatosNinoTutores');
Route::get('modificar_Profesional', 'UsuarioController@ModificarDatosProfesional');


Route::post('actualizar_datos_Nino', 'NinoController@ActualizarDatosNino');
Route::post('actualizar_datos_tutor', 'TutorController@ActualizarDatosTutorPorId');
Route::post('actualizar_datos_profesional', 'UsuarioController@ActualizarDatosUsuarioPorId');

Route::get('pantalla_mostrar_listado_informes', 'AnamnesisController@MostrarInformesNinoListosPorIdTutor');
//unificar
Route::get('generar_informe_final_nino', 'AnamnesisController@GenerarInformeFinal');
Route::get('visualizar_informe_final_nino_vista_tutor', 'AnamnesisController@GenerarInformeFinal');

//
Route::get('verCalendarioProfesional', 'CalendarioController@MostrarCalendarioProfesional');

route::get('GenerarInformeCoEvaluacion', 'EncuestaController@GenerarPdfInformeCoEvaluacion');
