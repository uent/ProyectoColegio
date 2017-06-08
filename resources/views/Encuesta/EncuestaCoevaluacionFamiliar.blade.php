
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
<li role="presentation"><a href="#tab3" data-toggle="tab"><i class="icon-users m-r-xs"></i>Entorno</a></li>
<li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Finalizar</a></li>
</ul>
<div class="progress progress-sm m-t-sm">
<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
</div>
</div>
<form id="wizardForm">
<div class="tab-content">
<div class="tab-pane fade tab-pane active fade in" id="tab1">
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
                </div><div class="form-group col-md-12">
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
            <h3>Información Personal</h3>
            <p>Debe completar este cuestionario con la mayor fidelidad posible. Su propósito es favorecer el proceso de evaluación que está por comenzar junto a su hijo/a</p>
        </div>
    </div>
</div>
<div class="tab-pane fade " id="tab2">
    <div class="row">
        
        <div class="col-md-12">
            <div class="form-group col-md-12">
                <label for="motivo1">¿Por qué solicita la evaluación?</label>
                <input type="text" style="width:1000px;height:100px" class="form-control" name="motivo1" id="motivo1" placeholder="¿Algún profesional o institución deriva para evaluación?">
            </div>
            <div class="form-group col-md-12">
                <label for="motivo2">¿Qué expectativas tiene respecto al proceso de evaluación?</label>
                <input type="text" style="width:1000px;height:100px" class="form-control" name="motivo2" id="motivo2" placeholder="Ej: Determinar diagnóstico, recibir apoyos profesionales, acceder a escolaridad especializada, recibir orientación familiar, etc.)">
            </div>
            <div class="form-group col-md-12">
                <label for="motivo3">¿Qué tipo de dificultad presenta actualmente su hijo/a? </label>
                <input type="text" style="width:1000px;height:100px" class="form-control" name="motivo3" id="motivo3" placeholder="Por favor poner especial atención respecto de su desarrollo social, desarrollo del lenguaje, flexibilidad y adaptación al cambio, movimiento intereses o juegos peculiares.">
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
            <div class="form-group col-md-2">
                <label for="motivo4motivo">Motivo </label>
                <input type="text" class="form-control col-md-4" name="motivo4motivo" id="motivo4motivo">
            </div>
            <div class="form-group col-md-3">
                <label for="motivo4diagnostico">Diagnóstico </label>
                <input type="text" class="form-control col-md-4" name="motivo4diagnostico" id="motivo4diagnostico">
            </div>
            <div class="form-group col-md-3">
                <label for="motivo4indicaciones">Indicaciones </label>
                <input type="text" class="form-control col-md-4" name="motivo4indicaciones" id="motivo4indicaciones" placeholder="Medicamentos / Dosis">
            </div>
            <div class="form-group col-md-12">
                <label for="motivo5">¿Tiene actualmente un profesional / médico tratante?  </label>
                <select class="form-control" name="motivo5" id="motivo5">
                <option value = 'si'> SI</option>
                <option value = 'no'> NO</option>
                </select><br>
                <p><small>Si la respuesta es afirmativa, ingrese el siguientes campos</small></p>
            </div>
            <div class="form-group col-md-12">
                <label for="motivo5indicacion">Indique especialidad y frecuencia.</label>
                <input type="text" style="width:1000px;height:100px" class="form-control" name="motivo5indicacion" id="motivo5indicacion">
            </div>                    
        </div>
    </div>

