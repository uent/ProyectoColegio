
@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Datos Niño/a
@endsection



@section('contenido')

<?php
  //borrar si no se logra validad asi!!!!!
  if(isset($validaciones) != null)
  echo
    "<div class='container-fluid'>
    	<div class='row'>
    		<div class='col-md-12'>
    			<ul>
    				<li>
    					Lorem ipsum dolor sit amet
    				</li>
    				<li>
    					Consectetur adipiscing elit
    				</li>
    				<li>
    					Integer molestie lorem at massa
    				</li>
    				<li>
    					Facilisis in pretium nisl aliquet
    				</li>
    				<li>
    					Nulla volutpat aliquam velit
    				</li>
    				<li>
    					Faucibus porta lacus fringilla vel
    				</li>
    				<li>
    					Aenean sit amet erat nunc
    				</li>
    				<li>
    					Eget porttitor lorem
    				</li>
    			</ul>
    		</div>
    	</div>
    </div>";

?>
<div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Solicitud de Atención</h3>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Ingrese los datos del niño o niña</h4>
                                </div>
                                <div class="panel-body">
                                <form method="POST" action="{{ url('ingresar_nino') }}" role="form" class="form">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <input name="Rut" class="form-control" placeholder="Rut" required autofocus></input><br>
                                            <input name="Nombre" class="form-control" placeholder="Nombre" required autofocus></input><br>
                                            <input name="Apellidos" class="form-control" placeholder="Apellidos" required autofocus></input><br>
                                            <input name="Edad" class="form-control" placeholder="Edad" required autofocus></input><br>
                                            <textarea name="Diagnostico" class="form-control" placeholder="Diagnóstico/Profesional"></textarea><br>
                                            <input name="Derivacion" class="form-control" placeholder="Derivación" ></input><br>
                                            <input name="Solicitud" class="form-control" placeholder="Solicitud" ></input><br>
                                            <input name="Escolaridad" class="form-control" placeholder="Escolaridad"></input><br>
                                            <textarea  name="Observaciones" class="form-control" placeholder="Observaciones"></textarea><br>

                                        </div>

                                        <button type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; " class="btn btn-primary">Siguiente</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
            </div><!-- Page Inner -->



@endsection
