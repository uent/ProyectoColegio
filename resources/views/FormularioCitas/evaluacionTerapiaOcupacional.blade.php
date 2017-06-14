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
                    <h4 class="panel-title">Evaluación Terapia Ocupacional</h4>
                </div>
                <div class="panel-body" >
                    <form class="form-horizontal col-md-12" align="center">
                        <table>
                          <tr align="center">
                            <td><b>Área de Desarrollo</b></td>
                            <td><b>Observaciones</b> </td>
                            <td><b>Sugerencias</b> </td>
                          </tr>
                          <tr>
                            <td>Coordinación motriz gruesa y fina</td>
                            <td><textarea rows="4" cols="30" id="coordinacionObs" name="coordinacionObs">coordinacionObs</textarea></td>
                            <td><textarea rows="4" cols="30" id="coordinacionSug" name="coordinacionSug">coordinacionSug</textarea></td>
                          </tr>
                          <tr>
                            <td>Procesamiento sensorial</td>
                            <td><textarea rows="4" cols="30" id="procesamientoObs" name="procesamientoObs">procesamientoObs</textarea></td>
                            <td><textarea rows="4" cols="30" id="procesamientoSug" name="procesamientoSug">procesamientoSug</textarea></td>
                          </tr>
                          <tr>
                            <td>Conclusiones y sugerenciasde apoyo</td>
                            <td colspan="3"><textarea rows="4" cols="64" id="concluSugerenias" name="concluSugerenias">concluSugerenias</textarea></td>
                            
                          </tr>
                          
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->
@endsection