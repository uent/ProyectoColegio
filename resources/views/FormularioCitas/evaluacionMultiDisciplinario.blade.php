@extends ('layouts.admin')
@section('nombrePagina')
  Evaluación | MultiDisciplinario
@endsection
@section('contenido')
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">Evaluación MultiDisciplinario</h4>
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

                    }?>

                    <form id="forma" class="form-horizontal col-md-12" align="center" method='post' action='guardar_reporte_multidiciplinario'>
                      <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
                        <table class="table table-bordered">

                    <div>Respecto de la información aportada por la Escala de Valoración del Autismo Infantil (EVAI / CARS) es posible informar la siguiente información cuantitativa</div>
                    <div><small>Los valores ingresados van de 1 a 4</small></div>
                    <div class=" form-horizontal col-md-12">
                         <table class="table table-bordered col-md-12">
                      <tr align="center">
                        <td><b>Área</b></td>
                        <td><b>Puntaje Máximo</b> </td>
                        <td><b>Puntaje Obtenido</b> </td>
                      </tr>
                      <tr>
                        <td>Relación Con los Demás</td>
                        <td>4</td>
                        <td>

                        <input type="number" min="1" max="4" step="any" name="relacion" id="relacion" value = '{{ old('relacionPsicologo' , $datos["datosInformes"]->relacionPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>Imitación</td>
                        <td>4</td>
                        <td><input type="text" name="imitacion" id="imitacion" value = '{{ old('imitacionPsicologo' , $datos["datosInformes"]->imitacionPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>afecto</td>
                        <td>4</td>
                        <td><input type="text" name="afecto" id="afecto" value = '{{ old('afectoPsicologo' , $datos["datosInformes"]->afectoPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>Uso del Cuerpo</td>
                        <td>4</td>
                        <td><input type="text" name="cuerpo" id="cuerpo" value = '{{ old('cuerpoPsicologo' , $datos["datosInformes"]->cuerpoPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>Uso de Objetos</td>
                        <td>4</td>
                        <td><input type="text" name="objetos" id="objetos" value = '{{ old('objetosPsicologo' , $datos["datosInformes"]->objetosPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>Adaptación a Cambios</td>
                        <td>4</td>
                        <td><input type="text" name="adaptacion" id="adaptacion" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Respuesta Visual</td>
                        <td>4</td>
                        <td><input type="text" name="respVisual" id="respVisual" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Respuesta Auditiva</td>
                        <td>4</td>
                        <td><input type="text" name="respAuditiva" id="respAuditiva" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Gusto, Olfato y respuesta táctil</td>
                        <td>4</td>
                        <td><input type="text" name="gustoOlfatoTacto" id="gustoOlfatoTacto" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Ansiedad y Mierdo</td>
                        <td>4</td>
                        <td><input type="text" name="ansiedadMiedo" id="ansiedadMiedo" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Comunicación Verbal</td>
                        <td>4</td>
                        <td><input type="text" name="comunicVerbal" id="comunicVerbal" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Comunicación No Verbal</td>
                        <td>4</td>
                        <td><input type="text" name="comunicNoVerbal" id="comunicNoVerbal" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Nivel de Actividad</td>
                        <td>4</td>
                        <td><input type="text" name="nivelAct" id="nivelAct" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Respuesta Intelectual</td>
                        <td>4</td>
                        <td><input type="text" name="respIntelectual" id="respIntelectual" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Impresiones Generales</td>
                        <td>4</td>
                        <td><input type="text" name="impresGnrl" id="impresGnrl" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td><b>Total</b></td>
                        <td>60</td>
                        <td><input type="text" name="total" id="total" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>

                    </table>
                    </div>

                    <br>

                        <table class="table table-bordered">
                        <tr>
                          <td>motivo de evaluacion</td>
                          <td ><textarea rows="10" cols="64" id="motivoDeEvaluacion" name="motivoDeEvaluacion">{{old('motivoDeEvaluacion' , $datos["datosInformes"]->motivoDeEvaluacion)}}</textarea></td>
                        </tr>
                      <tr>
                        <td>antecedentes relevantes</td>
                        <td ><textarea rows="10" cols="64" id="antecedentesRelevantes" name="antecedentesRelevantes">{{old('antecedentesRelevantes' , $datos["datosInformes"]->antecedentesRelevantes)}}</textarea></td>
                      </tr>

                      <tr>
                          <td>Conclusiones </td>
                          <td><textarea rows="10" cols="64" id="conclusiones" name="conclusiones">{{old('conclusiones' , $datos["datosInformes"]->conclusionesFonoaudiologo)}}</textarea></td>
                        </tr>

                        <tr>

                          <td>Sugerencias</td>
                          <td ><textarea rows="10" cols="64" id="sugerencias" name="sugerencias">{{old('sugerencias' , $datos["datosInformes"]->sugerenciasFonoaudiologo)}}</textarea></td>

                        </tr>

                        </table>
                        {!! csrf_field() !!}
                        <input type='submit' name='action' value='Completar cita'/>
                      <!--<input type='hidden' name='tipoCita' value='",$datos["datos"]["tipoCita"],"'/>-->
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
          condSocioComunicativa:{
            required: true
          },
          competComunicativa:{
            required: true
          },
          lengComprensivo:{
            required: true
          },
          lengExpresivo:{
            required: true
          },
          conclusiones:{
            required: true
          },
          sugerencias:{
            required: true
          }


        }
    });
});

</script>

@endsection
