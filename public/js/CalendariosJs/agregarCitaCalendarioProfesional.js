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
        defaultView: 'agendaWeek',
        events: [],  //se ingresa un arreglo vacio, no habra eventos en un inicio
        eventOverlap: false,
        timezoneParam: 'Santiago'
    });

    crearNuevaCita();

    actualizarEventosPorIdNinoIdProfesional(idNino,idProfesional)

    //actualizarEventosPorIdNino(idNino,NuevaCita);

    //actualizarEventosPorIdUsuario(idProfesional); //llama al metodo GetEventosUsuario para actualizar el Calendario
                                                       //con los datos de la db;
    //actualizarEventosRestoProfesionales(idProfesional);
    //actualizarEventosProfesionales();

});
