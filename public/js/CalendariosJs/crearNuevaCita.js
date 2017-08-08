function crearNuevaCita(){

  var fechaCalendario= $('#calendar').fullCalendar( 'getDate' ); //retorna un obj Moment con la fecha en la cual se ubica el calendario

  var horaInicio = moment((fechaCalendario.hours(6).minutes(0).seconds(0)).toDate()); //se realiza un set para dejar el nuevo envento en una fecha que este en el mismo dia/semana/mes que se este viendo

  var horaTemp = horaInicio.toDate();

  var horaFin = moment(horaTemp);

  horaFin.add(1,'hours');//se agrega una hora extra para generar la hora final de la cita

  var NuevaCita = [{  //se crean los datos de la cita dentro de un arreglo de eventos
      id: "nuevaCita",
      title: "Nueva Cita",
      start: horaInicio,
      end: horaFin,
      url: "nuevaCita",
      allDay: 0,
      startEditable: 1,
      durationEditable: 1,
      color: 'red'    }];

    return NuevaCita;
}
