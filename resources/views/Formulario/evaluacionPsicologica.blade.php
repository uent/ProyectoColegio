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
                    <form class="form-horizontal col-md-12" align="center">
                        <table>
                          <tr align="center">
                            <td><b>Área de Desarrollo</b></td>
                            <td><b>Caracterización</b> </td>
                          </tr>
                          <tr>
                            <td>Desarrollo Social</td>
                            <td><textarea rows="4" cols="64" id="desarrolloSocial" name="desarrolloSocial"></textarea></td>
                          </tr>
                          <tr>
                            <td>Respuesta Emocional</td>
                            <td><textarea rows="4" cols="64" id="respEmocional" name="respEmocional"></textarea></td>
                          </tr>
                          <tr>
                            <td>Referencia Conjunta</td>
                            <td><textarea rows="4" cols="64" id="refConjunta" name="refConjunta"></textarea></td>
                          </tr>
                          <tr>
                            <td>Juego</td>
                            <td><textarea rows="4" cols="64" id="juego" name="juego"></textarea></td>
                          </tr>
                          <tr>
                            <td>Comunicación y Lenguaje</td>
                            <td><textarea rows="4" cols="64" id="conmunicacionLeng" name="conmunicacionLeng"></textarea></td>
                          </tr>
                          <tr>
                            <td>Flexibilidad Mental</td>
                            <td><textarea rows="4" cols="64" id="flexMental" name="flexMental"></textarea></td>
                          </tr>
                          <tr>
                            <td>Pensamiento</td>
                            <td><textarea rows="4" cols="64" id="pensamiento" name="pensamiento"></textarea></td>
                          </tr>
                          <tr>
                            <td>Comportamiento General</td>
                            <td><textarea rows="4" cols="64" id="comportamientoGnrl" name="comportamientoGnrl"></textarea></td>
                          </tr>
                          <tr>
                            <td>Conclusión/Sugerencia de Apoyo</td>
                            <td><textarea rows="4" cols="64" id="conclu" name="conclu"></textarea></td>
                          </tr>
                        </table>

                        <p>Respecto de la información aportada por la Escala de Valoración del Autismo Infantil (EVAI / CARS) es posible informar la siguiente información cuantitativa</p>
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
                            <td><input type="text" name="relacion" id="relacion"></td>
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
                       

                    </form>
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->
@endsection