@extends('Layout\Layout')

@section('cabecera')
<?php
#cabecera
echo "Colegio";
?>
@endsection


@section('content1')

<div class="col-md-12">
    <form action="contactos_pendientes" method="get">
      <button name="subjsaect" class="btn btn-default" >Contactos pendientes</button>
  </div>
<div class="col-md-12">
  <form action="ingresar_niño" method="get">
    <button name="subject" class="btn btn-default" >Ingresar niño</button>
</div>




@endsection



@section('content2')
<?php
#2 seccion
echo "hola2";
?>
@endsection
