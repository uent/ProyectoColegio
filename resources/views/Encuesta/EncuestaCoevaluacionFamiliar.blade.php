
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
<ul class="nav nav-tabs" >
<li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Identificación niñ@</a></li>
<li role="presentation"><a href="#tab2" data-toggle="tab"><i class="icon-folder-alt m-r-xs"></i>Motivo de consulta</a></li>
<li role="presentation"><a href="#tab3" data-toggle="tab"><i class="icon-users m-r-xs"></i>Entorno</a></li>
<li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Conducta</a></li>
</ul>
<div class="progress progress-sm m-t-sm">
<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
</div>
</div>
@if (isset($errors) && count($errors) > 0)
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif
<form id="wizardForm" method="POST" role="form" action="{{ url('Guardar_reporte_tutor') }}" class="form">
  {!! csrf_field() !!}
<div class="tab-content">
<div class="tab-pane fade tab-pane active fade in " id="tab1">
    <div class="row m-b-lg">
        <div class="col-md-6">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputNombre"><small style="color:red">*</small> Nombre de niño/a</label>
                    <input type="text" class="form-control" name="inputNombre" id="inputNombre" value=<?php echo $datos["nombreNino"] ?> readonly>
                </div>
                <div class="form-group  col-md-6">
                    <label for="inputApellido"><small style="color:red">*</small>Apellido de niño/a</label>
                    <input type="text" class="form-control col-md-6" name="inputApellido" id="inputApellido" value=<?php echo $datos["apellidoNino"] ?> readonly>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputRut"><small style="color:red">*</small>RUT de niño/a</label>
                    <input type="text" class="form-control" name="inputRut" id="inputRut" value=<?php echo $datos["rutNino"]; ?> readonly>
                </div>
                <div class="form-group  col-md-12">
                                    <label for="antecedentes3apgar">Prvisión de Salud</label>
                                    <select id="prvision" name="prvision" class="form-group col-md-12">
                                                  <option value="fonasa">Fonasa</option>
                                                  <option value="isapre">Isapre</option>
                                                  <option value="isapre">Ninguno</option>
                                    
                                                </select>
                                    
                                </div>

                <div class="form-group col-md-12">
                    <label for="inputEscolaridad"><small style="color:red">*</small>Escolaridad de niño/a</label>
                    <input type="text" class="form-control" value = "{{ old('inputEscolaridad') }}" name="inputEscolaridad" id="inputEscolaridad"   placeholder="Jardín o Colegio / Nivel o Curso">
                </div><div class="form-group col-md-12">
                    <label for="inputCantHrmns"><small style="color:red">*</small>Número de hermanos</label>
                    <input type="text" class="form-control" value = "{{ old('inputCantHrmns') }}" name="inputCantHrmns" id="inputCantHrmns" placeholder="Total considerando a su hijo en evaluación">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputLugarHrmns"><small style="color:red">*</small>Lugar que ocupa entre los hermanos</label>
                    <input type="text" class="form-control" value = "{{ old('inputLugarHrmns') }}" name="inputLugarHrmns" id="inputLugarHrmns" placeholder="(primero, segundo, etc)">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputNombrePadre"><small style="color:red">*</small>Nombre del padre</label>
                    <input type="text" class="form-control" value = "{{ old('inputNombrePadre') }}" name="inputNombrePadre" id="inputNombrePadre">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputNombreMadre"><small style="color:red">*</small>Nombre de la madre</label>
                    <input type="text" class="form-control" value = "{{ old('inputNombreMadre') }}" name="inputNombreMadre" id="inputNombreMadre">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputDireccion"><small style="color:red">*</small>Dirección</label>
                    <input type="text" class="form-control" value = "{{ old('inputDireccion') }}" name="inputDireccion" id="inputDireccion">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputTelefono"><small style="color:red">*</small>Teléfono de Contacto</label>
                    <input type="text" class="form-control"  name="inputTelefono" value=<?php echo $datos["telefonoTutor"] ?> id="inputTelefono" readonly>
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail"><small style="color:red">*</small>Correo Electrónico</label>
                    <input type="email" class="form-control"  name="exampleInputEmail" id="exampleInputEmail" value=<?php echo $datos["emailTutor"] ?> readonly>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputNombreCompletaFicha">Nombre de quien completa la ficha</label>
                    <input type="text" class="form-control"  name="inputNombreCompletaFicha" id="inputNombreCompletaFicha" value=<?php echo ($datos["nombreTutor"] .  ' ' . $datos["apellidosTutor"]); ?> >
                </div>

                <div class="form-group col-md-12">
                    <input type="hidden" class="form-control" value = <?php echo $datos["idOrden"] ?> name="idOrden" id="idOrden">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Información Personal</h3>
            <p>Debe completar este cuestionario con la mayor fidelidad posible. Su propósito es favorecer el proceso de evaluación que está por comenzar junto a su hijo/a</p>
            <p style="color:red"><small>Los campos con * son obligatorios</small></p>
        </div>
    </div>
