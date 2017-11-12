function actualizarEventosPorIdNinoIdProfesional(idNino,idProf) {

    $.ajax({
      url:'horarioNinoProf/' + idNino + '/' + idProf,
      type:'get',
      //force to handle it as text
      dataType: "Json",
      success: function(data)
      {
        if(data != null)
        {
          $('#calendar').fullCalendar( 'addEventSource', data);
        }
      },

      error: function(xhr, status, error) {
        console.log("fallo actualizarEventosPorIdNinoIdProfesional Js");
        return($.parseJSON([])); //retorna un arreglo vacio
      }


    });
  }
