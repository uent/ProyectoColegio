@extends ('layouts.admin')



@section('nombrePagina')
  Asignar Citas | Crear
@endsection


@section('contenido')

<script src="{{asset('js\FuncionesAjaxCalendario\ActualizarEventosUsuario')}}"></script>
<script src="{{asset('js\CalendariosJs\CalendarioHorasProfesional.js')}}"></script>
<script src="{{asset('js\CalendariosJs\ActualizarCalendarioPorNuevoIdProfesional.js')}}"></script>

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
    "<div id='main-wrapper'>

      <table class='table'>
          <thead>
            <tr>
            <th>
              Tipo Cita
            </th>
              <th>
                Profesional
              </th>
              <th>
                Accion
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
              <select id = 'idProfesional' name='id' form='formulario' onchange='ActualizarCalendarioPorNuevoIdProfesional()'>";
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
          <input class='form-control' name='comentarios' form='formulario'>
        </div>
        </td>
        <td>
        ";
      if($datos["profesionales"] != NULL && $datos["datos"] != NULL)
      {
        echo
        "<form method='post' action='insertar_cita' id='formulario'>";?>
          {!! csrf_field() !!}
          <?php
          echo
          "<input type='submit' name='action' value='asignar Cita'/>
          <input type='hidden' name='tipoCita' value='",$datos["datos"]["tipoCita"],"'/>
          <input type='hidden' name='idOrden' value='",$datos["datos"]["idOrden"],"'/>
        </form>";


      }else echo "Imposible realizar la cita";
        echo
      "
      </td>
    </tr>
        </tbody>
             </tbody>
                        </table>";

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
