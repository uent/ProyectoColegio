$(document).ready(function() {
 $("#finish").click(function(){
 		console.log('poto0');
        
        document.getElementById("resum").innerHTML = 
        "<h3><b>Información Niño/a</b></h3>" +
        "<b>Nombre Niñ@: </b>" + document.getElementById("nombreNino").value + " " + document.getElementById("apellidoNino").value +
        "<br><b>Rut: </b>" + document.getElementById("rutNino").value +
        "<br><b>Edad: </b>" + document.getElementById("edadNino").value + 
        "<br><b>Diagnóstico: </b>" + document.getElementById("diagnostico").value +
        "<br><b>Derivación: </b>" + document.getElementById("derivacion").value + 
        "<br><b>Solicitud: </b>" + document.getElementById("solicitud").value +
        "<br><b>Escolaridad: </b>" + document.getElementById("escolaridad").value + 
        "<br><b>Observaciones: </b>" + document.getElementById("observaciones").value +
        "<br><h3><b>Información Tutor</b></h3>" + 
        "<br><b>Nombre: </b>" + document.getElementById("nombreTutor").value + " " + document.getElementById("apellidoTutor").value +
        "<br><b>Rut: </b>" + document.getElementById("rutTutor").value + 
        "<br><b>Mail: </b>" + document.getElementById("mailTutor").value + 
        "<br><b>Teléfono: </b>" + document.getElementById("fonoTutor").value + 
        "<br><b>Celular: </b>" + document.getElementById("celular").value + 
        "<br><b>Parentesco: </b>" + document.getElementById("parentesco").value ;

	});   
});


