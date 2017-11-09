
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
                Tipo Evaluación

              </th>
              <th>
                
              </th>

            </tr>
          </thead>";

          $tiposCitas[0] = "Fonoaudiologo";
          $tiposCitas[1] = "Psicologico";
          $tiposCitas[2] = "TerapeutaOcupacional";
          $tiposCitas[3] = "Psicopedagogo";
          $tiposCitas[4] = "MultiDisciplinario";


    foreach($tiposCitas as $t)
    {

      if($Citas[$t]["existe"] == false) //no asignada
      {


      echo "

          <tbody>
          <tr>

      <td>";
        echo "No Asignada";
        echo
      "</td>
      <td>";
        echo $t;
      echo
      "</td>

      <td>
    <form method='get' action='crear_cita'>
      <input type='submit' name='action' value='Asignar Cita'/>
      <input type='hidden' name='tipoCita' value='",$t,"'/>
      <input type='hidden' name='idOrden' value='",$Citas["datos"]["idOrden"],"'/>
    </form>

      </td>
    </tr>";

    }
  }



              foreach($tiposCitas as $t)
              {

                if($Citas[$t]["existe"] == true) //cita asignada
                {

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
  } else echo "No existen datos";

  echo "</tbody>
              </table>";
 ?>
@endsection
