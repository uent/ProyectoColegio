@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Profesional
@endsection



@section('contenido')
<div class="col-md-12">
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Ingreso datos nuevo profesional</h4>
        </div>
        <div class="panel-body">
           <form method="POST" id="formulario" action="{{ url('crear_Profesional') }}" class="form">
		{!! csrf_field() !!}
		
				<input name="Nombre" class="form-control" placeholder="Nombre"></input><br>
				<input name="Apellidos" class="form-control" placeholder="Apellidos"></input><br>
				<input name="Rut" class="form-control" placeholder="Rut"></input>
				<p class="help-block"><small>Profesión</small></p>
				<select multiple class="form-control" name="Profesion" placeholder="Parentesco" required autofocus>
	                <option value="Neurolinguístico">Neurolinguístico</option>
	                <option value="Fonoaudiologo">Fonoaudiologo</option>
	                <option value="Administrador">Administrador</option>
	            </select><br><br>
				<input name="Email" class="form-control" placeholder="Email"></input><br>
				<input name="Password" class="form-control" placeholder="Password"></input><br>
				<button type="submit"  onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; " class="btn btn-primary">Enviar</button>
			</form>
        </div>
    </div>
</div>





@endsection
