@extends('Layout\Layout')

@section('cabecera')
<?php
echo "Datos de contacto del nino";
?>
@endsection


@section('content1')




@endsection



@section('content2')
<?php
  if($datos[0] != NULL) //datos nino
  {    echo
    "<div class='container-fluid'>
	<div class='row'>
		<div class='col-md-12'>
			<h3>
				Datos Nino
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
        <input type='hidden' name='prioridad' value='normal'/>
        <input type='checkbox' name='prioridad' value = 'alta' /> Caso de prioridad?
        <input type='hidden' name='id' value='",$datos[0]["id"],"'/>
        <input type='submit' name='action' value='Ya fue contactado?'/>
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
                Mail //falta agregar telefono
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