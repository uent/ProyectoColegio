Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Gist
 @uent
 Sign out
 Unwatch 1
  Star 0
 Fork 0 uent/ProyectoColegio
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Settings Insights
Tree: 24a9408826 Find file Copy pathProyectoColegio/resources/views/CitasPendientes/CrearCita.blade.php
208d355  on 31 May
@uent uent mejorado las validaciones
2 contributors @uent @cnoguera17
RawBlameHistory
141 lines (113 sloc)  2.91 KB

@extends ('layouts.admin')



@section('nombrePagina')
  Asignar Citas | Crear
@endsection


@section('contenido')

@if (isset($errors) && count($errors) > 0)
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif


<?php
    echo
    "<table class='table'>
          <thead>
            <tr>
            <th>
              Tipo Cita
            </th>
              <th>
                Profesional
              </th>
              <th>
                Dia
              </th>
              <th>
                Hora
              </th>
              <th>
                Comentarios
              </th>
              <th>
                Accion
              </th>
            </tr>
          </thead>";
      echo "<tbody>
          <tr>
          <td>";
          	echo $datos["datos"]["tipoCita"];
          echo "</td>";
  					if($datos["profesionales"] != NULL)
  					{
  						echo
  						"<div class='form-group'>
              <td>
              <select name='id' form='formulario'>";
  						foreach ($datos["profesionales"] as $d)
  						{
  							echo "<option value='",$d["id"],"'>",$d["apellidos"],"</option>";
  						}
  						echo
  						"</select>
            </td>;";
  					}
            else
            {
                echo "<td>";
                echo "No hay profesionales
                </td>";
            }
            echo
      "<td>
        <select name='dia' form='formulario'>
  <option value='Lunes'>Lunes</option>
  <option value='Martes'>Martes</option>
  <option value='Miercoles'>Miercoles</option>
  <option value='Jueves'>Jueves</option>
  <option value='Viernes'>Viernes</option>
</select>";
        echo
      "</td>
      <td>
        <select name='hora' form='formulario'>
      <option value='800'>8:00</option>
      <option value='900'>9:00</option>
      <option value='1000'>10:00</option>
      <option value='1100'>11:00</option>
      <option value='1200'>12:00</option>
      </select>";
        echo
      "</td>
        <td>
        <div class='form-group'>
          <input class='form-control' name='comentarios' form='formulario'>
        </div>
        </td>
        <td>
        ";
      if($datos["profesionales"] != NULL && $datos["datos"] != NULL)
      {
        echo
        "<form method='post' action='insertar_cita' id='formulario'>";?>
          {!! csrf_field() !!}
          <?php
          echo
          "<input type='submit' name='action' value='asignar Cita'/>
          <input type='hidden' name='tipoCita' value='",$datos["datos"]["tipoCita"],"'/>
          <input type='hidden' name='idOrden' value='",$datos["datos"]["idOrden"],"'/>
        </form>";
      }else echo "Imposible realizar la cita";
        echo
      "
      </td>
    </tr>";
    echo "</tbody>";
            echo "</tbody>
                        </table>";
 ?>

@endsection
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help
