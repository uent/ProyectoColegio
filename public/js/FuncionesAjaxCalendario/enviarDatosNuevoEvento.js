function enviarDatosNuevoEvento() {

  var nuevaCita = $('#calendar').fullCalendar( 'clientEvents', "nuevaCita"); //el id "nuevaCita" se establecio en el metodo crearNuevaCita.js

  console.log(nuevaCita[0]);

  $.ajax({
    url: 'insertar_cita',
    type: 'post', // performing a POST request
    data : {
      fechaInicio : nuevaCita.start()
    },
    dataType: 'json',
    success: function(data)
    {

    }
  });
}
