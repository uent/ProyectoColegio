@extends ('layouts.admin')

@section('nombrePagina')
  Datos
@endsection




@section('contenido')

<div id="field" data-field-id="{{$JsonEventos}}" ></div>

<script src="{{asset('js/TestCalendario.js')}}"></script>

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

  <div id='calendar'></div>

</div>


@endsection
