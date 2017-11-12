function actualizarEventosPorIdNino(idNino, eventosExtras = null) {

    $.ajax({
      url:'horarioNino/' + idNino,
      type:'get',
      //force to handle it as text
      dataType: "Json",
      success: function(data)
      {
        if(data != null)
        {
          for(i=0;i<data.length;i++)
          {
            var citasEnCalendario = $('#calendar').fullCalendar( 'clientEvents'); //este metodo retornara un arreglo con todos los eventos en el calendario

            if(citasEnCalendario.length > 0)
            {
              for(j=0;j<citasEnCalendario.length;j++)
              {
                if(data[i].id != citasEnCalendario[j].id)
                {
                  $('#calendar').fullCalendar( 'addEventSource', data[i] );
                }
              }
            }
            else
            {
              $('#calendar').fullCalendar( 'addEventSource', data[i] );
            }
          }
        }

      },

      error: function(xhr, status, error) {
        console.log("fallo actualizarEventosPorIdNino Js");
        return($.parseJSON([])); //retorna un arreglo vacio
      }


    });
  }
