@extends ('layouts.admin')



@section('nombrePagina')
Contactos Pendientes
@endsection



@section('contenido')
<div class="col-md-12">
  <div class="panel panel-white">
      <div class="panel-heading clearfix">
          <h4 class="panel-title">Contactos Pendientes</h4>
      </div>
      <div class="panel-body">
          <?php
          if($datos != NULL)
          {
            echo
            "<table class='table table-striped'>
              <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>Tutor</th>
                      <th>Fecha de Solicitud</th>
                      <th> </th>
                  </tr>
              </thead>";
            foreach ($datos as $arreglo)
            {
                echo "

                    <tbody>
                    <tr>
                <td>";
                  echo $arreglo["nombre"]." ".$arreglo["apellidos"];
                  echo
                "</td>
                <td>";
                  echo $arreglo["nombreTutor"]." ".$arreglo["apellidosTutor"];
                echo
                "</td>
                <td>";
                  echo $arreglo["fecha"];
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


          </div>
      </div>
  </div>




@endsection
