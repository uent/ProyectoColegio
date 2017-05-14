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
<p> Datos Tutor <p>

<form method="POST" action="{{ url('ingresar_tutor') }}" class="form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="exampleInputEmail1">
				Nombre tutor
			</label>
				<input name="Nombre" class="form-control" placeholder="Nombre">
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Apellidos tutor
			</label>
				<input name="Apellidos" class="form-control" placeholder="Apellidos">
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">
				Rut tutor
			</label>
				<input name="Rut" class="form-control" placeholder="Rut">
		</div>

    <div class="form-group">
			<label for="exampleInputEmail1">
				Parentesco    //cambiar a un combobox!!!!
			</label>
				<input name="Parentesco" class="form-control" placeholder="Parentesco">
		</div>

    <div class="form-group">
      <label for="exampleInputEmail1">
        Mail
      </label>
        <input name="Mail" class="form-control" placeholder="Mail">
    </div>

    <input type="hidden" name="idNino" class="form-control" value="<?php echo $idNino;?>">

		<button type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; " class="btn btn-primary">Enviar</button>
</form>
@endsection
