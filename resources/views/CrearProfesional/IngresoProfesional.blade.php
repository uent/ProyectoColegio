@extends('Layout\Layout')

@section('cabecera')
<?php
#cabecera
echo "Ingreso de profesional";
?>
@endsection


@section('content1')





@endsection

@section('content2')
<p> Datos Profesional <p>

<form method="POST" id="formulario" action="{{ url('crear_Profesional') }}" class="form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="exampleInputEmail1">
				Nombre profesional
			</label>
				<input name="Nombre" class="form-control" placeholder="Nombre"></input>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Apellidos profesional
			</label>
				<input name="Apellidos" class="form-control" placeholder="Apellidos"></input>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Rut profesional
			</label>
				<input name="Rut" class="form-control" placeholder="Rut"></input>
		</div>


		<div class="form-group">
			<label for="exampleInputEmail1">
				Profesion	 //quizas tenga mas de una profesion
			</label>
				<input name="Profesion" class="form-control" placeholder="Profesion"></input>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Email
			</label>
				<input name="Email" class="form-control" placeholder="Email"></input>
		</div>


<div class="form-group">
	<label for="exampleInputEmail1">
		Password
	</label>
		<input name="Password" class="form-control" placeholder="Password"></input>
</div>

		</div>

		<button type="submit"  onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; " class="btn btn-primary">Enviar</button>
</form>
@endsection