</div>
<div class="tab-pane fade " id="tab3">

    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#1" aria-expanded="true" aria-controls="collapseOne">
                                    Contexto Familiar
                                </a>
                            </h4>
                        </div>
                        <div id="1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne1">
                            <div class="panel-body">
                               <div class="form-group col-md-12">
                                    <label for="contexto1">¿Quiénes integran su familia y qué ocupaciones tienen?</label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="contexto1" id="contexto1">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="contexto2">¿Existen antecedentes de enfermedades importantes en su familia?, ¿Cuáles? </label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="contexto2" id="contexto2" placeholder="Indique enfermedades médicas y/o psicológicas">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading" role="tab" id="headingTwo2">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#2" aria-expanded="false" aria-controls="collapseTwo">
                                    Antecedentes Relevantes
                                </a>
                            </h4>
                        </div>
                        <div id="2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                            <div class="panel-body">
                                <div class="form-group col-md-12">
                                    <label for="antecedentes1">¿Cómo fue el desarrollo del embarazo?</label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes1" id="antecedentes1" placeholder="(edad al momento del embarazo, situaciones relevantes durante el mismo, enfermedades, accidentes, uso de medicamentos)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes2">¿Con cuántas semanas de gestación nació su hijo(a? </label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes2" id="antecedentes2">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes3">¿Cómo fue el parto? </label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes3" id="antecedentes3" placeholder="(parto normal o cesárea, inducción del parto, fórceps)">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="antecedentes3peso">Peso</label>
                                    <input type="text" class="form-control" name="antecedentes3peso" id="antecedentes3peso">
                                </div>
                                <div class="form-group  col-md-4">
                                    <label for="antecedentes3talla">Talla</label>
                                    <input type="text" class="form-control col-md-4" name="antecedentes3talla" id="antecedentes3talla">
                                </div>
                                <div class="form-group  col-md-4">
                                    <label for="antecedentes3apgar">APGAR</label>
                                    <input type="text" class="form-control col-md-4" name="antecedentes3apgar" id="antecedentes3apgar">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes4">¿Cómo transcurrió el primer año de vida de su hijo/a?  </label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes4" id="antecedentes4" placeholder="(datos relevantes, salud, medicamentos)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes5">Su hijo/a ¿Ha tenido o tiene enfermedades relevantes?  </label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes5" id="antecedentes5" placeholder="Especifique enfermedad, medicamento y dosis.">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading" role="tab" id="headingThree3">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#3" aria-expanded="false" aria-controls="collapseThree">
                                    Desarrollo Evolutivo
                                </a>
                            </h4>
                        </div>
                        <div id="3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
                            <div class="panel-body">
                                <div class="form-group col-md-12">
                                    <label for="antecedentes1">Marcha, edad de adquisición y posterior evolución.</label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes1" id="antecedentes1">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes2">Control de esfínter diurno y nocturno, edad de adquisición y posterior evolución.</label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes2" id="antecedentes2" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes3">Habilidades motrices gruesas, ejemplo: coordinación para trasladarse, correr, hacer deportes, etc.</label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes3" id="antecedentes3" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes3">Habilidades motrices finas, ejemplo: tomar el lápiz, manejar los cubiertos, etc.</label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes3" id="antecedentes3" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes3">Adquisición del lenguaje. Señale si el desarrollo del lenguaje ha sido normal, rápido o con dificultades. </label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes3" id="antecedentes3" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes3">¿Qué dificultades ha presentado en el ámbito del lenguaje? (comprensión, expresión, etc.)</label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes3" id="antecedentes3" placeholder="(comprensión, expresión, etc.)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes3">Desarrollo social ¿Cómo se relaciona su hijo/a con personas adultas?</label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes3" id="antecedentes3" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes3">Desarrollo social ¿Cómo se relaciona su hijo/a con otros niños?</label>
                                    <input type="text" style="width:1000px;height:100px" class="form-control" name="antecedentes3" id="antecedentes3" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<div class="tab-pane fade" id="tab4">
<div class="row">
    <div class="col-md-6">
        <h3 class="no-s">Importante !</h3>
        <div class="alert alert-info m-t-sm m-b-lg" role="alert">
            El equipo profesional de este servicio desarrolla un trabajo de evaluación desde un modelo transdiciplinario, tras el cual se emite un informe de evaluación conjunto y una única conclusión diagnostica. Este servicio, al requerir multiples profesionales, y por ende tiempo y espacios, tiene un costo asociado. Como apoderado del o la niñ@ a evaluar, usted se compromete a realizar un pago acorde a los servicios prestados según lo conversado con la directora Alejandra González Cavieres.
            <div align="right">
                <P><b>ALTAVIDA</b></P>
                <p>Centro de Recursos <br>Lusitania 30 Miraflores Viña del Mar (32)2633320</p>
            </div>
        </div>
        
    </div>
    <div class="col-md-6"><br>
        <div class="form-group col-md-12">
            <label for="monto pago">Monto comprometido</label>
            <div class="input-group m-b-sm">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" >
            </div>
        <p><small>Este monto debe ser revisado y aceptado por el directorio del centro</small></p>
        </div>
    </div>
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
