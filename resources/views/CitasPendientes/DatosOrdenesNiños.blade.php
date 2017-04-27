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
  if($datos[0] != NULL) //datos niño
  {    echo
    "<div class='container-fluid'>
	<div class='row'>
		<div class='col-md-12'>
			<h3>
				Datos Niño
			</h3>
		</div>
	</div>
</div>

      <table class='table'>
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
      <form method='get' action='Cambiar_status_contacto'>
        <input type='submit' name='action' value='Ya fue contactado?'/>
        <input type='hidden' name='id' value='",$datos[0]["id"],"'/>
      </form>

        </td>
      </tr>

      </tbody>
    </table>";

    if($datos[1] != NULL) //datos tutores
    {
    echo
    "<div class='container-fluid'>
  <div class='row'>
    <div class='col-md-12'>
      <h3>
        Datos Tutores
      </h3>
    </div>
  </div>
</div>
    <table class='table'>
          <thead>
            <tr>
              <th>
                Nombre
              </th>
              <th>
                Rut
              </th>
              <th>
                Mail
              </th>
            </tr>
          </thead>

          <tbody>";

          foreach ($datos[1] as $t)
          {
            echo
            "<td>";
            echo $t->nombre;
            echo
            "</td>
            <td>";
            echo $t->rut;
            echo
            "</td>
            <td>";
            echo $t->mail;
            echo
            "</td>";
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
