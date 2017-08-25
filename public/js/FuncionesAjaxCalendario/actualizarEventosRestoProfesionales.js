  function actualizarEventosRestoProfesionales(idProfesional) {
    //recibe el id del usuario que no debe agregar
      $.ajax({
        url:'horarioRestoProfesionales/' + idProfesional,
        type:'get',
        //force to handle it as text
        dataType: "Json",
        success: function(data) {

          $('#calendar').fullCalendar( 'addEventSource', data );

        },

        error: function(xhr, status, error) {
          console.log("fallo actualizarEventosRestoProfesionales Js");
          return($.parseJSON([])); //retorna un arreglo vacio
        }


      });
    }
