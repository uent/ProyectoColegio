
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
      <form class='form-horizontal col-md-4' align='center' method='get' action='generar_informe_final_nino' target='_blank'>
        <input type='hidden' name='idOrden' value='',$d['idOrden'],'>
      <b>  <input type='submit' name='action' value='Visualizar Informe Final'/><br>
      </form>



    <form method='get' action='aprobar_informe_final_nino'>
      <input type='submit' name='action' value='Aprobar Informe Final'/>
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
