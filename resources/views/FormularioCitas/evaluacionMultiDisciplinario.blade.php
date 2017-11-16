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

                        <input type="number" min="1" max="4" step="0.5" name="relacion" id="relacion" value = '{{ old('relacion' , $datos["datosInformes"]->relacionMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Imitación</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="imitacion" id="imitacion" value = '{{ old('imitacion' , $datos["datosInformes"]->imitacionMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>afecto</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="afecto" id="afecto" value = '{{ old('afecto' , $datos["datosInformes"]->afectoMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Uso del Cuerpo</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="cuerpo" id="cuerpo" value = '{{ old('cuerpo' , $datos["datosInformes"]->cuerpoMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Uso de Objetos</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="objetos" id="objetos" value = '{{ old('objetos' , $datos["datosInformes"]->objetosMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Adaptación a Cambios</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="adaptacion" id="adaptacion" value = '{{ old('adaptacion' , $datos["datosInformes"]->adaptacionMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Respuesta Visual</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="respVisual" id="respVisual" value = '{{ old('respVisual' , $datos["datosInformes"]->respVisualMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Respuesta Auditiva</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="respAuditiva" id="respAuditiva" value = '{{ old('respAuditiva' , $datos["datosInformes"]->respAuditivaMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Gusto, Olfato y respuesta táctil</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="gustoOlfatoTacto" id="gustoOlfatoTacto" value = '{{ old('gustoOlfatoTacto' , $datos["datosInformes"]->gustoOlfatoTactoMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Ansiedad y Miedo</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="ansiedadMiedo" id="ansiedadMiedo" value = '{{ old('ansiedadMiedo' , $datos["datosInformes"]->ansiedadMiedoMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Comunicación Verbal</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="comunicVerbal" id="comunicVerbal" value = '{{ old('comunicVerbal' , $datos["datosInformes"]->comunicVerbalMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Comunicación No Verbal</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="comunicNoVerbal" id="comunicNoVerbal" value = '{{ old('comunicNoVerbal' , $datos["datosInformes"]->comunicNoVerbalMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Nivel de Actividad</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="nivelAct" id="nivelAct" value = '{{ old('nivelAct' , $datos["datosInformes"]->nivelActMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Respuesta Intelectual</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="respIntelectual" id="respIntelectual" value = '{{ old('respIntelectual' , $datos["datosInformes"]->respIntelectualMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td>Impresiones Generales</td>
                        <td>4</td>
                        <td><input type="number" min="1" max="4" step="0.5" name="impresGnrl" id="impresGnrl" value = '{{ old('impresGnrl' , $datos["datosInformes"]->impresGnrlMultiDisiplinario) }}'></td>
                      </tr>
                      <tr>
                        <td><b>Total</b></td>
                        <td>60</td>
                        <td><input type="button" name="totalVisible" id="totalVisible" onclick="sumar()" value="SUMAR" ></td>
                        <input type='hidden' name='total' id='total'>

                      </tr>

                    </table>
                    </div>

                    <br>

                        <table class="table table-bordered">
                        <tr>
                          <td>Motivo de evaluación</td>
                          <td ><textarea rows="10" cols="64" id="motivoDeEvaluacion" name="motivoDeEvaluacion">{{old('motivoDeEvaluacion' , $datos["datosInformes"]->motivoDeEvaluacionMultiDisiplinario)}}</textarea></td>
                        </tr>
                      <tr>
                        <td>Antecedentes relevantes</td>
                        <td ><textarea rows="10" cols="64" id="antecedentesRelevantes" name="antecedentesRelevantes">{{old('antecedentesRelevantes' , $datos["datosInformes"]->antecedentesRelevantesMultiDisiplinario)}}</textarea></td>
                      </tr>

                      <tr>
                          <td>Conclusiones </td>
                          <td><textarea rows="10" cols="64" id="conclusiones" name="conclusiones">{{old('conclusiones' , $datos["datosInformes"]->conclusionesMultiDisiplinario)}}</textarea></td>
                        </tr>

                        <tr>

                          <td>Sugerencias</td>
                          <td ><textarea rows="10" cols="64" id="sugerencias" name="sugerencias">{{old('sugerencias' , $datos["datosInformes"]->sugerenciasMultiDisiplinario)}}</textarea></td>

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

            num1 = document.getElementById("relacion").value;
           num2 = document.getElementById("imitacion").value;
           num3 = document.getElementById("afecto").value;
           num4 = document.getElementById("cuerpo").value;
           num5 = document.getElementById("objetos").value;
           num6 = document.getElementById("adaptacion").value;
           num7 = document.getElementById("respVisual").value;
           num8 = document.getElementById("respAuditiva").value;
           num9 = document.getElementById("gustoOlfatoTacto").value;
           num10 = document.getElementById("ansiedadMiedo").value;
           num11 = document.getElementById("comunicVerbal").value;
           num12 = document.getElementById("comunicNoVerbal").value;
           num13 = document.getElementById("nivelAct").value;
           num14 = document.getElementById("respIntelectual").value;
           num15 = document.getElementById("impresGnrl").value;
           total = parseFloat(num1) + parseFloat(num2) + parseFloat(num3) + parseFloat(num4) +
           parseFloat(num5) +parseFloat(num6) +parseFloat(num7) +parseFloat(num8) +
           parseFloat(num9) +parseFloat(num10) +parseFloat(num11) +parseFloat(num12) +
           parseFloat(num13) +parseFloat(num14) + parseFloat(num15);

           document.getElementById("total").innerHTML = total;
           document.getElementById("total").value = total;

           document.getElementById("totalVisible").innerHTML = total;
           document.getElementById("totalVisible").value = total;
    };

</script>

@endsection
