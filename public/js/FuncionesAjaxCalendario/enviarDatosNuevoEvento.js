function enviarDatosNuevoEvento() {

  var _token = $('input[name="_token"]').val();

  var idProfesional = document.getElementById("idProfesional").value;

  var idOrden = document.getElementById("idOrden").value;

  var tipoCita = document.getElementById("tipoCita").value;

  var comentarios = document.getElementById("comentarios").value;


  var nuevaCita = $('#calendar').fullCalendar( 'clientEvents', "nuevaCita"); //este metodo retornara un arreglo con todos los eventos con el id entregado
  //el id "nuevaCita" se establecio en el metodo crearNuevaCita.js

  var fechaInicio = nuevaCita[0]["start"].format('YYYY-MM-DD HH:mm:ss'); //extrae la hora de inicio en formato string

  var fechaFin = nuevaCita[0]["end"].format('YYYY-MM-DD HH:mm:ss');//extrae la hora de finalizacion en formato string

  $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
  });

  $.ajax({
    url: 'insertar_cita',
    type: 'post', // performing a POST request
    data : {
       _token : _token ,
      inicio: fechaInicio,
      fin: fechaFin,
      idOrden: idOrden,
      id: idProfesional, //id del profesional que se le asignara la cita
      tipoCita: tipoCita,
      comentarios: comentarios
    },
    dataType: 'text',
    success: function(data)
    {
      //document.write(data);
      $('#idBody').html(data);
    },
    error: function(data)
    {
      $('#idBody').html(data);
    }
  });
}
