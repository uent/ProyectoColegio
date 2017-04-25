@extends('Layout\Layout')

@section('cabecera')
<?php
#cabecera

echo "Niños pendientes para contacto";
?>
@endsection

@section('content1')



@endsection

@section('content2')

        <?php
          if($datos != NULL)
          {
            foreach ($datos as $arreglo)
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
                  echo $arreglo["nombre"];
                  echo
                "</td>
                <td>";
                  echo $arreglo["rut"];
                echo
                "</td>
                <td>
              <form method='get' action='Contactar_niño'>
                <input type='submit' name='action' value='Contactar'/>
                <input type='hidden' name='id' value='",$arreglo["id"],"'/>
              </form>

                </td>
              </tr>

              </tbody>
            </table>";
            }
          } else echo "No hay datos";
        
         ?>


@endsection
