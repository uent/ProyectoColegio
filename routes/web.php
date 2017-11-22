<?php

Route::group(['middleware' => ['auth','ControlPermisos']], function() {
  //los anteriores middleware validan que el usuario tenga una sesion activa en el sistema
  //y que se tengan los permisos necesarios para usar las funcionalidades

  //las rutas seran separadas por funcionalidades que seran mencionadas en un comentario

  //Ingresar Niño/a
  Route::get('ingresar_nino', 'NinoController@pagCrear'); //IngresoNino
  Route::post('ingresar_ficha', 'NinoController@NuevaFicha'); //IngresoNino
  //

  //Asignar Citas
  Route::get('pantalla_asignar_Citas', 'OrdenDiagnosticoController@MostrarCitasPendientes'); //AsignarCitas
  Route::get('mostrar_citas_nino', 'OrdenDiagnosticoController@PantallaMostrarCitasNino');//AsignarCitas
  Route::get('crear_cita', 'CitaController@PantallaAsignarCitasNino');//AsignarCitas
    //Metodo Ajax
    Route::post('insertar_cita', 'AjaxController@InsertarCita');//AsignarCitas
    //
  //

  //Contactos Pendientes
  Route::get('contactos_pendientes', 'NinoController@MostrarNinosParaLlamar'); //ContactosPendientes
  Route::get('Contactar_nino', 'NinoController@Contactar'); //ContactosPendientes
  Route::get('Cambiar_status_contacto', 'NinoController@CambiarStatusContacto'); //ContactosPendientes
  //

  //Encuesta Coevaluacion
  Route::get('encuesta_coevaluacion_familiar', 'EncuestaController@MostrarEncuesta'); //LlenarInformeTutor
  Route::post('Guardar_reporte_tutor', 'EncuestaController@IngresarEncuesta'); //LlenarInformeTutor
  //

  //Ingresar Profesional
  Route::get('ingreso_profesional', 'UsuarioController@IngresoProfesional'); //IngresoProfesional
  Route::post('crear_Profesional', 'UsuarioController@CrearProfesional'); //IngresoProfesional
  //

  //Modificar Niños/Tutor
  Route::get('ver_listado_ninos', 'NinoController@ListadoNinos'); //ModificarFichasNinos
  Route::get('modificar_ficha_nino', 'Nino_TutorController@ModificarDatosNinoTutores');//ModificarFichasNinos
  Route::post('actualizar_datos_Nino', 'NinoController@ActualizarDatosNino');//ModificarFichasNinos
  Route::post('actualizar_datos_tutor', 'TutorController@ActualizarDatosTutorPorId');//ModificarFichasNinos
  //

  //Listar Profesionales
  Route::get('ver_listado_profesionales', 'UsuarioController@ListadoProfesionales');//ListarProfesionales
  Route::get('modificar_Profesional', 'UsuarioController@ModificarDatosProfesional');//ListarProfesionales
  Route::post('actualizar_datos_profesional', 'UsuarioController@ActualizarDatosUsuarioPorId');//ListarProfesionales
  //

  //Evaluar Citas
  Route::get('citas_pendientes_profesional', 'CitaController@CitasPendientesPorUsuarioActual');//EvaluarCitas
  Route::get('Llenar_informe_cita', 'CitaController@FormularioInformeCita');//EvaluarCitas
  Route::post('guardar_reporte_fonoaudiologo', 'CitaController@AgregarReporteCitaFonoaudiologo');//EvaluarCitas
  Route::post('guardar_reporte_psicologico', 'CitaController@AgregarReporteCitaPsicologo');//EvaluarCitas
  Route::post('guardar_reporte_terapista_ocupacional', 'CitaController@AgregarReporteCitaTerapiaOcupacional');//EvaluarCitas
  Route::post('guardar_reporte_psicopedagogo', 'CitaController@AgregarReporteCitaPsicopedagogo');//EvaluarCitas
  //

  //visualizar Informe Final
  Route::get('generar_informe_final_nino', 'AnamnesisController@GenerarInformeFinal');
  //

  //Finalizar Informe Finalizar
  Route::get('pantalla_generar_anamnesis', 'AnamnesisController@OrdenesPendientesDeAnamnesis');
  Route::get('aprobar_informe_final_nino', 'AnamnesisController@AprobarInformeFinal');
  //

});

//Rutas del sistema
Auth::routes();
Route::get('/', function () {
    return view('PagInicio');
});
Route::get('Mi_menu', function () {
    return view('PagInicio');
});
Route::get('PantallaFaltaPermisos', function () {
    return view('PantallasDeError.FaltaPermisos');
});
Route::get('PantallaDeErrorProceso', function () {
    return view('PantallasDeError.PantallaErrorDeProceso');
});
//

//Pdf
route::get('GenerarInformeCoEvaluacion', 'EncuestaController@GenerarPdfInformeCoEvaluacion');
Route::get('visualizar_informe_final_nino_vista_tutor', 'AnamnesisController@GenerarInformeFinal');
//

Route::get('pdf', 'OrdenDiagnosticoController@PdfReportes'); //no existe metodo(?)
Route::get('/home', 'HomeController@index')->name('home'); //borrar??

//Llamadas ajax
Route::get('validarRutNinoAjax/{rutNino}', 'AjaxController@validarRutNino');//no se usa
Route::get('horarioProfesional/{idProfesional}', 'AjaxController@horarioProfesionalPorIdProfesional');
Route::get('horarioNino/{idNino}', 'AjaxController@horarioNinoPorIdNino');
Route::get('horarioRestoProfesionales/{idProfesional}', 'AjaxController@horarioProfesionalesMenosUnoPorIdProfesional');
Route::get('horarioNinoProf/{idNino}/{idProfesional}', 'AjaxController@horarioNinoProfesional');


//calendario Personal
Route::get('verCalendarioProfesional', 'CalendarioController@MostrarCalendarioProfesional');
//

//Generar Informes
Route::get('pantalla_mostrar_listado_informes', 'AnamnesisController@MostrarInformesNinoCompletados');
//

//mail
Route::get('welcome-mail','MailController@MailIngresoTutor');

Route::get('pedir_revision_cita','CitaController@SolicitarModificacionCita');

Route::get('composer','HomeController@composer');

//falta permisos
Route::post('guardar_reporte_multidiciplinario', 'CitaController@AgregarReporteCitaMultiDisciplinario');//EvaluarCitas


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
