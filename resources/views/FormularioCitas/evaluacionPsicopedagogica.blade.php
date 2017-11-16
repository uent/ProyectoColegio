@extends ('layouts.admin')
@section('nombrePagina')
  Evaluación | Psicopedagogica
@endsection
@section('contenido')
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">Evaluación Psicopedagógica</h4>
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
                        <form id="foma" class="form-horizontal col-md-4" align="center" method='post' action='guardar_reporte_psicopedagogo'>
                            <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
                        <table class="table table-bordered">
                          <tr align="center">
                            <td><b>Área de Desarrollo</b></td>
                            <td><b>Nivel de Evolución</b> </td>
                            <td><b>NEE/Sugerencias de Apoyo</b> </td>
                          </tr>
                          <tr>
                            <td>Funciones <br> Psicopsicologicológicas<br> Básicas</td>
                            <td><textarea rows="10" cols="30" id="FPBNE1" name="FPBNE1">{{old('FPBNE1' , $datos["datosInformes"]->FPBNE1Psicopedagogo)}}</textarea></td>
                            <td><textarea rows="10" cols="30" id="FPBNEESug1" name="FPBNEESug1">{{ old('FPBNEESug1' , $datos["datosInformes"]->FPBNEESug1Psicopedagogo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><textarea rows="4" cols="30" id="FPBNE2" name="FPBNE2">{{ old('FPBNE2' , $datos["datosInformes"]->FPBNE2Psicopedagogo) }}</textarea></td>
                            <td><textarea rows="4" cols="30" id="FPBNEESug2" name="FPBNEESug2">{{ old('FPBNEESug2' , $datos["datosInformes"]->FPBNEESug2Psicopedagogo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><textarea rows="4" cols="30" id="FPBNE3" name="FPBNE3">{{ old('FPBNE3' , $datos["datosInformes"]->FPBNE3Psicopedagogo) }}</textarea></td>
                            <td><textarea rows="4" cols="30" id="FPBNEESug3" name="FPBNEESug3">{{ old('FPBNEESug3' , $datos["datosInformes"]->FPBNEESug3Psicopedagogo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><textarea rows="4" cols="30" id="FPBNE4" name="FPBNE4">{{ old('FPBNE4' , $datos["datosInformes"]->FPBNE4Psicopedagogo) }}</textarea></td>
                            <td><textarea rows="4" cols="30" id="FPBNEESug4" name="FPBNEESug4">{{ old('FPBNEESug4' , $datos["datosInformes"]->FPBNEESug4Psicopedagogo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Comportamiento General</td>
                            <td><textarea rows="4" cols="30" id="comportamientoNivel" name="comportamientoNivel">{{ old('comportamientoNivel' , $datos["datosInformes"]->comportamientoNivelPsicopedagogo) }}</textarea></td>
                            <td><textarea rows="4" cols="30" id="ComportamientoSug" name="ComportamientoSug">{{ old('ComportamientoSug' , $datos["datosInformes"]->ComportamientoSugPsicopedagogo) }}</textarea></td>
                          </tr>
                          <tr>
                            <td>Competencias Curriculares</td>
                            <td><textarea rows="4" cols="30" id="aprendizajeNivel" name="aprendizajeNivel">{{ old('aprendizajeNivel' , $datos["datosInformes"]->aprendizajeNivelPsicopedagogo) }}</textarea></td>
                            <td><textarea rows="4" cols="30" id="aprendizajeSug" name="aprendizajeSug">{{ old('aprendizajeSug' , $datos["datosInformes"]->aprendizajeSugPsicopedagogo) }}</textarea></td>
                          </tr>
                          <tr>
                              <td>Conclusiones/<br>Sugerencias</td>
                              <td colspan="2"><textarea rows="7" cols="64" id="conclusionesSugerencias" name="conclusionesSugerencias">{{ old('conclusionesSugerencias' , $datos["datosInformes"]->conclusionesSugerenciasPsicopedagogo) }}</textarea></td>
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
    var $validator = $("#ingresoForm").validate({
        rules: {
            FPBNE1:{
              required: true
            },
            FPBNEESug1:{
              required: true
            },
            FPBNE2:{
              required: true
            },
            FPBNEESug2:{
              required: true
            },
            FPBNE3:{
              required: true
            },
            FPBNEESug3:{
              required: true
            },
            FPBNE4:{
              required: true
            },
            FPBNEESug4:{
              required: true
            },
            comportamientoNive:{
              required: true
            },
            ComportamientoSug:{
              required: true
            },
            aprendizajeNive:{
              required: true
            },
            aprendizajeSug:{
              required: true
            }

        }
    });

});

</script>
@endsection
