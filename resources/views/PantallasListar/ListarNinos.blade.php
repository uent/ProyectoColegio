
@extends ('layouts.admin')



@section('nombrePagina')
  Niños en sistema
@endsection



@section('contenido')

<?php
  if(count($datos) > 0) //datos nino
  {
    echo
    "<table class='table'>
          <thead>
            <tr>

              <th>
                Nombre
              </th>
              <th>
                apellidos
              </th>
              <th>
                Accion
              </th>

            </tr>
          </thead>";

    foreach($datos as $d)
    {
      echo "

          <tbody>
          <tr>

      <td>";
        echo $d["nombre"];
        echo
      "</td>
      <td>";
        echo $d["apellidos"];
      echo
      "</td>

      <td>
    <form method='get' action='modificar_ficha_nino'>
      <input type='submit' name='action' value='Modificar datos niño'/>
      <input type='hidden' name='idNino' value='",$d["idNino"],"'/>
    </form>

      </td>
    </tr>";

  echo "</tbody>
              ";
  }
  echo "</table>";

} else echo "No hay datos";

 ?>
@endsection
