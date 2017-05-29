@extends ('layouts.admin')



@section('nombrePagina')
  Datos
@endsection



@section('contenido')
<?php
  if($datos[0] != NULL) //datos nino
  {    echo"
<div id='main-wrapper'>
<div class='row'>
  <div class='col-md-6'>
    <div class='user-profile-panel panel panel-white'>
      <div class='panel-heading'>
          <div class='panel-title'>Niño/a</div>
      </div>
      <div class='panel-body'>
        <h4 class='text-center m-t-lg'>".$datos[0]["nombre"]." ".$datos[0]["apellidos"]."</h4>
        <p class='text-center'>".$datos[0]["rut"]."</p> <br>
        <p class='text-center'>".$datos[0]["edad"]." años </p>
        <hr>
        <ul class='list-unstyled text-center'>
            <li><p><i class='icon-folder m-r-xs'></i><b>Diagnostico:<b></p> ".$datos[2]["diagnosticoProfesional"]."</li>
        </ul><hr>
        <ul class='list-unstyled text-center'>
            <li><p><i class=' icon-grid m-r-xs'></i><b>Derivación:<b></p> ".$datos[2]["derivacion"]."</li>
        </ul><hr>
        <ul class='list-unstyled text-center'>
            <li><p><i class=' icon-docs m-r-xs'></i><b>Solicitud:<b></p> ".$datos[2]["solicitud"]."</li>
        </ul><hr>
        <ul class='list-unstyled text-center'>
            <li><p><i class=' icon-notebook m-r-xs'></i><b>Escolaridad:<b></p> ".$datos[2]["escolaridad"]."</li>
        </ul><hr>
        <form method='get' action='Cambiar_status_contacto'>
          <input type='hidden' name='prioridad' value='normal'/>
          <input type='checkbox' name='prioridad' value = 'alta' /> <h4>Caso de prioridad</h4>
          <input type='hidden' name='idNino' value='".$datos[0]["idNino"]."'/><br><br>
          <input type='hidden' name='idOrden' value='".$datos[2]["idOrdenDiagnostico"]."'/><br><br>
          <button type='submit' name='action' class='btn btn-info btn-block'><i class='icon-plus m-r-xs'></i>CONTACTADO</button>


            </div>
        </div>
    </div>
    <div class='col-md-6'>

        <div class='panel panel-white'>
            <div class='panel-heading'>
                <div class='panel-title'>Observaciones</div>
            </div>
            <div class='panel-body'>
                <textarea rows='6' cols='65'>".$datos[2]["Observaciones"]."</textarea>
            </div>
        </div>
         </form>
        ";

    if($datos[1] != NULL) //datos tutores
    {
    echo
    "
    </div>
    <div class='col-md-6'>
        <div class='user-profile-panel panel panel-white'>
            <div class='panel-heading'>
                <div class='panel-title'>Tutor</div>
            </div>
            <div class='panel-body'>";

          foreach ($datos[1] as $t)
          {
            $t->name;
            $t->rut;
            $t->email;

          }
        }
          echo
        "


                <h4 class='text-center m-t-lg'>".$t->name." ".$t->apellidos."</h4>
                <p class='text-center'>".$t->rut."</p>
                <hr>
                <ul class='list-unstyled text-center'>
                    <li><p><i class='icon-users m-r-xs'></i>"."AQUI VA EL PARENTESCO"."</p></li>
                    <li><p><i class='icon-envelope-open m-r-xs'></i>".$t->email."</p></li>
                    <li><p><i class='icon-call-end m-r-xs'></i>"."AQUI VA EL TELEFONO"."</p></li>
                    <li><p><i class='icon-screen-tablet m-r-xs'></i>"."AQUI VA EL CELULAR"."</p></li>
                </ul>

            </div>
        </div>
    </div>

</div>
</div>


      ";


  } else echo "No hay datos";

 ?>
@endsection
