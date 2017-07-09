
@extends ('layouts.admin')



@section('nombrePagina')
  Generar Informe | Pendientes
@endsection



@section('contenido')

<?php
  if($datos != NULL) //datos nino
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
                Acciones
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
    <form method='get' action='visualizar_informe_final_nino_vista_tutor'>
      <input type='submit' name='action' value='Visualizar Informe Final'/>
      <input type='hidden' name='idOrden' value='",$d["idOrden"],"'/>
    </form>";

  echo "</tbody>
              </table>";
  }

} else echo "No hay datos";

 ?>
@endsection
