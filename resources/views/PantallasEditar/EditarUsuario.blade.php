@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Editar Datos Profesional
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
                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><?php echo $datos["name"]." ". $datos["apellidos"]?></a></li>
                        </ul>

                        </div>

                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="tab1">
                                  <form id="actualizarProfesionalForm" method="post" role="form" action="{{ url('actualizar_datos_profesional') }}">
                                    {!! csrf_field() !!}
                                    <div class="row m-b-lg">
                                        <div class="col-md-8">
                                            <div class="row">
                                              <input type='hidden' name='idUsuario' value="<?php echo $datos["id"] ?>"/>
                                              <div class="form-group  col-md-6">
                                                  <label for="nombre"><small style="color:red">*</small>Nombre Profesional </label>
                                                  <input id="nombre" name="nombre" class="form-control" placeholder="Nombre *" value = <?php echo $datos["name"] ?> required autofocus></input><br>
                                              </div>
                                              <div class="form-group  col-md-6">
                                                  <label for="apellido"><small style="color:red">*</small>Apellidos profesional</label>
                                                  <input id="apellido" name="apellido" class="form-control" placeholder="Apellidos *" value = <?php echo $datos["apellidos"] ?> required autofocus></input><br>
                                              </div>
                                              <div class="form-group  col-md-6">
                                                  <label for="rut"><small style="color:red">*</small>Rut Profesional </label>
                                                  <input id="rut" name="rut" class="form-control" placeholder="Rut *" value = <?php echo $datos["rut"] ?> readonly></input><br>
                                              </div>
                                              <div class='form-group  col-md-6'>
                                                  <label for='mail'><small style='color:red'>*</small>Email</label>
                                                  <input id='mail' name='mail' class='form-control' placeholder='Mail *' value =<?php echo $datos["email"]; ?>   readonly><br>
                                              </div>
                                              <div class='form-group  col-md-6'>
                                                  <label for='fono'><small style='color:red'>*</small>Telefono del Tutor </label>
                                                  <input id='fono' name='fono' class='form-control' placeholder='Nro Telefono *' value ="<?php echo $datos["telefono"]; ?>"   required autofocus><br>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" align="center">
                                            <ul class="pager wizard">
                                              <button name='action' type='submit' class='btn btn-info' data-toggle='modal' >Guardar Cambios</button></li>
                                              </form>

                                                </ul>
                                        </div>

                                    </div>

                                </div>


								<div class="modal fade" id="Ingreso" tabindex="-1" role="dialog" aria-labelledby="IngresoLabel" aria-hidden="true">
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="IngresoLabel">Ficha Solicitud</h3>
            </div>
            <div class="modal-body">
            <div id="resum">

            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-info" data-toggle="modal" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; style="color:white"" >Enviar</button>

            </div>
        </div>
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

                                            <!-- Modal -->
<div class="modal fade" id="Ingreso" tabindex="-1" role="dialog" aria-labelledby="IngresoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="IngresoLabel">Ficha Solicitud</h3>
            </div>
            <div class="modal-body">
            <div id="resum">

            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


@endsection
