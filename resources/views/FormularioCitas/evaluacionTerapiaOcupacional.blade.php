@extends ('layouts.admin')
@section('nombrePagina')
  Evaluación | Terapia Ocupacional
@endsection
@section('contenido')
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">Evaluación Terapia Ocupacional</h4>
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
                  <form id="forma" class="form-horizontal col-md-4" align="center" method='post' action='guardar_reporte_terapista_ocupacional'>
                    <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
                        <table>
                          <tr align="center">
                            <td><b>Área de Desarrollo</b></td>
                            <td><b>Observaciones</b> </td>
                            <td><b>Sugerencias</b> </td>
                          </tr>
                          <tr>
                            <td>Coordinación motriz gruesa y fina</td>
                            <td><textarea rows="4" cols="30" id="coordinacionObs" name="coordinacionObs"></textarea></td>
                            <td><textarea rows="4" cols="30" id="coordinacionSug" name="coordinacionSug"></textarea></td>
                          </tr>
                          <tr>
                            <td>Procesamiento sensorial</td>
                            <td><textarea rows="4" cols="30" id="procesamientoObs" name="procesamientoObs"></textarea></td>
                            <td><textarea rows="4" cols="30" id="procesamientoSug" name="procesamientoSug"></textarea></td>
                          </tr>
                          <tr>
                            <td>Conclusiones y sugerencias de apoyo</td>
                            <td colspan="3"><textarea rows="4" cols="64" id="concluSugerenias" name="concluSugerencias"></textarea></td>

                          </tr>

                        </table>
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
            coordinacionObs:{
              required: true
            },
            coordinacionSug:{
              required: true
            },
            procesamientoObs:{
              required: true
            },
            procesamientoSug:{
              required: true
            }

        }
    });

});

</script>
@endsection
