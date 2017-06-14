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
                    <h4 class="panel-title">Evaluación Fonoaudiológica</h4>
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
                    <form class="form-horizontal col-md-4" align="center">
                      <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
                        <table>
                          <tr align="center">
                            <td><b>Área de Desarrollo</b></td>
                            <td><b>Nivel de Evolución</b> </td>

                          </tr>
                          <tr>
                            <td>Conducta Socio Comunicativa</td>
                            <td><textarea rows="10" cols="64" id="condSocioComunicativa" name="condSocioComunicativa">Conducta Socio Comunicativa</textarea></td>
                          </tr>
                          <tr>
                            <td>Competencia Comunicativa</td>
                            <td><textarea rows="10" cols="64" id="competComunicativa" name="competComunicativa">Competencia Comunicativa</textarea></td>
                          </tr>
                          <tr>
                            <td>Lenguaje Comprensivo</td>
                            <td><textarea rows="10" cols="64" id="lengComprensivo" name="lengComprensivo">Lenguaje Comprensivo</textarea></td>
                          </tr>
                          <tr>
                            <td>Lenguaje Expresivo</td>
                            <td><textarea rows="10" cols="64" id="lengExpresivo" name="lengExpresivo">Lenguaje Expresivo</textarea></td>
                          </tr>
                          <tr>
                            <td>Conclusiones </td>
                            <td><textarea rows="10" cols="64" id="conclusiones" name="conclusiones">Conclusiones </textarea></td>
                          </tr>
                          <tr>
                            <td>Sugerencias</td>
                            <td ><textarea rows="10" cols="64" id="sugerencias" name="sugerencias">Sugerencias</textarea></td>
                          </tr>

                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->
@endsection
