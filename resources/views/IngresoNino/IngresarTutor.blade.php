
@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Datos Tutor
@endsection



@section('contenido')
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
									<form method="POST" role="form" action="{{ url('ingresar_tutor') }}" class="form">
										{!! csrf_field() !!}
										<div class="form-group">
											<input name="Nombre" class="form-control" placeholder="Nombre" required autofocus><br>
											<input name="Apellidos" class="form-control" placeholder="Apellidos" required autofocus><br>
											<input name="Rut" class="form-control" placeholder="Rut" required autofocus><br>
											<input name="Mail" class="form-control" placeholder="Mail" required autofocus><br>
											<input name="Telefono_fijo" class="form-control" placeholder="Teléfono Fijo" required autofocus><br>
											<input name="Celular" class="form-control" placeholder="Celular" required autofocus>
											<p class="help-block"><small>Parentesco</small></p>
											<select multiple class="form-control" name="Parentesco" placeholder="Parentesco" required autofocus>
								                <option>Padre/Madre</option>
								                <option>Abuelo/Abuela</option>
								                <option>Tío/Tía</option>
								                <option>Tutor Legal</option>
								                <option>Otro</option>
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
