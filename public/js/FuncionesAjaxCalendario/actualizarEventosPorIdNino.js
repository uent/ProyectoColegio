function actualizarEventosPorIdNino(idNino, eventosExtras = null) {

    $.ajax({
      url:'horarioNino/' + idNino,
      type:'get',
      //force to handle it as text
      dataType: "Json",
      success: function(data) {

        $('#calendar').fullCalendar( 'addEventSource', data );

        if(eventosExtras != null)
        {
            $('#calendar').fullCalendar( 'addEventSource', eventosExtras );
        }

      },

      error: function(xhr, status, error) {
        console.log("fallo actualizarEventosPorIdNino Js");
        return($.parseJSON([])); //retorna un arreglo vacio
      }


    });
  }
