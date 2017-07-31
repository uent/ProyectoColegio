$(document).ready(function() {

    // page is now ready, initialize the calendar...

    var fieldId = $('#field').data("field-id");

    var arr =[];
    for( var i in fieldId ) {
        if (fieldId.hasOwnProperty(i)){
           arr.push(fieldId[i]);
        }
    }

    console.log(arr);

    $('#calendar').fullCalendar({
        // put your options and callbacks here


        header:
        {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek ,agendaDay '
        },
        defaultView: 'agendaWeek',
        events: []

    });

    $('#calendar').fullCalendar( 'addEventSource', arr );

});
