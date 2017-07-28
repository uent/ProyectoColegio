@extends ('layouts.admin')



@section('nombrePagina')
  Datos
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
<div id='main-wrapper'>

{!! $calendar->calendar() !!}
{!! $calendar->script() !!}



</div>


@endsection
