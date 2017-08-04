function crearNuevaCita(){

  var fechaCalendario= $('#calendar').fullCalendar( 'getDate' ); //retorna un obj Moment con la fecha en la cual se ubica el calendario

  var horaInicio = fechaCalendario.hours(0).minutes(0).seconds(0); //se realiza un set para dejar el nuevo envento en una fecha facil de encontrar

  var NuevaCita = [{  //se crean los datos de la cita
      id: "nuevaCita",
      title: "Nueva Cita",
      start: horaInicio,
      end: (horaInicio.hours(1)),
      url: "nuevaCita",
      allDay: 0,
      startEditable: 1,
      durationEditable: 1,
      color: 'red'    }];

    return NuevaCita;
}
