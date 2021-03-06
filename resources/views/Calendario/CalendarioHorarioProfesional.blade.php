@extends ('layouts.admin')

@section('nombrePagina')
  Datos
@endsection




@section('contenido')

<script src="{{asset('js\CalendariosJs\CalendarioPorIdProfesional.js')}}"></script>
<script src="{{asset('js\FuncionesAjaxCalendario\actualizarEventosPorIdUsuario.js')}}"></script>


@if (isset($errors) && count($errors) > 0)
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif
<div id='main-wrapper'>

  <input type='hidden' id = "idProfesional" value = <?php echo $idProfesional ?> >

  <div id='calendar'></div>

</div>


@endsection
