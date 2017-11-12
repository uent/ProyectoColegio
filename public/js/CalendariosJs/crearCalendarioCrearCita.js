$(document).ready(function() {

    var idProfesional = document.getElementById("idProfesional").value;
    var idNino = document.getElementById("idNino").value;

    $('#calendar').fullCalendar({
        // put your options and callbacks here
        header:
        {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay '
        },

        businessHours:
        {
          // days of week. an array of zero-based day of week integers (0=Sunday)
          dow: [ 1, 2, 3, 4, 5, 6, 7], // Monday - Thursday

          start: '8:00', // a start time (10am in this example)
          end: '20:00', // an end time (6pm in this example)
        },

        defaultView: 'agendaWeek',
        events: [],  //se ingresa un arreglo vacio, no habra eventos en un inicio
        eventOverlap: false,
        timezoneParam: 'Santiago'
    });

    //actualizarEventosPorIdUsuario(idProfesional); //llama al metodo GetEventosUsuario para actualizar el Calendario
                                                       //con los datos de la db;
    //actualizarEventosPorIdNino(idNino);

    //actualizarEventosRestoProfesionales(idProfesional);
});
