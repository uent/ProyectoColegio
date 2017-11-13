@extends ('layouts.admin')
@section('nombrePagina')
  Evaluación | MultiDisciplinario
@endsection
@section('contenido')
<div  id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">Evaluación MultiDisciplinaria</h4>
                </div>
                <div class="panel-body" >
                  <b>Nombre:</b> <?php echo $datos["nombre"] , " ", $datos["apellidos"]; ?> <br>
                  <b>Rut: </b><?php echo $datos["rut"]; ?><br>
                  <b>Estado: </b><?php echo $datos["estado"]; ?><br><br>
                  <div>
                    <form  align="center" method='get' action='GenerarInformeCoEvaluacion' target="_blank">
                      <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
                    <b>  <input type='submit' name='action' value='PDF informe co-evaluacion'/><br>
                    </form>
                  </div>
                  <br>
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

                        <input type="number" min="1" max="4" step="0.5" name="relacion" id="relacion" value = '{{ old('relacionPsicologo' , $datos["datosInformes"]->relacionPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>Imitación</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="imitacion" id="imitacion" value = '{{ old('imitacionPsicologo' , $datos["datosInformes"]->imitacionPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>afecto</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="afecto" id="afecto" value = '{{ old('afectoPsicologo' , $datos["datosInformes"]->afectoPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>Uso del Cuerpo</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="cuerpo" id="cuerpo" value = '{{ old('cuerpoPsicologo' , $datos["datosInformes"]->cuerpoPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>Uso de Objetos</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="objetos" id="objetos" value = '{{ old('objetosPsicologo' , $datos["datosInformes"]->objetosPsicologo) }}'></td>
                      </tr>
                      <tr>
                        <td>Adaptación a Cambios</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="adaptacion" id="adaptacion" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Respuesta Visual</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="respVisual" id="respVisual" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Respuesta Auditiva</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="respAuditiva" id="respAuditiva" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Gusto, Olfato y respuesta táctil</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="gustoOlfatoTacto" id="gustoOlfatoTacto" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Ansiedad y Miedo</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="ansiedadMiedo" id="ansiedadMiedo" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Comunicación Verbal</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="comunicVerbal" id="comunicVerbal" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Comunicación No Verbal</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="comunicNoVerbal" id="comunicNoVerbal" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Nivel de Actividad</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="nivelAct" id="nivelAct" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Respuesta Intelectual</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="respIntelectual" id="respIntelectual" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td>Impresiones Generales</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="impresGnrl" id="impresGnrl" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                      </tr>
                      <tr>
                        <td><b>Total</b></td>
                        <td>60</td>
                        <td><input type="number" step="0.5" name="total" id="total" value = '{{ old('c' , $datos["datosInformes"]->co) }}'></td>
                        
                      </tr>

                    </table>
                    </div>

                    <br>

                        <table class="table table-bordered">
                        <tr>
                          <td>Motivo de evaluación</td>
                          <td ><textarea rows="10" cols="64" id="motivoDeEvaluacion" name="motivoDeEvaluacion">{{old('motivoDeEvaluacion' , $datos["datosInformes"]->motivoDeEvaluacion)}}</textarea></td>
                        </tr>
                      <tr>
                        <td>Antecedentes relevantes</td>
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
                        <input align='center' type='submit' name='action' value='Completar cita'/>
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



  function sumar()
    {
      alert("shdiahsodjapsd");
      total=  document.getElementById("relacion").value 
            + document.getElementById("imitacion").value 
            + document.getElementById("afecto").value 
            + document.getElementById("cuerpo").value 
            + document.getElementById("objetos").value 
            + document.getElementById("adaptacion").value 
            + document.getElementById("respVisual").value
            + document.getElementById("respAuditiva").value 
            + document.getElementById("gustoOlfatoTacto").value 
            + document.getElementById("ansiedadMiedo").value 
            + document.getElementById("comunicVerbal").value 
            + document.getElementById("comunicNoVerbal").value 
            + document.getElementById("nivelAct").value 
            + document.getElementById("respIntelectual").value 
            + document.getElementById("impresGnrl").value;
            document.getElementById("total").innerHTML = total;
            
    };

</script>

@endsection
