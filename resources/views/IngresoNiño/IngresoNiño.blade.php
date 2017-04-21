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

<form method="POST" action="{{ url('ingresar_niño') }}" class="form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="exampleInputEmail1">
				Nombre niño
			</label>
				<input name="Nombre" class="form-control" placeholder="Nombre del brocacochi"></input>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Rut niño
			</label>
				<input name="Rut" class="form-control" placeholder="Rut del brocacochi"></input>
		</div>

		<button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
