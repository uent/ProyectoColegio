@extends ('layouts.admin')

@section('nombrePagina')
  Asignar Citas | Crear
@endsection


@section('contenido')

<script src="{{asset('js\CalendariosJs\crearCalendarioCrearCita.js')}}"></script>
<script src="{{asset('js\CalendariosJs\crearNuevaCita.js')}}"></script>
<script src="{{asset('js\CalendariosJs\actualizarCalendarioPorNuevoIdProfesional.js')}}"></script>
<script src="{{asset('js\CalendariosJs\agregarCitaCalendarioProfesional.js')}}"></script>
<script src="{{asset('js\FuncionesAjaxCalendario\actualizarEventosPorIdUsuario.js')}}"></script>
<script src="{{asset('js\FuncionesAjaxCalendario\actualizarEventosPorIdNino.js')}}"></script>
<script src="{{asset('js\FuncionesAjaxCalendario\enviarDatosNuevoEvento.js')}}"></script>
<script src="{{asset('js\FuncionesAjaxCalendario\actualizarEventosRestoProfesionales.js')}}"></script>




@if (isset($errors) && count($errors) > 0)
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif


<?php
    echo
    "<div id='main-wrapper'>"; ?>

    {{ csrf_field() }}

      <?php echo "<table class='table'>
          <thead>
            <tr>
            <th>
              Tipo Evaluación
            </th>
              <th>
                Nombre Profesional
              </th>
              <th>
                Comentarios
              </th>
            </tr>
          </thead>";
      echo "<tbody>
          <tr>
          <td>";
          	echo $datos["datos"]["tipoCita"];
          echo "</td>";
  					if($datos["profesionales"] != NULL)
  					{
  						echo
  						"<div class='form-group'>
              <td>
              <input type='hidden' id= idNino name='idNino' value='",$datos["datosNino"],"'/>
              <select class='form-group col-md-12' id='idProfesional' name='id' form='formulario' onchange='actualizarCalendarioPorNuevoIdProfesional()'>";
  						foreach ($datos["profesionales"] as $d)
  						{
  							echo "<option value='",$d["id"],"'>",$d["apellidos"],"</option>";
  						}
  						echo
  						"</select>
            </td>";
  					}
            else
            {
                echo "<td>";
                echo "No hay profesionales
                </td>";
            }
            echo
            "
        <td>
        <div class='form-group'>
          <input class='form-control' id='comentarios' name='comentarios' form='formulario'>
        </div>
        </td>
        <td>
        ";

      if($datos["profesionales"] != NULL && $datos["datos"] != NULL && $datos["disponible"] == true)
      {
        echo
        "";?>
          {!! csrf_field() !!}
          <?php
          echo
          "
          <input type='hidden' id='tipoCita' name='tipoCita' value='",$datos["datos"]["tipoCita"],"'/>
          <input type='hidden' id='idOrden' name='idOrden' value='",$datos["datos"]["idOrden"],"'/>
        </form>";


      }else echo "Imposible realizar la cita";
        echo
      "
      </td>
    </tr>
        </tbody>
             </tbody>
                        
    <input type='submit' style='width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 7px 20px;
    margin: 2px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer' name='action' value='Asignar Cita' onClick = 'enviarDatosNuevoEvento();' />
</table>
    <br>";

    if($datos["profesionales"] != NULL && $datos["datos"] != NULL)
    {
      echo "
      <div class='col-md-12'>


        <div id='calendar'></div>

     </div>";
    }
    echo "
  </div>";

 ?>

@endsection
