function actualizarEventosPorIdUsuario(idProfesional, eventosExtras = null) {

    $.ajax({
      url:'horarioProfesional/' + idProfesional,
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
        console.log("fallo actualizarEventosPorIdUsuario Js");
        return($.parseJSON([])); //retorna un arreglo vacio
      }


    });
  }
