@extends ('layouts.admin')


@section('menu')



<li>
	<form name=formAsignarCitas action="pantalla_asignar_Citas" method="get"></form>
	<a class="waves-effect waves-button" onclick="document.formAsignarCitas.submit();return false">
	<span class="menu-icon icon-notebook"></span><p>Asignar Citas</p><span class="active-page"></span></a>
</li>
<li class="droplink">
	<form name=formIngresaNino action="ingresar_nino" method="get"></form>
    <a class="waves-effect waves-button" onclick="document.formIngresaNino.submit();return false">
    <span class="menu-icon icon-user-follow"></span><p>Ingresar Niño/a</p></a>
</li>
<li class="droplink">
	<form name=formContactosPendientes action="contactos_pendientes" method="get"></form>
	<a class="waves-effect waves-button" onclick="document.formContactosPendientes.submit();return false">
    <span class="menu-icon icon-call-out"></span><p>Contactos Pendientes</p></a>
</li>
<li class="droplink">
	<form name=formIngresoProfesional action="ingreso_profesional" method="get"></form>
	<a class="waves-effect waves-button" onclick="document.formIngresoProfesional.submit();return false">
    <span class="menu-icon icon-login"></span><p>Ingresar Profesional</p></a>
</li>
<li class="droplink">
	<form name=CitasPendientesProfesional action="citas_pendientes_profesional" method="get"></form>
	<a class="waves-effect waves-button" onclick="document.CitasPendientesProfesional.submit();return false">
    <span class="menu-icon icon-pin"></span><p>Evaluar Citas</p></a>
</li>


@endsection
