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
  if($Citas != NULL) //datos niño
  {
    echo
    "<table class='table'>
          <thead>
            <tr>

              <th>
                Estado
              </th>
              <th>
                Tipo evaluacion
              </th>
              <th>
                Accion
              </th>

            </tr>
          </thead>";

          $tiposCitas[0] = "citaTipo1";
          $tiposCitas[1] = "citaTipo2";
          $tiposCitas[2] = "citaTipo3";
          $tiposCitas[3] = "citaTipo4";

    foreach($tiposCitas as $t)
    {

      if($Citas[$t]["existe"] == false) //no asignada
      {
      echo "

          <tbody>
          <tr>

      <td>";
        echo "No asignada";
        echo
      "</td>
      <td>";
        echo $t;
      echo
      "</td>

      <td>
    <form method='get' action='crear_cita'>
      <input type='submit' name='action' value='asignar Cita'/>
      <input type='hidden' name='tipoCita' value='",$t,"'/>
      <input type='hidden' name='idOrden' value='",$Citas["datos"]["idOrden"],"'/>
      <input type='hidden' name='idNiño' value='",$Citas["datos"]["idNiño"],"'/>
    </form>

      </td>
    </tr>";

    }
  }

  echo "</tbody>
              </table>";

              foreach($tiposCitas as $t)
              {

              if($Citas[$t]["existe"] == true) //cita asignada
              {
                echo "

                    <tbody>
                    <tr>

                <td>";
                  echo $Citas[$t]["estado"];
                  echo
                "</td>
                <td>";
                  echo $t;
                echo
                "</td>

                <td>


                </td>
              </tr>";
              }

            }
            echo "</tbody>
                        </table>";
  } else echo "No hay datos";

 ?>
@endsection
