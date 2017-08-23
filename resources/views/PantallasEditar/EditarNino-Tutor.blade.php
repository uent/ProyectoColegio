@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Datos Niño/a
@endsection



@section('contenido')
<script src="{{asset('js/ingresoValidator.js')}}"></script>
<script src="{{asset('js/resumenIngreso.js')}}"></script>


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
                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Niñ@ <?php echo $datos["nino"]["nombre"]." ". $datos["nino"]["apellidos"]?></a></li>
                            <?php if(count($datos["tutores"]) > 0)
                            {
                              $i=2;
                              foreach($datos["tutores"] as $t)
                              {?>
                                <li role="presentation"><a href="#tab<?php echo $i;?>" data-toggle="tab"><i class="fa fa-users m-r-xs"></i>Tutor  <?php echo $t["nombreTutor"]." ".$t["apellidosTutor"]; ?> </a></li>
                                <?php
                                $i++;
                              }
                            }?>
                              <li role="presentation"><a href="#tab<?php echo $i;?>" data-toggle="tab"><i class="fa fa-users m-r-xs"></i> Ordenes de diagnóstico</a></li>
                        </ul>

                        </div>

                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="tab1">
                                  <form id="ingresoForm" method="post" role="form" action="{{ url('actualizar_datos_Nino') }}">
                                    {!! csrf_field() !!}
                                    <div class="row m-b-lg">
                                        <div class="col-md-8">
                                            <div class="row">
                                              <input type='hidden' name='idNino' value="<?php echo $datos["nino"]["idNino"] ?>"/>
                                              <div class="form-group  col-md-6">
                                                  <label for="nombreNino"><small style="color:red">*</small>Nombre de niño/a </label>
                                                  <input id="nombreNino" name="nombreNino" class="form-control" placeholder="Nombre *" value = <?php echo $datos["nino"]["nombre"] ?> required autofocus></input><br>
                                              </div>
                                              <div class="form-group  col-md-6">
                                                  <label for="apellidoNino"><small style="color:red">*</small>Apellidos de niño/a </label>
                                                  <input id="apellidoNino" name="apellidoNino" class="form-control" placeholder="Apellidos *" value = <?php echo $datos["nino"]["apellidos"] ?> required autofocus></input><br>
                                              </div>
                                              <div class="form-group  col-md-6">
                                                  <label for="rutNino"><small style="color:red">*</small>Rut de niño/a </label>
                                                  <input id="rutNino" name="rutNino" class="form-control" placeholder="Rut *" value = <?php echo $datos["nino"]["rut"] ?> readonly></input><br>
                                              </div>
                                              <div class="form-group  col-md-6">
                                                  <label for="fechaNacimiento"><small style="color:red">*</small>Fecha Nacimiento del niño/a </label>
                                                  <input id="fechaNacimiento" name="fechaNacimiento" class="form-control date-picker" placeholder="Fecha nacimiento *" value = <?php echo $datos["nino"]["fechaNacimiento"]?> required autofocus></input><br>
                                              </div>

                                              </div>
                                        </div>
                                        <div class="col-md-4" align="center">
                                            <ul class="pager wizard">
                                              <button name='action' type='submit' value='Ver Datos' class='btn btn-info' data-toggle='modal' >Guardar Cambios</button></li>
                                              </form>

                                                </ul>
                                        </div>

                                    </div>

                                </div>

                            <?php if(count($datos["tutores"]) > 0)
                            {
                              $i=2;
                              foreach($datos["tutores"] as $t)
                              {
                                ?>
                                          <div class="tab-pane fade" id="tab<?php echo $i; ?>">
                                          <div class="col-md-8">
                                              <div class="row">
                                                  <div class="form-group">
                                        <form id="actualizarTutorForm" method="post" role="form" action="{{ url('actualizar_datos_tutor') }}">
                                          {!! csrf_field() !!}
                                          <input type='hidden' name='idTutor' value="<?php echo $t["idTutor"]; ?>"/>
                                          <div class='form-group  col-md-6'>
                                              <label for='nombreTutor'><small style='color:red'>*</small>Nombre del Tutor </label>
                                              <input id='nombreTutor' name='nombreTutor' class='form-control' placeholder='Nombre *' value =<?php  echo $t["nombreTutor"]; ?>  required autofocus><br>
                                          </div>
                                          <div class='form-group  col-md-6'>
                                              <label for='apellidoTutor'><small style='color:red'>*</small>Apellidos del Tutor </label>
                                              <input id='apellidoTutor' name='apellidoTutor' class='form-control' placeholder='Apellidos *' value =<?php echo $t["apellidosTutor"]; ?>   required autofocus><br>
                                          </div>
                                          <div class='form-group  col-md-6'>
                                              <label for='rutTutor'><small style='color:red'>*</small>Rut del Tutor </label>
                                              <input id='rutTutor' name='rutTutor' class='form-control' placeholder='Rut *' value =<?php echo $t["rutTutor"]; ?>   readonly><br>
                                          </div>
                                          <div class='form-group  col-md-6'>
                                              <label for='mailTutor'><small style='color:red'>*</small>Email del Tutor </label>
                                              <input id='mailTutor' name='mailTutor' class='form-control' placeholder='Mail *' value =<?php echo $t["emailTutor"]; ?>   readonly><br>
                                          </div>
                                          <div class='form-group  col-md-6'>
                                              <label for='fonoTutor'><small style='color:red'>*</small>Telefono del Tutor </label>
                                              <input id='fonoTutor' name='fonoTutor' class='form-control' placeholder='Nro Telefono *' value ="<?php echo $t["telefonoTutor"]; ?>"   required autofocus><br>
                                          </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="col-md-4" align="center">
                                    <ul class="pager wizard">
                                      <button name='action' type='submit' value='Ver Datos' class='btn btn-info' data-toggle='modal' >Guardar Cambios</button></li>
                                      </form>

                                        </ul>
                                </div>
                                </div>

                                <?php
                                $i++;
                              }
                            }
                            if(count($datos["ordenes"]) > 0)
                            {
                              $contador = 1;
                              foreach($datos["ordenes"] as $orden)
                              { ?>
                                <div class="tab-pane fade" id="tab<?php echo $i; ?>">
                                  <h3>
                                    Orden de Diagnostico Nro: <?php echo $contador; ?>
                                  </h3>
                                  <div class="col-md-8">
                                    <div class="row">
                                        <div class="form-group">

                                          <div class='form-group  col-md-6'>
                                            <label for='Prioridad'><small style='color:red'></small>Prioridad</label>
                                            <input id='prioridad' name='prioridad' class='form-control' placeholder='Prioridad' value =<?php  echo $orden["prioridad"]; ?>   readonly><br>
                                          </div>
                                          <div class='form-group  col-md-6'>
                                            <label for='fechaCreacionOrden'><small style='color:red'></small>Fecha Creacion</label>
                                            <input id='fechaCreacionOrden' name='fechaCreacionOrden' class='form-control' placeholder='Fecha Creacion' value =<?php  echo $orden["inicio"]; ?>   readonly><br>
                                          </div>

                                  <h4>
                                    Citas
                                  </h4>

                                  <div class="col-md-12">

                                  <?php
                                  foreach($orden["citas"] as $c)
                                  { ?>
                                      <h5>
                                        <?php echo $c["tipoEvaluacion"]; ?>
                                      </h5>

                                      <div class='form-group  col-md-6'>
                                        <label for='Estado'><small style='color:red'></small>Estado</label>
                                        <input id='Estado' name='Estado' class='form-control' placeholder='Estado' value ="<?php  echo $c["estado"]; ?>"   readonly><br>
                                      </div>

                                      <?php if($c["estado"] != "sin asignar" )
                                      {?>
                                        <div class='form-group  col-md-6'>
                                          <label for='fechaCita'><small style='color:red'></small>Fecha Cita</label>
                                          <input id='fechaCita' name='fechaCita' class='form-control' placeholder='fechaCita' value ="<?php  echo $c["fechaCita"]; ?>"   readonly><br>
                                        </div>

                                        <form id="pedirRevisionCitaForm" method="get" role="form" action="{{ url('pedir_revision_cita') }}">
                                          {!! csrf_field() !!}
                                          <input type='hidden' name='idCita' value="<?php echo $c["idCita"]; ?>"/>
                                            <div class="col-md-4" align="center">
                                            <ul class="pager wizard">
                                              <button name='action' type='submit' value='Pedir Revision' class='btn btn-info' data-toggle='modal' >Pedir Revision</button></li>
                                      </form>
                                        <?php
                                      } ?>

                                  <?php
                                  }
                                   ?>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                <?php
                                }
                                ?>


                                        </div>


                          <?php
                            }
                            ?>



                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->



</div><!-- Page Inner -->

                                            <!-- Modal -->

</div>
</div>
</div>
</div>
</div>
</div>


@endsection
