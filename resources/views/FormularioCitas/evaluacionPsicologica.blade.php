@extends ('layouts.admin')
@section('nombrePagina')
  Evaluación | Psicológica
@endsection
@section('contenido')

<?php



 ?>


<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">Evaluación Psicológica</h4>
                </div>
                <div class="panel-body" >
                <b>Nombre:</b> <?php echo $datos["nombre"] , " ", $datos["apellidos"]; ?> <br>
                <b>Rut: </b><?php echo $datos["rut"]; ?><br>
                <b>Estado: </b><?php echo $datos["estado"]; ?><br>

                <form class="form-horizontal col-md-4" align="center" method='get' action='GenerarInformeCoEvaluacion' target="_blank">
                  <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
                <b>  <input type='submit' name='action' value='PDF informe co-evaluacion'/><br>
                </form>

                <?php  if($datos["comentarios"] != "")
                {
                  echo"
                  <b>Comentarios u Observaciones: </b>";
                    echo $datos["comentarios"];

                }?><br>

                    <form id="forma" class="form-horizontal col-md-12" align="center" method='post' action='guardar_reporte_psicologico'>
                      <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
                        <table class="table table-bordered">
                        <tr>
                            <td>Procedimiento de Evaluación</td>
                            <td><textarea rows="10" cols="64" id="procEvaluaPsicologo" name="procEvaluaPsicologo"></textarea></td>
                          </tr>
                          <tr align="center">
                            <td><b>Área de Desarrollo</b></td>
                            <td><b>Caracterización</b> </td>
                          </tr>
                          <tr>
                            <td>Desarrollo Social</td>
                            <td><textarea rows="4" cols="64" id="desarrolloSocial" name="desarrolloSocial">{{ old('desarrolloSocial' , $datos["datosInformes"]->desarrolloSocialPsicologo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Respuesta Emocional</td>
                            <td><textarea rows="4" cols="64" id="respEmocional" name="respEmocional">{{ old('respEmocional' , $datos["datosInformes"]->respEmocionalPsicologo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Referencia Conjunta</td>
                            <td><textarea rows="4" cols="64" id="refConjunta" name="refConjunta">{{ old('refConjunta' , $datos["datosInformes"]->refConjuntaPsicologo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Juego</td>
                            <td><textarea rows="4" cols="64" id="juego" name="juego">{{ old('juego' , $datos["datosInformes"]->juegoPsicologo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Comunicación y Lenguaje</td>
                            <td><textarea rows="4" cols="64" id="conmunicacionLeng" name="conmunicacionLeng">{{ old('conmunicacionLeng' , $datos["datosInformes"]->conmunicacionLengPsicologo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Flexibilidad Mental</td>
                            <td><textarea rows="4" cols="64" id="flexMental" name="flexMental">{{ old('flexMental' , $datos["datosInformes"]->flexMentalPsicologo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Pensamiento</td>
                            <td><textarea rows="4" cols="64" id="pensamiento" name="pensamiento">{{ old('pensamiento' , $datos["datosInformes"]->pensamientoPsicologo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Comportamiento General</td>
                            <td><textarea rows="4" cols="64" id="comportamientoGnrl" name="comportamientoGnrl">{{ old('comportamientoGnrl' , $datos["datosInformes"]->comportamientoGnrlPsicologo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Conclusión/Sugerencia de Apoyo</td>
                            <td><textarea rows="4" cols="64" id="conclu" name="conclu">{{ old('conclu' , $datos["datosInformes"]->concluPsicologo) }}</textarea></td>
                          </tr>
                        </table>


                        </div>

                        {!! csrf_field() !!}
                        <input type='submit' name='action' value='Completar cita'/>
                        <input type='hidden' name='tipoCita' value='",$datos["datos"]["tipoCita"],"'/>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->
<script>
  $(document).ready(function() {
    var $validator = $("#forma").validate({
        rules: {
          desarrolloSocial: {
                required: true
            },
          respEmocional: {
                required: true
            },
          refConjunta: {
                required: true
            },
          juego: {
                required: true
            },
          conmunicacionLeng: {
                required: true
            },
          flexMental: {
                required: true
            },
          pensamiento: {
                required: true
            },
          comportamientoGnrl: {
                required: true
            },
          conclu: {
                required: true
            }


        }
    });
});
</script>
@endsection
