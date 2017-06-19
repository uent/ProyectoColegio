
@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Datos Tutor
@endsection


@section('contenido')
<script src="{{asset('js/ingresoValidator.js')}}"></script>

@if (isset($errors) && count($errors) > 0)
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif

<div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Solicitud de Atención</h3>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Ingrese los datos del tutor a cargo</h4>
                                </div>
                                <div class="panel-body">
                                <div ><small style="color: red; padding-left:50px;">Los campos con * son obligatorios</small><br></div><br>
									<form id="tutorForm" method="POST" role="form" action="{{ url('ingresar_tutor') }}" class="form">
										{!! csrf_field() !!}
										<div class="form-group">
											<input id="Nombre" name="Nombre" class="form-control" placeholder="Nombre *" required autofocus><br>
											<input id="Apellidos" name="Apellidos" class="form-control" placeholder="Apellidos *" required autofocus><br>
											<input id="Rut" name="Rut" class="form-control" placeholder="Rut *" required autofocus><br>
											<input id="Mail" name="Mail" class="form-control" placeholder="Mail *" required autofocus><br>
											<input id="Telefono_fijo" name="Telefono_fijo" class="form-control" placeholder="Teléfono Fijo *" required autofocus><br>
											<input id="Celular" name="Celular" class="form-control" placeholder="Celular *" required autofocus>
											<p class="help-block"><small>Parentesco</small></p>

											<select multiple class="form-control" name="Parentesco" placeholder="Parentesco *" required autofocus>
								                <option value = 'Padre/Madre'> Padre/Madre</option>
								                <option value = 'Abuelo/Abuela'> Abuelo/Abuela</option>
								                <option value = 'Tío/Tía'> Tío/Tía</option>
								                <option value = 'Tutor Legal'>Tutor Legal</option>
								                <option value = 'Otro'>Otro</option>
								            </select><br>

										    <input type="hidden" name="idNino" class="form-control" value="<?php echo $idNino;?>"><br>

										<button type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; " class="btn btn-primary">Enviar</button>
								</form>
								</div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

            </div><!-- Page Inner -->
@endsection
