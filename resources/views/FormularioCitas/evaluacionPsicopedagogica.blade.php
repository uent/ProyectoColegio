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

                                      <dt>
                                        Nombre Niño
                                      </dt>
                                      <dd>
                                        <?php echo $datos["nombre"] , " ", $datos["apellidos"]; ?>
                                      </dd>
                                      <dt>
                                        Rut
                                      </dt>
                                      <dd>
                                        <?php echo $datos["rut"]; ?>
                                      </dd>
                                      <dt>
                                        Estado
                                      </dt>
                                      <dd>
                                        <?php echo $datos["estado"]; ?>
                                      </dd>
                                      <?php  if($datos["comentarios"] != "")
                                      {
                                        echo"
                                        <dt>
                                          Comentarios
                                        </dt>
                                        <dd>";
                                          echo $datos["comentarios"];
                                          echo "
                                        </dd>";
                                      }?>
                                      <br>
                        <form class="form-horizontal col-md-4" align="center" method='post' action='guardar_reporte_psicopedagogo'>
                            <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
                        <table>
                          <tr align="center">
                            <td><b>Área de Desarrollo</b></td>
                            <td><b>Nivel de Evolución</b> </td>
                            <td><b>NEE/Sugerencias de Apoyo</b> </td>
                          </tr>
                          <tr>
                            <td>Funciones <br> Psicopsicologicológicas<br> Básicas</td>
                            <td><textarea rows="10" cols="30" id="FPBNE1" name="FPBNE1"></textarea></td>
                            <td><textarea rows="10" cols="30" id="FPBNEESug1" name="FPBNEESug1"></textarea></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><textarea rows="4" cols="30" id="FPBNE2" name="FPBNE2"></textarea></td>
                            <td><textarea rows="4" cols="30" id="FPBNEESug2" name="FPBNEESug2"></textarea></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><textarea rows="4" cols="30" id="FPBNE3" name="FPBNE3"></textarea></td>
                            <td><textarea rows="4" cols="30" id="FPBNEESug3" name="FPBNEESug3"></textarea></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><textarea rows="4" cols="30" id="FPBNE4" name="FPBNE4"></textarea></td>
                            <td><textarea rows="4" cols="30" id="FPBNEESug4" name="FPBNEESug4"></textarea></td>
                          </tr>
                          <tr>
                            <td>Comportamiento General</td>
                            <td><textarea rows="4" cols="30" id="comportamientoNivel" name="comportamientoNivel"></textarea></td>
                            <td><textarea rows="4" cols="30" id="ComportamientoSug" name="ComportamientoSug"></textarea></td>
                          </tr>
                          <tr>
                            <td>Aprendizaje</td>
                            <td><textarea rows="4" cols="30" id="aprendizajeNivel" name="aprendizajeNivel"></textarea></td>
                            <td><textarea rows="4" cols="30" id="aprendizajeSug" name="aprendizajeSug"></textarea></td>
                          </tr>
                          <tr>
                              <td>Conclusiones/<br>Sugerencias</td>
                              <td colspan="2"><textarea rows="7" cols="64" id="conclusionesSugerencias" name="conclusionesSugerencias"></textarea></td>
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
@endsection
