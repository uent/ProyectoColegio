
@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Datos Niño/a
@endsection



@section('contenido')
<script src="{{asset('js/ingresoValidator.js')}}"></script>



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
                    <div ><small style="color: red; padding-left:50px;">Los campos con * son obligatorios</small><br></div><br>

<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-body">
                    <div id="rootwizard">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Info niñ@</a></li>
                            <li role="presentation"><a href="#tab2" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Info Tutor</a></li>
                        </ul>
                        <div class="progress progress-sm m-t-sm">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            </div>
                        </div>
                        <form id="ingresoForm">
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="tab1">
                                    <div class="row m-b-lg">
                                        <div class="col-md-8">
                                            <div class="row">
                                            <input id="rutNino" name="rutNino" class="form-control" placeholder="Rut *" required autofocus></input><br>
                                                <input id="nombreNino" name="nombreNino" class="form-control" placeholder="Nombre *" required autofocus></input><br>
                                                <input id="apellidoNino" name="apellidoNino" class="form-control" placeholder="Apellidos *" required autofocus></input><br>
                                                <input id="edadNino" name="edadNino" class="form-control" placeholder="Edad *" required autofocus></input><br>
                                                <textarea id="diagnostico" name="diagnostico" class="form-control" placeholder="Diagnóstico/Profesional"></textarea><br>
                                                <input id="derivacion" name="derivacion" class="form-control" placeholder="Derivación" ></input><br>
                                                <input id="solicitud" name="solicitud" class="form-control" placeholder="Solicitud" ></input><br>
                                                <input id="escolaridad" name="escolaridad" class="form-control" placeholder="Escolaridad"></input><br>
                                                <textarea id="observaciones"  name="observaciones" class="form-control" placeholder="Observaciones"></textarea><br>
                                            </div>
                                        </div>
                                        <div class="col-md-4" align="center">
                                            <ul class="pager wizard">
                                            <li><alert href="#t" class="btn btn-default" data-toggle="tab">Al finalizar ingrese a la pestaña 'Info Tutor'</a></li>
                                            </ul>
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="tab2">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="form-group">
                                            <input id="nombreTutor" name="nombreTutor" class="form-control" placeholder="Nombre *" required autofocus><br>
                                            <input id="apellidoTutor" name="apellidoTutor" class="form-control" placeholder="Apellidos *" required autofocus><br>
                                            <input id="rutTutor" name="rutTutor" class="form-control" placeholder="Rut *" required autofocus><br>
                                            <input id="mailTutor" name="mailTutor" class="form-control" placeholder="Mail *" required autofocus><br>
                                            <input id="fonoTutor" name="fonoTutor" class="form-control" placeholder="Teléfono Fijo *" required autofocus><br>
                                            <input id="celular" name="celular" class="form-control" placeholder="Celular *" required autofocus><br>
                                            <p class="help-block"><small>Parentesco</small></p>

                                            <select multiple class="form-control" style="width: 300px" name="parentesco" placeholder="Parentesco *" required autofocus>
                                                <option value = 'Padre/Madre'> Padre/Madre</option>
                                                <option value = 'Abuelo/Abuela'> Abuelo/Abuela</option>
                                                <option value = 'Tío/Tía'> Tío/Tía</option>
                                                <option value = 'Tutor Legal'>Tutor Legal</option>
                                                <option value = 'Otro'>Otro</option>
                                            </select><br>
                                                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" align="center"><br><br><br>
                                    <button type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; " class="btn btn-primary">Enviar</button>  
                                </div>
                                </div>
                                                               
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->



</div><!-- Page Inner -->



@endsection
