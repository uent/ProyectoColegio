@extends('Layout\Layout')

@section('cabecera')
<?php
echo "Datos de contacto del nino";
?>
@endsection


@section('content1')




@endsection



@section('content2')
<?php

    echo
    "<table class='table'>
          <thead>
            <tr>

            <th>
              Tipo Cita
            </th>
              <th>
                Profesional
              </th>
              <th>
                Dia
              </th>
              <th>
                Hora
              </th>
              <th>
                Comentarios
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
              <select name='id' form='formulario'>";

  						foreach ($datos["profesionales"] as $d)
  						{
  							echo "<option value='",$d["id"],"'>",$d["apellidos"],"</option>";

  						}
  						echo
  						"</select>
            </td>;";
  					}
            else
            {
                echo "<td>";
                echo "No hay profesionales
                </td>";
            }

            echo
      "<td>
        <select name='dia' form='formulario'>
  <option value='Lunes'>Lunes</option>
  <option value='Martes'>Martes</option>
  <option value='Miercoles'>Miercoles</option>
  <option value='Jueves'>Jueves</option>
  <option value='Viernes'>Viernes</option>
</select>";
        echo
      "</td>

      <td>
        <select name='hora' form='formulario'>
      <option value='800'>8:00</option>
      <option value='900'>9:00</option>
      <option value='1000'>10:00</option>
      <option value='1100'>11:00</option>
      <option value='1200'>12:00</option>
      </select>";
        echo
      "</td>
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

    </tr>";
    echo "</tbody>";

            echo "</tbody>
                        </table>";

 ?>

@endsection
