$(document).ready(function() {

    // page is now ready, initialize the calendar...
    var idProfesional = document.getElementById("idProfesional").value;

    $('#calendar').fullCalendar({
        // put your options and callbacks here
        header:
        {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay '
        },
        defaultView: 'agendaWeek',
        events: []  //se ingresa un arreglo vacio, no habra eventos en un inicio

    });

    GetEventosUsuario(idProfesional); //llama al metodo GetEventosUsuario para actualizar el Calendario
                                      //con los datos de la db;
});
