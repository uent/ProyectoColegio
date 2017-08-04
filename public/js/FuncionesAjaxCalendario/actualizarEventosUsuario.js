function actualizarEventosUsuario(idProfesional, eventosExtras = null) {

    $.ajax({
      url:'horarioProfesional/' + idProfesional,
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
        console.log("fallo GetEventosUsuario Js");
        return($.parseJSON([])); //retorna un arreglo vacio
      }


    });
            }
