@extends('Layout\Layout')

@section('cabecera')
<?php
#cabecera
echo "Colegio";
?>
@endsection


@section('content1')

<form action="asignar_Citas" method="get">
  <button name="subject" class="btn btn-default" >Asignar citas</button>
</form>

@endsection



@section('content2')

<form action="ingresar_niño" method="get">
  <button name="subject" class="btn btn-default" >Ingresar niño</button>
</form>


<form action="contactos_pendientes" method="get">
  <button name="subject" class="btn btn-default" >Contactos pendientes</button>
</form>

@endsection
