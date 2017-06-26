@extends ('layouts.admin')
@section('nombrePagina')
  Evaluación | Fonoaudiologica
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
                  <b>Nombre:</b> <?php echo $datos["nombre"] , " ", $datos["apellidos"]; ?> <br>
                  <b>Rut: </b><?php echo $datos["rut"]; ?><br>
                  <b>Estado: </b><?php echo $datos["estado"]; ?><br>
                  
                    <?php  if($datos["comentarios"] != "")
                    {
                      echo"
                      <b>Comentarios u Observaciones: </b>";
                        echo $datos["comentarios"];
                        
                    }?>
                  
                    <br>
                    <form class="form-horizontal col-md-4" align="center" method='post' action='guardar_reporte_fonoaudiologo'>
                      <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
                        <table class="table table-bordered">
                          <tr align="center">
                            <td><b>Área de Desarrollo</b></td>
                            <td><b>Caracterización</b> </td>

                          </tr>
                          <tr>
                            <td>Conducta Socio Comunicativa</td>
                            <td><textarea rows="10" cols="64" id="condSocioComunicativa" name="condSocioComunicativa"></textarea></td>
                          </tr>
                          <tr>
                            <td>Competencia Comunicativa</td>
                            <td><textarea rows="10" cols="64" id="competComunicativa" name="competComunicativa"></textarea></td>
                          </tr>
                          <tr>
                            <td>Lenguaje Comprensivo</td>
                            <td><textarea rows="10" cols="64" id="lengComprensivo" name="lengComprensivo"></textarea></td>
                          </tr>
                          <tr>
                            <td>Lenguaje Expresivo</td>
                            <td><textarea rows="10" cols="64" id="lengExpresivo" name="lengExpresivo"></textarea></td>
                          </tr>
                          <tr>
                            <td>Conclusiones </td>
                            <td><textarea rows="10" cols="64" id="conclusiones" name="conclusiones"></textarea></td>
                          </tr>
                          <tr>
                            <td>Sugerencias</td>
                            <td ><textarea rows="10" cols="64" id="sugerencias" name="sugerencias"></textarea></td>
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