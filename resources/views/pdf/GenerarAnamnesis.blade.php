<img src="{{asset('images/altavida-logo.png')}}" style="width:65px;" align="left">

<br><br>
<div align="right">
	<div >
		<b style="color:red"><i>ALTAVIDA</i> </b><br>
		<b><i>Centro de Recursos</i> </b><br>
		<b><i><small> Lusitania 30 Miraflores Viña del Mar (32)2633320</small></i> </b>
	</div>
</div>

<br><hr/>

<div id="Cabecera" align="center">
	<h3>INFORME DE EVALUACIÓN</h3>
</div>
<br>
<div id="identificacionNino">
	<h4>IDENTIFICACIÓN</h4><br>
	<table style="border-collapse: collapse">
		<tr>
		    <th>Nombre<</th>
		    <th>:</th>
		    <th> </th>
	  	</tr>
	  	<tr>
		    <th>Fecha Nacimiento</th>
		    <th>:</th>
		    <th> </th>
	  	</tr>

		<tr>
		    <th>Edad Cronológica</th>
		    <th>:</th>
		    <th> </th>
	  	</tr>

		<tr>
		    <th>Periodo de Evaluación</th>
		    <th>:</th>
		    <th> </th>
	  	</tr>

		<tr>
		    <th>Fecha Informe</th>
		    <th>:</th>
		    <th></th>
	  	</tr>

	</table>

</div>
<div>
	<h4>MOTIVO DE EVALUACIÓN</h4><br>


</div>
<div>
	<h4>ANTECEDENTES RELEVANTES</h4>
	<br><br>
	<br>En relación a apoyos profesionales:
	<br>En relación a la experiencia educativa:


</div>
<div>
	<h4>PROCEDIMEINTOS DE EVALUACIÓN</h4><br>
	<ul>
	  <li>Anamnesis y Entrevista de Co-Evaluación Familiar Altavida</li>
	  <li>Observación directa en situación clínica.</li>
	  <li>Evaluación Psicopedagógica: AQUI VA EL NOMBRE DE LA PSICOPEDAGOGA</li>
	  <li>Evaluación Fonoaudiológica: AQUI VA EL NOMBRE DE LA FONO</li>
	  <li>Evaluación en Terapia Ocupacional: AQUI VA EL NOMBRE DE LA TERAPEUTA</li>
	  <li>Evaluación Psicológica: AQUI VA EL NOMBRE DE LA PSICOLOGA</li>
	  <li>Evaluación en sesión de Equipo Transdisciplinario. </li>

	</ul>
</div>
<div style="page-break-after:always;"></div>

