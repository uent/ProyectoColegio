@extends('Layout\Layout')

@section('cabecera')
<?php
echo "Datos de contacto del niño";
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
                Accion
              </th>

            </tr>
          </thead>";


      echo "<tbody>
          <tr>

          <td>";
          	echo $datos["tipoCita"];
          echo "</td>";

          echo "<td>
            <select name='profesional' form='formulario'>
      <option value='proFalso1'>proFalso1</option>
      <option value='proFalso2'>proFalso2</option>

    </select>;

      <td>
        <select name='Dia' form='formulario'>
  <option value='Lunes'>Lunes</option>
  <option value='Martes'>Martes</option>
  <option value='Miercoles'>Miercoles</option>
  <option value='Jueves'>Jueves</option>
  <option value='Viernes'>Viernes</option>
</select>";
        echo
      "</td>;

      <td>
        <select name='Hora' form='formulario'>
      <option value='800'>8:00</option>
      <option value='900'>9:00</option>
      <option value='1000'>10:00</option>
      <option value='1100'>11:00</option>
      <option value='1200'>12:00</option>
      </select>";
        echo
      "</td>
        <td>
      <form method='get' action='crear_cita' id='formulario'>
        <input type='submit' name='action' value='asignar Cita'/>
        <input type='hidden' name='idOrden' value='",$datos["tipoCita"],"'/>
      </form>";

        echo
      "</td>

    </tr>";
    echo "</tbody>";

            echo "</tbody>
                        </table>";


 ?>
@endsection
