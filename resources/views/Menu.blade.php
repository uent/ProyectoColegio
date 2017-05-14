@extends('Layout\Layout')

@section('cabecera')
<?php
#cabecera
echo "Colegio";
?>
@endsection


@section('content1')



@endsection



@section('content2')

<form action="pantalla_asignar_Citas" method="get">
  <button name="subject" class="btn btn-default" >Asignar citas</button>
</form>

<form action="ingresar_nino" method="get">
  <button name="subject" class="btn btn-default" >Ingresar niño</button>
</form>

<form action="contactos_pendientes" method="get">
  <button name="subject" class="btn btn-default" >Contactos pendientes</button>
</form>

<form action="ingreso_profesional" method="get">
  <button name="subject" class="btn btn-default" >Crear Profesional</button>
</form>

<form action="citas_pendientes_profesional" method="get">
  <button name="subject" class="btn btn-default" >Evaluar Cita</button>
</form>



@endsection
