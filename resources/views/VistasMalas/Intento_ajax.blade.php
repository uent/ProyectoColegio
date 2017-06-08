
@extends ('layouts.admin')



@section('nombrePagina')
  Ingreso | Datos Niño/a
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

<div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Solicitud de Atención</h3>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Ingrese los datos del niño o niña</h4>
                                </div>
                                <div class="panel-body">


                                        <div class="form-group">
                                          <input  type="text" name="rut" id='rut' >

                                          <input  onclick="evaluar()" type="button" value="submit"  >
                                        </div>
                                </div>
                            </div>
                            <p id="campoTexto"></p>
                            <div id="nino">
                            <div id="padres">

                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

            </div><!-- Page Inner -->



@endsection



<script>
   function evaluar(){
     var rut = document.getElementById("rut").value;

     var url = 'validarRutNinoAjax/'.concat(rut);

     //document.getElementById("detspace").innerHTML =  url ;
      var messageList = $(".shoutbox > ul");

      $.ajax({
    url:'validarRutNinoAjax/' + rut,
    type:'get',
    //force to handle it as text
    dataType: "text",
    success: function(data) {

        //data downloaded so we call parseJSON function
        //and pass downloaded data
        var json = $.parseJSON(data);
        //now json variable contains data in json format
        //let's display a few items
        //document.getElementById("detspace").innerHTML =  url;

          //document.getElementById("campoTexto").innerHTML =  json["statusNino"];

        if(json["statusNino"] == "existe")
        {
          if(json["statusPadre"] == "existe")
          {
            var datosPadre = ('<br> Padres <br>'.concat(json["padreNombre"])).concat(json["padreApellido"]);
          }else  var datosPadre = "";

          var html = [
            '<h3>',
      				'Ya existe el niño.',
      			'</h3>',
            '<div class="col-md-12">',
				           '<strong>',json["ninoNombre"]," ",json["ninoApellidos"],'</strong>',datosPadre,

		        '</div>'

          ].join('');

        var div = document.createElement('div');
        div.setAttribute('class', 'post block bc2');
        div.innerHTML = html;
        document.getElementById('nino').appendChild(div);
      }
      else if(json["statusNino"] == "rutNoExiste")
      {
        var html = [
          '<h3>',
            'Crear nueva ficha.',
          '</h3>',
          '<form method="POST" action="{{ url('ingresar_nino') }}" role="form" class="form">',
                  '{!! csrf_field() !!}',
                  '<div class="form-group">',
          '<input type="hidden" name="Rut" value=',rut,'class="form-control" placeholder="Nombre" required autofocus></input><br>',
          '<input name="Nombre" class="form-control" placeholder="Nombre" required autofocus></input><br>',
          '<input name="Apellidos" class="form-control" placeholder="Apellidos" required autofocus></input><br>',
          '<input name="Edad" class="form-control" placeholder="Edad" required autofocus></input><br>',
          '<textarea name="Diagnostico" class="form-control" placeholder="Diagnóstico/Profesional"></textarea><br>',
          '<input name="Derivacion" class="form-control" placeholder="Derivación" ></input><br>',
          '<input name="Solicitud" class="form-control" placeholder="Solicitud" ></input><br>',
          '<input name="Escolaridad" class="form-control" placeholder="Escolaridad"></input><br>',
          '<textarea  name="Observaciones" class="form-control" placeholder="Observaciones"></textarea><br>',

          '</div>',
          '<button type="submit" onClick="this.form.submit(); this.disabled=true; this.value="Sending…"; " class="btn btn-primary">Siguiente</button>',
  '</form>',
        ].join('');

        var div = document.createElement('div');
        div.setAttribute('class', 'post block bc2');
        div.innerHTML = html;
        document.getElementById('nino').appendChild(div);

      }


        }

});


   }
</script>
