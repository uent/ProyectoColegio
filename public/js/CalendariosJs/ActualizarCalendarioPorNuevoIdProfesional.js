function actualizarCalendarioPorNuevoIdProfesional (){


    var idProfesional = document.getElementById("idProfesional").value;
    var idNino = document.getElementById("idNino").value;

    $('#calendar').fullCalendar( 'removeEvents' ); //elimina todos los eventos en el calendario

    crearNuevaCita();

    //actualizarEventosPorIdUsuario(idProfesional,nuevaCita); //llama al metodo actualizarEventosUsuario para actualizar el Calendario
                                      //con los datos de la db;
    //actualizarEventosPorIdUsuario(idNino);

    //actualizarEventosRestoProfesionales(idProfesional);
    
    actualizarEventosPorIdNinoIdProfesional(idNino,idProfesional);

};
