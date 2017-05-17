@extends('Layout\Layout')

@section('cabecera')
<?php
#cabecera

echo "Cita";
?>
@endsection

@section('content1')



@endsection

@section('content2')

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<dl>
  <dt>
    Nombre Niño
  </dt>
  <dd>
    <?php echo $datos["nombre"] , " ", $datos["apellidos"]; ?>
  </dd>
  <dt>
    Rut
  </dt>
  <dd>
    <?php echo $datos["rut"]; ?>
  </dd>
  <dt>
    Estado
  </dt>
  <dd>
    <?php echo $datos["estado"]; ?>
  </dd>
  <?php  if($datos["comentarios"] != "")
  {
    echo"
    <dt>
      Comentarios
    </dt>
    <dd>";
      echo $datos["comentarios"];
      echo "
    </dd>";
  }?>

</dl>
<form id="formulario" role="form" method='post' action='Guardar_reporte'>
  {{ csrf_field() }}
  <div class="form-group">

    <label for="reporte">
      Reporte //hay que cambiar la altura del formulario
    </label>
    <input class="form-control" id="Reporte" name='reporte'>
  </div>
  <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
  <input type='submit' name='action' value='Enviar reporte'/>

  </button>
</form>


</div>
</div>
</div>


@endsection
