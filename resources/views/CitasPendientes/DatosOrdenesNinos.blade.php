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
          $flag = true;

          if($datos != NULL)
          {
            foreach ($datos as $arreglo)
            {
              if($arreglo["prioridad"] == "alta")
              {
                if($flag == true)
                {
                  $flag = false;

                  echo
                  "<p> Atenciones prioritarias <p>
                  <table class='table'>
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
                }
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
              <form method='get' action='mostrar_citas_nino'>
                <input type='submit' name='action' value='Asignar Citas'/>
                <input type='hidden' name='idOrden' value='",$arreglo["idOrden"],"'/>
              </form>

                </td>
              </tr>";

              }
            }
            echo " </tbody>
                        </table>";
          }

          $flag = true;

          if($datos != NULL)
          {
            foreach ($datos as $arreglo)
            {
              if($arreglo["prioridad"] == "normal")
              {
                if($flag == true)
                {
                  $flag = false;

                  echo
                  "<p> Atenciones normales <p>
                  <table class='table'>
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
                }
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
              <form method='get' action='mostrar_citas_nino'>
                <input type='submit' name='action' value='Asignar Citas'/>
                <input type='hidden' name='idOrden' value='",$arreglo["idOrden"],"'/>
              </form>

                </td>
              </tr>";

              }
            }
          }
          else echo "No hay datos";

         ?>

@endsection
