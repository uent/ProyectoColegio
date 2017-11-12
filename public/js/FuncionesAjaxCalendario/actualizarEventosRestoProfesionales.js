  function actualizarEventosRestoProfesionales(idProfesional) {
    //recibe el id del usuario que no debe agregar
      $.ajax({
        url:'horarioRestoProfesionales/' + idProfesional,
        type:'get',
        //force to handle it as text
        dataType: "Json",
        success: function(data) {

          var citasEnCalendario = $('#calendar').fullCalendar( 'clientEvents'); //este metodo retornara un arreglo con todos los eventos en el calendario

          if(data != null)
          {
            for(i=0;i<data.length;i++)
            {
              for(j=0;j<citasEnCalendario.length;j++)
              {
                if(data[i].id != citasEnCalendario[j].id)
                {
                  $('#calendar').fullCalendar( 'addEventSource', data );
                }
              }
            }
          }
        },

        error: function(xhr, status, error) {
          console.log("fallo actualizarEventosRestoProfesionales Js");
          return($.parseJSON([])); //retorna un arreglo vacio
        }


      });
    }
