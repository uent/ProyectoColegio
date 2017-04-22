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



 <table class="table">
				<thead>
					<tr>
						<th>
							Nombre
						</th>
						<th>
							Rut
						</th>
					</tr>
				</thead>

				<tbody>
          <?php
            foreach ($datos as $arreglo)
            {
              echo
              "<tr>
                <td>
                  TB - w";
                  echo $arreglo["nombre"];
                  echo
                "</td>
                <td>";
                  echo $arreglo["rut"];
                echo
                "</td>
              </tr>";
            }
         ?>
				</tbody>
			</table>
@endsection
