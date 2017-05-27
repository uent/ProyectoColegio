
@extends ('layouts.admin')



@section('nombrePagina')
  Generar Anamnesis | Pendientes
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
    <form method='get' action='generar_anamnesis_nino'>
      <input type='submit' name='action' value='Generar anamnesis'/>
      <input type='hidden' name='idOrden' value='",$d["idOrden"],"'/>
    </form>

      </td>
    </tr>";




  echo "</tbody>
              </table>";
  }

} else echo "No hay datos";

 ?>
@endsection
