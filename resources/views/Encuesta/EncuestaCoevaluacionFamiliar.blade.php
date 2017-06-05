
@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Coevaluación
@endsection


@section('contenido')
<script src="{{asset('js/pages/form-wizard.js')}}"></script>

<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-body">
                    <div id="rootwizard">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Identificación</a></li>
                            <li role="presentation"><a href="#tab2" data-toggle="tab"><i class="icon-folder-alt m-r-xs"></i>Motivo de consulta</a></li>
                            <li role="presentation"><a href="#tab3" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Payment</a></li>
                            <li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Finish</a></li>
                        </ul>
                        <div class="progress progress-sm m-t-sm">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            </div>
                        </div>
                        <form id="wizardForm">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="tab1">
                                    <div class="row m-b-lg">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputNombre">Nombre</label>
                                                    <input type="text" class="form-control" name="inputNombre" id="inputNombre">
                                                </div>
                                                <div class="form-group  col-md-6">
                                                    <label for="inputApellido">Apellido</label>
                                                    <input type="text" class="form-control col-md-6" name="inputApellido" id="inputApellido">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="inputRut">RUT</label>
                                                    <input type="text" class="form-control" name="inputRut" id="inputRut">
                                                </div>

                                                 <div class="form-group col-md-12">
                                                <label for="InputNac">Fecha de Nacimiento</label>
                                                <input type="text" class="form-control date-picker" name="InputNac" id="InputNac">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="inputEscolaridad">Escolaridad</label>
                                                    <input type="text" class="form-control" name="inputEscolaridad" id="inputEscolaridad" placeholder="Jardín o Colegio / Nivel o Curso">
                                                </div>

                                                 <div class="form-group col-md-12">
                                                    <label for="inputCantHrmns">Número de hermanos</label>
                                                    <input type="text" class="form-control" name="inputCantHrmns" id="inputCantHrmns" placeholder="Total considerando a su hijo en evaluación">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputLugarHrmns">Lugar que ocupa entre los hermanos</label>
                                                    <input type="text" class="form-control" name="inputLugarHrmns" id="inputLugarHrmns" placeholder="(primero, segundo, etc)">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="inputNombrePadre">Nombre del padre</label>
                                                    <input type="text" class="form-control" name="inputNombrePadre" id="inputNombrePadre">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputNombreMadre">Nombre de la madre</label>
                                                    <input type="text" class="form-control" name="inputNombreMadre" id="inputNombreMadre">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="inputDireccion">Dirección</label>
                                                    <input type="text" class="form-control" name="inputDireccion" id="inputDireccion">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputTelefono">Teléfono de Contacto</label>
                                                    <input type="text" class="form-control" name="inputTelefono" id="inputTelefono">
                                                </div>


                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputEmail">Correo Electrónico</label>
                                                    <input type="email" class="form-control" name="exampleInputEmail" id="exampleInputEmail">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputNombreTutor">Nombre de quien completa la ficha</label>
                                                    <input type="text" class="form-control" name="inputNombreTutor" id="inputNombreTutor">
                                                </div>
                                                 <div class="form-group col-md-12">
                        
                                                    <input type="hidden" class="form-control" name="fechaFicha" id="fechaFicha">
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Personal Info</h3>
                                            <p>Debe completar este cuestionario con la mayor fidelidad posible. Su propósito es favorecer el proceso de evaluación que está por comenzar junto a su hijo/a</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade tab-pane active fade in" id="tab2">
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group col-md-12">
                                                <label for="motivo1">¿Por qué solicita la evaluación?</label>
                                                <input type="text" style="width:1140px;height:100px" class="form-control" name="motivo1" id="motivo1" placeholder="¿Algún profesional o institución deriva para evaluación?">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="motivo2">¿Qué expectativas tiene respecto al proceso de evaluación?</label>
                                                <input type="text" style="width:1140px;height:100px" class="form-control" name="motivo2" id="motivo2" placeholder="Ej: Determinar diagnóstico, recibir apoyos profesionales, acceder a escolaridad especializada, recibir orientación familiar, etc.)">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="motivo3">¿Qué tipo de dificultad presenta actualmente su hijo/a? </label>
                                                <input type="text" style="width:1140px;height:100px" class="form-control" name="motivo3" id="motivo3" placeholder="Por favor poner especial atención respecto de su desarrollo social, desarrollo del lenguaje, flexibilidad y adaptación al cambio, movimiento intereses o juegos peculiares.">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="motivo4">¿Se le han realizado otras evaluaciones profesionales o examenes médios?  </label>
                                                <select class="form-control" name="motivo4" id="motivo4">
                                                <option value = 'si'> SI</option>
                                                <option value = 'no'> NO</option>
                                                </select><br>
                                                <p><small>Si la respuesta es afirmativa, ingrese los siguientes campos</small></p>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="motivo4profesional">Profesional </label>
                                                <input type="text" class="form-control col-md-4" name="motivo4profesional" id="motivo4profesional" placeholder="Nombre y especialidad">
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="motivo4anio">Año</label>
                                                <input type="text" class="form-control col-md-2" name="motivo4anio" id="motivo4anio" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="motivo4motivo">Motivo </label>
                                                <input type="text" class="form-control col-md-4" name="motivo4motivo" id="motivo4motivo">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="motivo4diagnostico">Diagnóstico </label>
                                                <input type="text" class="form-control col-md-4" name="motivo4diagnostico" id="motivo4diagnostico">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="motivo4indicaciones">Indicaciones </label>
                                                <input type="text" class="form-control col-md-4" name="motivo4indicaciones" id="motivo4indicaciones" placeholder="Medicamentos / Dosis">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="motivo5">¿Tiene actualmente un profesional / médico tratante?</label>
                                                <input type="text" style="width:1140px;height:100px" class="form-control" name="motivo5" id="motivo5" placeholder="Indique especialidad y frecuencia.">
                                            </div>
                                           


                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group col-md-12">
                                                <label for="exampleInputCard">Card Number</label>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="exampleInputCard" id="exampleInputCard" placeholder="Card Number">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control col-md-4" name="exampleInputSecurity" id="exampleInputSecurity" placeholder="Security Code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="exampleInputHolder">Card Holders Name</label>
                                                <input type="text" class="form-control" name="exampleInputHolder" id="exampleInputHolder" placeholder="Card Holders Name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="exampleInputExpiration">Expiration</label>
                                                <input type="text" class="form-control date-picker" name="exampleInputExpiration" id="exampleInputExpiration" placeholder="Expiration">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="exampleInputCsv">CSV</label>
                                                <input type="text" class="form-control" name="exampleInputCsv" id="exampleInputCsv" placeholder="CSV">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="f-s-12">By pressing Next You will Agree to the Payment <a href="#">Terms & Conditions</a></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4">
                                    <h3 class="no-s">Thank You !</h3>
                                    <div class="alert alert-info m-t-sm m-b-lg" role="alert">
                                        Congratulations! You got the last step.
                                    </div>
                                </div>
                                <ul class="pager wizard">
                                    <li class="previous"><a href="#" class="btn btn-default">Previo</a></li>
                                    <li class="next"><a href="#" class="btn btn-default">Siguiente</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->
@endsection
