@extends ('layouts.admin')



@section('nombrePagina')
 Pendientes
@endsection



@section('contenido')

        <?php
          if($datos != NULL)
          {
            echo
            "<table class='table'>
                  <thead>
                    <tr>
                      <th>
                        Nombre
                      </th>
                      <th>
                        Apellidos
                      </th>
                      <th>
                        Rut
                      </th>
                      <th>
                        Accion
                      </th>
                    </tr>
                  </thead>";
            foreach ($datos as $arreglo)
            {
                echo "

             				<tbody>
                    <tr>
                <td>";
                  echo $arreglo["nombre"];
                  echo
                "</td>
                <td>";
                  echo $arreglo["apellidos"];
                echo
                "</td>
                <td>";
                  echo $arreglo["rut"];
                echo
                "</td>
                <td>
              <form method='get' action='Contactar_nino'>
                <input type='submit' name='action' value='Ver Datos'/>
                <input type='hidden' name='id' value='",$arreglo["id"],"'/>
              </form>

                </td>
              </tr>";

            }
            echo " </tbody>
                        </table>";
          } else echo "No hay datos";

         ?>


@endsection
