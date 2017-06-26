@extends ('layouts.admin')


@section('menu')
<<?php
use App\Http\Controllers\PermisosController;

if(Auth::check())
{
	$id = Auth::user()->id;

	$i = 0;

	$permisos = PermisosController::VistasDisponiblesPorIdUsuario($id);

	//var_dump($permisos);

	if($permisos['OrdenDiagnosticoController@MostrarCitasPendientes'])
	{
		echo
		"<li>
			<form name=formAsignarCitas action='pantalla_asignar_Citas' method='get'></form>
			<a class='waves-effect waves-button' onclick='document.formAsignarCitas.submit();return false'>
			<span class='menu-icon icon-notebook'></span><p>Asignar Citas</p><span class='active-page'></span></a>
		</li>";
	}

	if($permisos['NinoController@Crear'])
	{
		echo
		"<li class='droplink'>
			<form name=formIngresaNino action='ingresar_nino' method='get'></form>
		    <a class='waves-effect waves-button' onclick='document.formIngresaNino.submit();return false'>
		    <span class='menu-icon icon-user-follow'></span><p>Ingresar Niño/a</p></a>
		</li>";
	}

	if($permisos['NinoController@MostrarNinosParaLlamar'])
	{
		echo
		"<li class='droplink'>
			<form name=formContactosPendientes action='contactos_pendientes' method='get'></form>
			<a class='waves-effect waves-button' onclick='document.formContactosPendientes.submit();return false'>
		    <span class='menu-icon icon-call-out'></span><p>Contactos Pendientes</p></a>
		</li>";
	}

	if($permisos['CitaController@CitasPendientesPorUsuarioActual'])
	{
		echo
		"	<li class='droplink'>
				<form name=CitasPendientesProfesional action='citas_pendientes_profesional' method='get'></form>
				<a class='waves-effect waves-button' onclick='document.CitasPendientesProfesional.submit();return false'>
			    <span class='menu-icon icon-pin'></span><p>Evaluar Citas</p></a>
			</li>";
		}

		if($permisos['AnamnesisController@OrdenesPendientesDeAnamnesis'])
		{
			echo
			"<li class='droplink'>
				<form name=formGenerarAnamnesis action='pantalla_generar_anamnesis' method='get'></form>
				<a class='waves-effect waves-button' onclick='document.formGenerarAnamnesis.submit();return false'>
			    <span class='menu-icon icon-login'></span><p>Generar Anamnesis</p></a>
			</li>";
		}

		if($permisos['UsuarioController@IngresoProfesional'])
		{
			echo
			"<li class='droplink'>
				<form name=formIngresoProfesional action='ingreso_profesional' method='get'></form>
				<a class='waves-effect waves-button' onclick='document.formIngresoProfesional.submit();return false'>
			    <span class='menu-icon icon-login'></span><p>Ingresar Profesional</p></a>
			</li>";
		}

		if($permisos['EncuestaController@MostrarEncuesta'])
		{
			echo
			"<li class='droplink'>
				<form name=formEncuestaCoevaluacionFamiliar action='encuesta_coevaluacion_familiar' method='get'></form>
				<a class='waves-effect waves-button' onclick='document.formEncuestaCoevaluacionFamiliar.submit();return false'>
			    <span class='menu-icon icon-login'></span><p>Encuesta coevaluacion</p></a>
			</li>";
		}

		if($permisos['NinoController@VerListadoFichas'])
		{
			echo
			"<li class='droplink'>
				<form name=formListadoNinos action='ver_listado_ninos' method='get'></form>
				<a class='waves-effect waves-button' onclick='document.formListadoNinos.submit();return false'>
			    <span class='menu-icon icon-login'></span><p>Listado niños</p></a>
			</li>";
		}

		if($permisos['UsuarioController@VerListadoProfesionales'])
		{
			echo
			"<li class='droplink'>
				<form name=formListadoProfesionales action='ver_listado_profesionales' method='get'></form>
				<a class='waves-effect waves-button' onclick='document.formListadoProfesionales.submit();return false'>
					<span class='menu-icon icon-login'></span><p>Listado profesionales</p></a>
			</li>";
		}

}else
{
	echo "	<li class='droplink'>
	<form name=logout action='login' method='get'>";?>{{ csrf_field() }}
<?php echo
"</form>
		<a class='waves-effect waves-button' onclick='document.login.submit();return false'>
			<span class='menu-icon icon-pin'></span><p>Iniciar sesion</p></a>
	</li>";
	}
?>

@endsection
