
@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Datos Niño/a
@endsection



@section('contenido')
<p> Ingrese los datos del niño o niña <p>

<form method="POST" action="{{ url('ingresar_nino') }}" class="form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="exampleInputEmail1">
				Nombre niño/a
			</label>
				<input name="Nombre" class="form-control" placeholder="Nombre"></input>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Apellidos niño/a
			</label>
				<input name="Apellidos" class="form-control" placeholder="Apellidos"></input>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Rut niño/a
			</label>
				<input name="Rut" class="form-control" placeholder="Rut"></input>
		</div>

		<button type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; " class="btn btn-primary">Siguiente</button>
</form>
@endsection
