@extends('Layout\Layout')

@section('cabecera')
<?php
echo "Asignacion de citas";
?>
@endsection


@section('content1')



@endsection



@section('content2')

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
              <form method='get' action='Asignar_citas'>
                <input type='submit' name='action' value='Ver Datos'/>
                <input type='hidden' name='id' value='",$arreglo["idOrden"],"'/>
              </form>

                </td>
              </tr>";

            }
            echo " </tbody>
                        </table>";
          } else echo "No hay datos";

         ?>

@endsection
