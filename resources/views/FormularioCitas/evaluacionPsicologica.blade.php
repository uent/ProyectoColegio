@extends ('layouts.admin')
@section('nombrePagina')
  Evaluación | Psicológica
@endsection
@section('contenido')
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
                          <tr align="center">
                            <td><b>Área de Desarrollo</b></td>
                            <td><b>Caracterización</b> </td>
                          </tr>
                          <tr>
                            <td>Desarrollo Social</td>
                            <td><textarea rows="4" cols="64" id="desarrolloSocial" name="desarrolloSocial"><?php echo $datos["datosInformes"]->lengExpresivoFonoaudiologo; ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Respuesta Emocional</td>
                            <td><textarea rows="4" cols="64" id="respEmocional" name="respEmocional"><?php echo $datos["datosInformes"]->lengExpresivoFonoaudiologo; ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Referencia Conjunta</td>
                            <td><textarea rows="4" cols="64" id="refConjunta" name="refConjunta"><?php echo $datos["datosInformes"]->lengExpresivoFonoaudiologo; ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Juego</td>
                            <td><textarea rows="4" cols="64" id="juego" name="juego"><?php echo $datos["datosInformes"]->lengExpresivoFonoaudiologo; ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Comunicación y Lenguaje</td>
                            <td><textarea rows="4" cols="64" id="conmunicacionLeng" name="conmunicacionLeng"><?php echo $datos["datosInformes"]->lengExpresivoFonoaudiologo; ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Flexibilidad Mental</td>
                            <td><textarea rows="4" cols="64" id="flexMental" name="flexMental"><?php echo $datos["datosInformes"]->lengExpresivoFonoaudiologo; ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Pensamiento</td>
                            <td><textarea rows="4" cols="64" id="pensamiento" name="pensamiento"><?php echo $datos["datosInformes"]->lengExpresivoFonoaudiologo; ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Comportamiento General</td>
                            <td><textarea rows="4" cols="64" id="comportamientoGnrl" name="comportamientoGnrl"><?php echo $datos["datosInformes"]->lengExpresivoFonoaudiologo; ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Conclusión/Sugerencia de Apoyo</td>
                            <td><textarea rows="4" cols="64" id="conclu" name="conclu"><?php echo $datos["datosInformes"]->lengExpresivoFonoaudiologo; ?></textarea></td>
                          </tr>
                        </table>

                        <p>Respecto de la información aportada por la Escala de Valoración del Autismo Infantil (EVAI / CARS) es posible informar la siguiente información cuantitativa</p>
                        <p><small>Los valores ingresados van de 1 a 4</small></p>
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

                            <input type="number" min="1" max="4" step="any" name="relacion" id="relacion"></td>
                          </tr>
                          <tr>
                            <td>Imitación</td>
                            <td>4</td>
                            <td><input type="text" name="imitacion" id="imitacion"></td>
                          </tr>
                          <tr>
                            <td>afecto</td>
                            <td>4</td>
                            <td><input type="text" name="afecto" id="afecto"></td>
                          </tr>
                          <tr>
                            <td>Uso del Cuerpo</td>
                            <td>4</td>
                            <td><input type="text" name="cuerpo" id="cuerpo"></td>
                          </tr>
                          <tr>
                            <td>Uso de Objetos</td>
                            <td>4</td>
                            <td><input type="text" name="objetos" id="objetos"></td>
                          </tr>
                          <tr>
                            <td>Adaptación a Cambios</td>
                            <td>4</td>
                            <td><input type="text" name="adaptacion" id="adaptacion"></td>
                          </tr>
                          <tr>
                            <td>Respuesta Visual</td>
                            <td>4</td>
                            <td><input type="text" name="respVisual" id="respVisual"></td>
                          </tr>
                          <tr>
                            <td>Respuesta Auditiva</td>
                            <td>4</td>
                            <td><input type="text" name="respAuditiva" id="respAuditiva"></td>
                          </tr>
                          <tr>
                            <td>Gusto, Olfato y respuesta táctil</td>
                            <td>4</td>
                            <td><input type="text" name="gustoOlfatoTacto" id="gustoOlfatoTacto"></td>
                          </tr>
                          <tr>
                            <td>Ansiedad y Mierdo</td>
                            <td>4</td>
                            <td><input type="text" name="ansiedadMiedo" id="ansiedadMiedo"></td>
                          </tr>
                          <tr>
                            <td>Comunicación Verbal</td>
                            <td>4</td>
                            <td><input type="text" name="comunicVerbal" id="comunicVerbal"></td>
                          </tr>
                          <tr>
                            <td>Comunicación No Verbal</td>
                            <td>4</td>
                            <td><input type="text" name="comunicNoVerbal" id="comunicNoVerbal"></td>
                          </tr>
                          <tr>
                            <td>Nivel de Actividad</td>
                            <td>4</td>
                            <td><input type="text" name="nivelAct" id="nivelAct"></td>
                          </tr>
                          <tr>
                            <td>Respuesta Intelectual</td>
                            <td>4</td>
                            <td><input type="text" name="respIntelectual" id="respIntelectual"></td>
                          </tr>
                          <tr>
                            <td>Impresiones Generales</td>
                            <td>4</td>
                            <td><input type="text" name="impresGnrl" id="impresGnrl"></td>
                          </tr>
                          <tr>
                            <td><b>Total</b></td>
                            <td>60</td>
                            <td><input type="text" name="total" id="total"></td>
                          </tr>

                        </table>
                        </div>

                        {!! csrf_field() !!}
                        "<input type='submit' name='action' value='Completar cita'/>
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
            },
            imitacion: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            afecto: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            cuerpo: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            objetos: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            adaptacion: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            respVisual: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            respAuditiva: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            gustoOlfatoTacto: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            ansiedadMiedo: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            comunicVerbal: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            comunicNoVerbal: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            nivelAct: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            respIntelectual: {
                required: true,
                number: true,
                min : 1,
                max : 4
            },
            impresGnrl: {
                required: true,
                number: true,
                min : 1,
                max : 4
            }


        }
    });
});
</script>
@endsection
