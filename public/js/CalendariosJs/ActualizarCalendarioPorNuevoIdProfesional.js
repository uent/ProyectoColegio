function actualizarCalendarioPorNuevoIdProfesional (){


    var idProfesional = document.getElementById("idProfesional").value;

    $('#calendar').fullCalendar( 'removeEvents' ); //elimina todos los eventos en el calendario

    var nuevaCita = crearNuevaCita();

    actualizarEventosUsuario(idProfesional,nuevaCita); //llama al metodo actualizarEventosUsuario para actualizar el Calendario
                                      //con los datos de la db;


};
