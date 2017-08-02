function ActualizarCalendarioPorNuevoIdProfesional (){


    var idProfesional = document.getElementById("idProfesional").value;

    $('#calendar').fullCalendar( 'removeEvents' ); //elimina todos los eventos en el calendario

    ActualizarEventosUsuario(idProfesional); //llama al metodo GetEventosUsuario para actualizar el Calendario
                                      //con los datos de la db;
};
