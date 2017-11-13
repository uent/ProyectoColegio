<!DOCTYPE html>
<html>
<head>
<title>Document</title>
</head>
<body>


  <p><b>Estimada familia:</b><br><br>

  Junto con saludarlos, escribimos para enviar las horas programadas para iniciar el proceso de evaluación multidisciplinaria en nuestro Centro.
  <!--La primera entrevista está calendarizada para el día xxx (no debe asistir su hij@ ese día).
  -->Adjuntamos calendarización.

<?php   "<table class='table'>
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>";
    foreach($datosCitas as $c)
    {
      echo "<tr>";
        echo "<td>" . $c["tipoEvaluacion"] . "</td>
        <td>" . $c["fechaInicio"] . "</td>
      </tr>";
    }
   ?>
  </tbody>
</table>


  <!--Asimismo, enviamos una encuesta de coevaluación que solicitamos completar y enviar a este mismo mail antes de nuestro primer encuentro.
  Además, recordamos que el pago (o aporte, de acuerdo a cada caso) de la evaluación debe ser realizado al comienzo de esta, es decir, el día de la Anamnesis.-->

  <br>Para confirmar las horas y ante cualquier inquietud solicitamos contactarnos al 2633320 o escribirnos a este mismo correo.


  <br>Saludos afectuosos
  <b><br>Daniela Moya Arias
  <br>Socióloga
  <br>Equipo de Evaluación Altavida
  <br>Grupo Alianza</b>
</p>
</body>
</html>
