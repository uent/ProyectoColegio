
@extends ('layouts.admin')



@section('nombrePagina')
  Asignar Citas | Pendientes
@endsection



@section('contenido')

<?php
  if($Citas != NULL) //datos nino
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

          $tiposCitas[0] = "Fonoaudiologo";
          $tiposCitas[1] = "Psicologico";
          $tiposCitas[2] = "TerapeutaOcupacional";
          $tiposCitas[3] = "Psicopedagogo";


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
    </form>

      </td>
    </tr>";

    }
  }

  echo "</tbody>
              </table>";

              foreach($tiposCitas as $t)
              {
                $flag = true;
                if($Citas[$t]["existe"] == true) //cita asignada
                {
                  if($flag == true)
                  {
                    $flag = false;
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


                            </tr>
                          </thead>

                        <tbody>
                      <tr>";

                        }
                  echo "


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