</div>
<div class="tab-pane fade " id="tab2">
    <div class="row">

        <div class="col-md-12">
            <div class="form-group col-md-12">
                <label for="motivo1"><small style="color:red">*</small>¿Por qué solicita la evaluación?</label>
                <input type="text" value = "{{ old('motivo1') }}" style="width:1000px;height:100px" class="form-control" name="motivo1" id="motivo1" placeholder="¿Algún profesional o institución deriva para evaluación?">
            </div>
            <div class="form-group col-md-12">
                <label for="motivo2"><small style="color:red">*</small>¿Qué expectativas tiene respecto al proceso de evaluación?</label>
                <input type="text" value = "{{ old('motivo2') }}" style="width:1000px;height:100px" class="form-control" name="motivo2" id="motivo2" placeholder="Ej: Determinar diagnóstico, recibir apoyos profesionales, acceder a escolaridad especializada, recibir orientación familiar, etc.)">
            </div>
            <div class="form-group col-md-12">
                <label for="motivo3"><small style="color:red">*</small>¿Qué tipo de dificultad presenta actualmente su hijo/a? </label>
                <input type="text" value = "{{ old('motivo3') }}" style="width:1000px;height:100px" class="form-control" name="motivo3" id="motivo3" placeholder="Por favor poner especial atención respecto de su desarrollo social, desarrollo del lenguaje, flexibilidad y adaptación al cambio, movimiento intereses o juegos peculiares.">
            </div>
            <div class="form-group col-md-12">
                <label for="motivo4"><small style="color:red">*</small>¿Se le han realizado otras evaluaciones profesionales o examenes médios?  </label>
                <select class="form-control" name="motivo4" id="motivo4">
                <option value = 'si'> SI</option>
                <option value = 'no'> NO</option>
                </select><br>
                <p><small>Si la respuesta es afirmativa, ingrese los siguientes campos</small></p>
            </div>

            <div class="form-group col-md-3">
                <label for="motivo4profesional">Profesional </label>
                <input type="text" value = "{{ old('motivo4profesional') }}" class="form-control col-md-4" name="motivo4profesional" id="motivo4profesional" placeholder="Nombre y especialidad">
            </div>
            <div class="form-group col-md-1">
                <label for="motivo4anio">Año</label>
                <input type="text" value = "{{ old('motivo4anio') }}" class="form-control col-md-2" name="motivo4anio" id="motivo4anio" >
            </div>
            <div class="form-group col-md-2">
                <label for="motivo4motivo">Motivo </label>
                <input type="text" value = "{{ old('motivo4motivo') }}" class="form-control col-md-4" name="motivo4motivo" id="motivo4motivo">
            </div>
            <div class="form-group col-md-3">
                <label for="motivo4diagnostico">Diagnóstico </label>
                <input type="text" value = "{{ old('motivo4diagnostico') }}" class="form-control col-md-4" name="motivo4diagnostico" id="motivo4diagnostico">
            </div>
            <div class="form-group col-md-3">
                <label for="motivo4indicaciones">Indicaciones </label>
                <input type="text" value = "{{ old('motivo4indicaciones') }}" class="form-control col-md-4" name="motivo4indicaciones" id="motivo4indicaciones" placeholder="Medicamentos / Dosis">
            </div>
            <div class="form-group col-md-12">
                <label for="motivo5"><small style="color:red">*</small>¿Tiene actualmente un profesional / médico tratante?  </label>
                <select class="form-control" name="motivo5" id="motivo5">
                <option value = 'si'> SI</option>
                <option value = 'no'> NO</option>
                </select><br>
                <p><small>Si la respuesta es afirmativa, ingrese el siguientes campos</small></p>
            </div>
            <div class="form-group col-md-12">
                <label for="motivo5indicacion">Indique especialidad y frecuencia.</label>
                <input type="text" value = "{{ old('motivo5indicacion') }}" style="width:1000px;height:100px" class="form-control" name="motivo5indicacion" id="motivo5indicacion">
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
                                    <label for="contexto1"><small style="color:red">*</small>¿Quiénes integran su familia y qué ocupaciones tienen?</label>
                                    <input type="text" value = "{{ old('contexto1') }}" style="width:900px;height:100px" class="form-control" name="contexto1" id="contexto1">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="contexto2"><small style="color:red">*</small>¿Existen antecedentes de enfermedades importantes en su familia?, ¿Cuáles? </label>
                                    <input type="text" value = "{{ old('contexto2') }}" style="width:900px;height:100px" class="form-control" name="contexto2" id="contexto2" placeholder="Indique enfermedades médicas y/o psicológicas">
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
                        <div id="2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo2">
                            <div class="panel-body">
                                <div class="form-group col-md-12">
                                    <label for="antecedentes1"><small style="color:red">*</small>¿Cómo fue el desarrollo del embarazo?</label>
                                    <input type="text" value = "{{ old('antecedentes1') }}" style="width:900px;height:100px" class="form-control" name="antecedentes1" id="antecedentes1" placeholder="(edad al momento del embarazo, situaciones relevantes durante el mismo, enfermedades, accidentes, uso de medicamentos)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes2"><small style="color:red">*</small>¿Con cuántas semanas de gestación nació su hijo(a? </label>
                                    <input type="text" value = "{{ old('antecedentes2') }}" style="width:900px;height:100px" class="form-control" name="antecedentes2" id="antecedentes2">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes3"><small style="color:red">*</small>¿Cómo fue el parto? 
                                    <input type="text" value = "{{ old('antecedentes3') }}" style="width:900px;height:100px" class="form-control" name="antecedentes3" id="antecedentes3" placeholder="(parto normal o cesárea, inducción del parto, fórceps)">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="antecedentes3peso"><small style="color:red">*</small>Peso</label>
                                    <input type="text" value = "{{ old('antecedentes3peso') }}" class="form-control" name="antecedentes3peso" id="antecedentes3peso" placeholder="En kilogramos  Ej: 3.6">
                                </div>
                                <div class="form-group  col-md-4">
                                    <label for="antecedentes3talla"><small style="color:red">*</small>Talla</label>
                                    <input type="text" value = "{{ old('antecedentes3talla') }}" class="form-control col-md-4" name="antecedentes3talla" id="antecedentes3talla" placeholder="En centímetros Ej: 45.7">
                                </div>

                                <div class="form-group  col-md-4">
                                    <label for="antecedentes3apgar"><small style="color:red">*</small>APGAR<small style="color:black">si no recuerda marque 0</small> </label><br>
                                    <input type="text" value = "{{ old('antecedentes3apgar') }}" class="form-control"  name="antecedentes3apgar" id="antecedentes3apgar" placeholder="Ej: 9/10">
                                                                    </div>
                                
                                

                                <div class="form-group col-md-12">
                                    <label for="antecedentes4"><small style="color:red">*</small>¿Cómo transcurrió el primer año de vida de su hijo/a?  </label>
                                    <input type="text" value = "{{ old('antecedentes4') }}" style="width:900px;height:100px" class="form-control" name="antecedentes4" id="antecedentes4" placeholder="(datos relevantes, salud, medicamentos)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="antecedentes5"><small style="color:red">*</small>Su hijo/a ¿Ha tenido o tiene enfermedades relevantes?  </label>
                                    <input type="text" value = "{{ old('antecedentes5') }}" style="width:900px;height:100px" class="form-control" name="antecedentes5" id="antecedentes5" placeholder="Especifique enfermedad, medicamento y dosis.">
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
                        <div id="3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree3">
                            <div class="panel-body">
                                <div class="form-group col-md-12">
                                    <label for="desarrollo1"><small style="color:red">*</small>Marcha, edad de adquisición y posterior evolución.</label>
                                    <input type="text" value = "{{ old('desarrollo1') }}" style="width:900px;height:100px" class="form-control" name="desarrollo1" id="desarrollo1">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desarrollo2"><small style="color:red">*</small>Control de esfínter diurno y nocturno, edad de adquisición y posterior evolución.</label>
                                    <input type="text" value = "{{ old('desarrollo2') }}" style="width:900px;height:100px" class="form-control" name="desarrollo2" id="desarrollo2" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desarrollo3"><small style="color:red">*</small>Habilidades motrices gruesas, ejemplo: coordinación para trasladarse, correr, hacer deportes, etc.</label>
                                    <input type="text" value = "{{ old('desarrollo3') }}" style="width:900px;height:100px" class="form-control" name="desarrollo3" id="desarrollo3" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desarrollo4"><small style="color:red">*</small>Habilidades motrices finas, ejemplo: tomar el lápiz, manejar los cubiertos, etc.</label>
                                    <input type="text" value = "{{ old('desarrollo4') }}" style="width:900px;height:100px" class="form-control" name="desarrollo4" id="desarrollo4" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desarrollo5"><small style="color:red">*</small>Adquisición del lenguaje. Señale si el desarrollo del lenguaje ha sido normal, rápido o con dificultades. </label>
                                    <input type="text" value = "{{ old('desarrollo5') }}" style="width:900px;height:100px" class="form-control" name="desarrollo5" id="desarrollo5" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desarrollo6"><small style="color:red">*</small>¿Qué dificultades ha presentado en el ámbito del lenguaje? (comprensión, expresión, etc.)</label>
                                    <input type="text" value = "{{ old('desarrollo6') }}" style="width:900px;height:100px" class="form-control" name="desarrollo6" id="desarrollo6" placeholder="(comprensión, expresión, etc.)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desarrollo7"><small style="color:red">*</small>Desarrollo social ¿Cómo se relaciona su hijo/a con personas adultas?</label>
                                    <input type="text" value = "{{ old('desarrollo7') }}" style="width:900px;height:100px" class="form-control" name="desarrollo7" id="desarrollo7" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desarrollo8"><small style="color:red">*</small>Desarrollo social ¿Cómo se relaciona su hijo/a con otros niños?</label>
                                    <input type="text" value = "{{ old('desarrollo8') }}" style="width:900px;height:100px" class="form-control" name="desarrollo8" id="desarrollo8" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desarrollo9"><small style="color:red">*</small>¿Qué tan autónomo/a es para las siguientes actividades?<small>Marque a continuación</small></label>
                                    <table><thead>
                                        <tr>
                                            <th>Actividad de la vida diaria (AVD)</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Comer</th>
                                            <th><select id="comer" name="comer" class="form-group col-md-12">
                                                  <option value="solo">Solo</option>
                                                  <option value="pocaAyuda">Con poca ayuda</option>
                                                  <option value="muchaAyuda">Con mucha Ayuda</option>
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Vestirse</th>
                                            <th><select id="vestirse" name="vestirse" class="form-group col-md-12">
                                                  <option value="solo">Solo</option>
                                                  <option value="pocaAyuda">Con poca ayuda</option>
                                                  <option value="muchaAyuda">Con mucha Ayuda</option>
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Higiene<small>(lavarse las manos y dientes, baño)</small></th>
                                            <th><select id="higiene" name="higiene" class="form-group col-md-12">
                                                  <option value="solo">Solo</option>
                                                  <option value="pocaAyuda">Con poca ayuda</option>
                                                  <option value="muchaAyuda">Con mucha Ayuda</option>
                                                </select>
                                            </th>
                                        </tr>
                                    </thead></table>



                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desarrollo10"><small style="color:red">*</small>¿Cuáles son sus hábitos alimenticios?¿Qué alimentos prefiere?¿Amplio repertorio o restringido?</label>
                                    <input type="text" value = "{{ old('habitosAlimenticios') }}" style="width:900px;height:100px" class="form-control" name="habitosAlimenticios" id="habitosAlimenticios" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade " id="tab4">
<div class="row">
    <div class="col-md-12">
    <div class="panel-body">
        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
            <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingOne1">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#1AC" aria-expanded="true" aria-controls="collapseOne">
                            Ámbito Conductual
                        </a>
                    </h4>
                </div>
                <div id="1AC" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="panel-body">
                        <div class="form-group col-md-12">
                            <label for="ambitoConductual1"><small style="color:red">*</small>¿Cómo manifiesta sus emociones?<small>(de manera adecuada, exagerada, poco atingente al contexto)</small></label>
                            <input type="text" value = "{{ old('ambitoConductual1') }}" style="width:900px;height:100px" class="form-control" name="ambitoConductual1" id="ambitoConductual1">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="ambitoConductual2"><small style="color:red">*</small>¿Cómo manifiesta la frustración? ¿Es muy irritable? ¿Hace pataletas? ¿En que momento y con quién aparecen las pataletas?</label>
                            <input type="text" value = "{{ old('ambitoConductual2') }}" style="width:900px;height:100px" class="form-control" name="ambitoConductual2" id="ambitoConductual2">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="ambitoConductual3"><small style="color:red">*</small>¿Es flexible en cuanto a actividades o tiene rutinas? <small>(ej: prefiere mantener ciertas actividades en algún orden determinado)</small>¿Cuáles?</label>
                            <input type="text" value = "{{ old('ambitoConductual3') }}" style="width:900px;height:100px" class="form-control" name="ambitoConductual3" id="ambitoConductual3">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="ambitoConductual4"><small style="color:red">*</small>¿Tiene intereses claros por algunos objetos o actividades? ¿Reitera en ellos de manera normal o exagerada?</label>
                            <input type="text" value = "{{ old('ambitoConductual4') }}" style="width:900px;height:100px" class="form-control" name="ambitoConductual4" id="ambitoConductual4">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="ambitoConductual5"><small style="color:red">*</small>¿Tiene miedos muy intensos? ¿Cuáles?</label>
                            <input type="text" value = "{{ old('ambitoConductual5') }}" style="width:900px;height:100px" class="form-control" name="ambitoConductual5" id="ambitoConductual5">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="ambitoConductual6"><small style="color:red">*</small>¿Cómo son sus hábitos de sueños?</label>
                            <input type="text" value = "{{ old('ambitoConductual6') }}" style="width:900px;height:100px" class="form-control" name="ambitoConductual6" id="ambitoConductual6">
                        </div>

                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading" role="tab" id="headingTwo2">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#2AC" aria-expanded="false" aria-controls="collapseTwo">
                            Historia Escolar
                        </a>
                    </h4>
                </div>
                <div id="2AC" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo2">
                    <div class="panel-body">
                        <div class="form-group col-md-12">
                            <label for="historiaEscolar1"><small style="color:red">*</small>Inicio de escolaridad<small>(año y establecimiento)</small></label>
                            <input type="text" value = "{{ old('historiaEscolar1') }}" style="width:900px;height:100px" class="form-control" name="historiaEscolar1" id="historiaEscolar1">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="historiaEscolar2"><small style="color:red">*</small>Otros establecimientos posteriores<small>(año y lugar)</small></label>
                            <input type="text" value = "{{ old('historiaEscolar2') }}" style="width:900px;height:100px" class="form-control" name="historiaEscolar2" id="historiaEscolar2">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="historiaEscolar3"><small style="color:red">*</small>Establecimiento Actual</label>
                            <input type="text" value = "{{ old('historiaEscolar3') }}" style="width:900px;height:100px" class="form-control" name="historiaEscolar3" id="historiaEscolar3">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="historiaEscolar4"><small style="color:red">*</small>Nivel/Curso Actual</label>
                            <input type="text" value = "{{ old('historiaEscolar4') }}" style="width:900px;height:100px" class="form-control" name="historiaEscolar4" id="historiaEscolar4">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="historiaEscolar5"><small style="color:red">*</small>Repitencias</label>
                            <input type="text" value = "{{ old('historiaEscolar5') }}" style="width:900px;height:100px" class="form-control" name="historiaEscolar5" id="historiaEscolar5">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="historiaEscolar6"><small style="color:red">*</small>Comentarios, observaciones o inquietudes que quiera manifestar?</label>
                            <input type="text" value = "{{ old('historiaEscolar6') }}" style="width:900px;height:100px" class="form-control" name="historiaEscolar6" id="historiaEscolar6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading" role="tab" id="headingThree3">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#3AC" aria-expanded="false" aria-controls="collapseThree">
                            Finalizar
                        </a>
                    </h4>
                </div>
                <div id="3AC" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree3">
                    <div class="panel-body">
                            <div class="col-md-6">
                                <h3 class="no-s">Importante !</h3>
                                <div class="alert alert-info m-t-sm m-b-lg" role="alert">
                                    El equipo profesional de este servicio desarrolla un trabajo de evaluación desde un modelo transdiciplinario, tras el cual se emite un informe de evaluación conjunto y una única conclusión diagnostica.
                                    Este servicio, al requerir multiples profesionales, y por ende tiempo y espacios, tiene un costo asociado. Como apoderado del o la niñ@ a evaluar, usted se compromete a realizar un pago acorde a los servicios prestados según lo conversado con la directora Alejandra González Cavieres.
                                    <div align="right">
                                        <P><b>ALTAVIDA</b></P>
                                        <p>Centro de Recursos <br>Lusitania 30 Miraflores Viña del Mar (32)2633320</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6"><br>
                                <div class="form-group col-md-12">
                                    <label for="monto_pago"><small style="color:red">*</small>Monto comprometido</label>
                                    <div class="input-group m-b-sm">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" value = "{{ old('monto_pago') }}" name="monto_pago" id="monto_pago">
                                    </div>
                                <p><small>Este monto debe ser revisado y aceptado por el directorio del centro</small></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div align="center"><button type="button" align="center" class="btn btn-info" data-toggle="modal" data-target="#myModal">Enviar</button></div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">Bienvenido al Servicio de Evaluación ALTAVIDA</h3>


                </div>

                <div class="modal-body">

                    El servicio de Evaluación del Centro de Recursos Altavida, desarrollado por la Institución desde el año 2004, tiene el propósito de orientar a las familias para que estas puedan acceder a una explicación respecto de las dificultades evolutivas observadas en su hijo o hija, a fin de que puedan toar decisiones de manera informada. Con este propósito una vez que la familia solicita nuestro servicio se desarrollan acciones profesionales especificas que permiten acceder a la siguiente información:<br>
                    <ul>
                      <li>Historial evolutivo retrospectivo</li>
                      <li>Nivel de desarrollo evolutivo actual</li>
                      <li>Dificultades observadas en las distintas áreas del desarrollo</li>
                      <li>Identificación de los requerimientos de apoyo</li>
                      <li>Potencial de aprendizaje</li>
                      <li>Necesidades educativas</li>
                      <li>Determinación nosológica de as dificultades</li>
                      <li>Diagnóstico clínico categorial</li>
                    </ul>

                    Los profesionales que conforman el equipo son:
                    <ul>
                      <li>Alejandra González Cavieres <b>Psicóloga</b></li>
                      <li>María Paz de la Maza        <b>Educadora Diferencial</b></li>
                      <li>Estefanía Guerrero          <b>Fonoaudióloga</b></li>
                      <li>Carla Martínez              <b>Terapeuta Ocupacional</b></li>
                      <li>Marcela Villegas Otarola    <b>Educadora Diferencial</b></li>
                    </ul>
                    <br><br>
                    <p><small>*El Servicio de Evaluación de Altavida contempla las consideraciones técnicas otorgadas por diversos organismos internacionales respecto de buenas prácticas para el proceso de evaluación diagnóstica. Si usted gusta puede acceder al siguiente enlace en buscas de mayor información:
                    <a href="http://aetapi.org/documentos-aetapi-mesa-de-diagnostico-y-evaluacion/">Aetapi | Asociación Española de Profesionales de Autismo</a></small> </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-info" data-toggle="modal" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; style="color:white" >Enviar</button>
                </div>
            </div>
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
