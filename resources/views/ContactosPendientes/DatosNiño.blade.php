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
          echo $datos["nombre"];
          echo
        "</td>
        <td>";
          echo $datos["rut"];
        echo
        "</td>
        <td>
      <form method='get' action='Contactar_niño'>
        <input type='submit' name='action' value='Contactar'/>
        <input type='hidden' name='id' value='",$datos["id"],"'/>
      </form>

        </td>
      </tr>

      </tbody>
    </table>";

  } else echo "No hay datos";

 ?>
@endsection
