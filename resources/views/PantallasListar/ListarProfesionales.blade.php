
@extends ('layouts.admin')



@section('nombrePagina')
  Profesionales en sistema
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
        echo $d["name"];
        echo
      "</td>
      <td>";
        echo $d["apellidos"];
      echo
      "</td>

      <td>
    <form method='get' action='modificar_Profesional'>
      <input type='submit' name='action' value='Modificar/Ver Datos'/>
      <input type='hidden' name='idUsuario' value='",$d["id"],"'/>
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
