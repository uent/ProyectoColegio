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
  if($datos[0] != NULL)
  {
      echo
      "<table class='table'>
            <thead>
              <tr>
                <th>
                  Nombre
                </th>
                <th>
                  Rut
                </th>
                <th>
                  Accion
                </th>
              </tr>
            </thead>

            <tbody>
            <tr>
        <td>";
          echo $datos[0]["nombre"];
          echo
        "</td>
        <td>";
          echo $datos[0]["rut"];
        echo
        "</td>
        <td>
      <form method='get' action='Contactar_niño'>
        <input type='submit' name='action' value='Contactar'/>
        <input type='hidden' name='id' value='",$datos[0]["id"],"'/>
      </form>

        </td>
      </tr>

      </tbody>
    </table>";

    if($datos[1] != NULL)
    {
    echo
    "<table class='table'>
          <thead>
            <tr>
              <th>
                Nombre
              </th>
              <th>
                Rut
              </th>
              <th>
                Accion
              </th>
            </tr>
          </thead>

          <tbody>";

          foreach ($datos[1] as $t)
          {
            echo
            "<tr>
            <td>";
            echo $t->nombre;
            echo
            "</td>
            <td>";
            echo $t->rut;
            echo
            "</td>
            <td>
              <form method='get' action='Contactar_niño'>
              <input type='submit' name='action' value='Contactar'/>";
          }
        }
          echo
        "</form>

        </td>
      </tr>

      </tbody>
    </table>";


  } else echo "No hay datos";

 ?>
@endsection
