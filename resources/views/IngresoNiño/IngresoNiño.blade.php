@extends('Layout\Layout')

@section('cabecera')
<?php
#cabecera
echo "Ingreso solicitud de diagnostico";
?>
@endsection


@section('content1')





@endsection

@section('content2')
<p> Datos Niño <p>

<form method="POST" action="{{ url('ingresar_niño') }}" class="form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="exampleInputEmail1">
				Nombre niño
			</label>
				<input name="Nombre" class="form-control" placeholder="Nombre"></input>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Apellidos niño
			</label>
				<input name="Apellidos" class="form-control" placeholder="Apellidos"></input>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Rut niño
			</label>
				<input name="Rut" class="form-control" placeholder="Rut"></input>
		</div>

		<button type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; " class="btn btn-primary">Enviar</button>
</form>
@endsection