<div>
	<h4>SÍNTESIS DIAGNÓSTICA</h4><br>
	<div>
		<U><b>Evaluación Psicopedagógica</b></u><br><br>

		<table class="table table-bordered">
          <tr align="center">
            <th><b>Área de Desarrollo</b></th>
            <th><b>Nivel de Evolución</b> </th>
            <th><b>NEE/Sugerencias de Apoyo</b> </th>
          </tr>
          <tr>
            <th>Funciones <br> Psicopsicologicológicas<br> Básicas</th>
            <th><?php echo $datos['FPBNE1Psicopedagogo'] ?></th>
            <th><?php echo $datos['FPBNEESug1Psicopedagogo'] ?></th>
          </tr>
          <tr>
            <th></th>
            <th><?php echo $datos['FPBNE2Psicopedagogo'] ?></th>
            <th><?php echo $datos['FPBNEESug2Psicopedagogo'] ?></th>
          </tr>
          <tr>
            <th></th>
            <th><?php echo $datos['FPBNE3Psicopedagogo'] ?></th>
            <th><?php echo $datos['FPBNEESug3Psicopedagogo'] ?></th>
          </tr>
          <tr>
            <th></th>
            <th><?php echo $datos['FPBNE4Psicopedagogo'] ?></th>
            <th><?php echo $datos['FPBNEESug4Psicopedagogo'] ?></th>
          </tr>
          <tr>
            <th>Comportamiento General</th>
            <th><?php echo $datos['comportamientoNivelPsicopedagogo'] ?></th>
            <th><?php echo $datos['ComportamientoSugPsicopedagogo'] ?></th>
          </tr>
          <tr>
            <th>Aprendizaje</th>
            <th><?php echo $datos['aprendizajeNivelPsicopedagogo'] ?></th>
            <th><?php echo $datos['aprendizajeSugPsicopedagogo'] ?></th>
          </tr>
          <tr>
              <th>Conclusiones/<br>Sugerencias</th>
              <th colspan="2"><?php echo $datos['conclusionesSugerenciasPsicopedagogo'] ?></th>
          </tr>
        </table>
	</div><br><br>
	<div>
		<u><b>Evaluación Fonoaudiológica</b></u><br><br>
		<table class="table table-bordered">
          <tr align="center">
            <th><b>Área de Desarrollo</b></th>
            <th><b>Caracterización</b> </th>

          </tr>
          <tr>
            <th>Conducta Socio Comunicativa</th>
            <th><?php echo $datos['condSocioComunicativaFonoaudiologo'] ?></th>
          </tr>
          <tr>
            <th>Competencia Comunicativa</th>
            <th><?php echo $datos['competComunicativaFonoaudiologo'] ?></th>
          </tr>
          <tr>
            <th>Lenguaje Comprensivo</th>
            <th><?php echo $datos['lengComprensivoFonoaudiologo'] ?></th>
          </tr>
          <tr>
            <th>Lenguaje Expresivo</th>
            <th><?php echo $datos['lengExpresivoFonoaudiologo'] ?></th>
          </tr>
          <tr>
            <th>Conclusiones </th>
            <th><?php echo $datos['conclusionesFonoaudiologo'] ?></th>
          </tr>
          <tr>
            <th>Sugerencias</th>
            <th><?php echo $datos['sugerenciasFonoaudiologo'] ?></th>
          </tr>

        </table>

	</div>
	<div>
		<u><b>Evaluación en Terapia Ocupacinal</b></u><br><br>
		<table>
	      <tr align="center">
	        <th><b>Área de Desarrollo</b></th>
	        <th><b>Observaciones</b> </th>
	        <th><b>Sugerencias</b> </th>
	      </tr>
	      <tr>
	        <th>Coordinación motriz gruesa y fina</th>
	        <th><?php echo $datos['coordinacionObsTerapeutaOcupacional'] ?></th>
	        <th><?php echo $datos['coordinacionSugTerapeutaOcupacional'] ?></th>
	      </tr>
	      <tr>
	        <th>Procesamiento sensorial</th>
	        <th><?php echo $datos['procesamientoObsTerapeutaOcupacional'] ?></th>
	        <th><?php echo $datos['procesamientoSugTerapeutaOcupacional'] ?></th>
	      </tr>
	      <tr>
	        <th>Conclusiones y sugerencias de apoyo</th>
	        <th colspan="3"><?php echo $datos['concluSugereniasTerapeutaOcupacional'] ?></th>
	      </tr>
	    </table>
	</div>
	<div>
		<u><b>Evaluación Psicológica</b></u><br><br>
		<table class="table table-bordered">
          <tr align="center">
            <th><b>Área de Desarrollo</b></th>
            <th><b>Caracterización</b> </th>
          </tr>
          <tr>
            <th>Desarrollo Social</th>
            <th><?php echo $datos['desarrolloSocialPsicologo'] ?></th>
          </tr>
          <tr>
            <th>Respuesta Emocional</th>
            <th><?php echo $datos['respEmocionalPsicologo'] ?></th>
          </tr>
          <tr>
            <th>Referencia Conjunta</th>
            <th><?php echo $datos['refConjuntaPsicologo'] ?></th>
          </tr>
          <tr>
            <th>Juego</th>
            <th><?php echo $datos['juegoPsicologo'] ?></th>
          </tr>
          <tr>
            <th>Comunicación y Lenguaje</th>
            <th><?php echo $datos['conmunicacionLengPsicologo'] ?></th>
          </tr>
          <tr>
            <th>Flexibilidad Mental</th>
            <th><?php echo $datos['flexMentalPsicologo'] ?></th>
          </tr>
          <tr>
            <th>Pensamiento</th>
            <th><?php echo $datos['pensamientoPsicologo'] ?></th>
          </tr>
          <tr>
            <th>Comportamiento General</th>
            <th><?php echo $datos['comportamientoGnrlPsicologo'] ?></th>
          </tr>
          <tr>
            <th>Conclusión/Sugerencia de Apoyo</th>
            <th><?php echo $datos['concluPsicologo'] ?></th>
          </tr>
        </table>
	</div>
</div>
