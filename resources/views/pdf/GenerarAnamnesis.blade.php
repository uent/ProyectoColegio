<img src="{{asset('images/altavida-logo.png')}}" style="width:65px;" align="left">

<br><br>
<div align="right">
	<div >
		<b style="color:red"><i>ALTAVIDA</i> </b><br>
		<b><i>Centro de Recursos</i> </b><br>
		<b><i><small> Lusitania 30 Miraflores Viña del Mar (32)2633320</small></i> </b>
	</div>
</div>
<?php $datosNino['edadA'] = date_diff(date_create($datos['fechaNacimiento']), date_create('now'))->y ?>
     <?php  $datosNino['edadM'] = date_diff(date_create($datos['fechaNacimiento']), date_create('now'))->m ?>
<br><hr/>

<div id="Cabecera" font-family: "Times New Roman" align="center">
	<h3>INFORME DE EVALUACIÓN</h3>
</div>
<br>
<div  id="identificacionNino">
	<h4>IDENTIFICACIÓN</h4><br>
  <br>


	<table style="border-collapse: collapse" align="justify">


		<tr>
		    <th font-family: "Arial">Nombre</th>
		    <th>:</th>
		    <th><?php echo $datos['nombreNino'], " ", $datos['apellidosNino'] ?></th>
	  	</tr>
	  	<tr>
		    <th>Fecha Nacimiento</th>
		    <th>:</th>
		    <th><?php echo $datos['fechaNacimiento'] ?> </th>
	  	</tr>
     <tr>


        <th>Edad Cronológica</th>
        <th>:</th>
        <th><?php echo $datosNino['edadA'] ?> años y <?php echo $datosNino['edadM'] ?> meses</th>
      </tr>
      <tr>
        <th>Escolaridad</th>
        <th>:</th>
        <th><?php echo $datos['escolaridad'] ?></th>
      </tr>

		<tr>
		    <th>Rut</th>
		    <th>:</th>
		    <th><?php echo $datos['rutNino'] ?></th>
	  	</tr>
    <tr>
        <th>Inicio del Proceso</th>
        <th>:</th>
        <th> <?php echo $datos['created_at'] ?></th>
      </tr>
		<tr>
		    <th>Fecha Informe</th>
		    <th>:</th>
		    <th><?php echo $datos['fechaActual'] ?></th>
	  	</tr>

	</table>

</div>
<div>
	<h4>MOTIVO DE EVALUACIÓN</h4><br>
  <div align="justify"><?php echo $datos['motivoDeEvaluacionMultiDisiplinario'] ?></div>

</div>
<div>
	<h4>ANTECEDENTES RELEVANTES</h4>
<div align="justify"><?php echo $datos['antecedentesRelevantesMultiDisiplinario'] ?></div>

</div>
<br>
<div>
	<h4>PROCEDIMEINTOS DE EVALUACIÓN</h4>
	<ul>



	  <li>Anamnesis y Entrevista de Co-Evaluación Familiar Altavida</li>
	  <li>Observación directa en situación clínica.</li>
	  <li>Evaluación Psicopedagógica: <?php echo $datos['procEvaluaPsicopedagogo'] ?> </li>
	  <li>Evaluación Fonoaudiológica: <?php echo $datos['procEvaluaFonoaudiologo'] ?></li>
	  <li>Evaluación en Terapia Ocupacional: <?php echo $datos['procEvaluaTerapeutaOcupacional'] ?></li>
	  <li>Evaluación Psicológica: <?php echo $datos['procEvaluaPsicologo'] ?></li>
	  <li>Evaluación en sesión de Equipo Transdisciplinario: <?php echo $datos['procEvaluaMultiDisiplinario'] ?></li>

	</ul>
</div>
<div style="page-break-after:always;"></div>
<br>
<div>
	<h4>SÍNTESIS DIAGNÓSTICA</h4><br>
	<div>
		<U><b>Evaluación Psicopedagógica</b></u><br><br>

		<table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0">
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
		<table WIDTH="550" HEIGHT="500" border="1" align="center" bordercolor="blue" cellspacing="0">
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

	</div><br><br>
	<div>
		<u><b>Evaluación en Terapia Ocupacinal</b></u><br><br>
		<table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0">
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
	</div><br><br>
	<div>
		<u><b>Evaluación Psicológica</b></u><br><br>
		<table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0">
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
<br>
Respecto de la información aportada por la Escala de Valoración del Autismo Infantil
(EVAI / CARS) es posible informar la siguiente información cuantitativa:
<br>
<div class=" form-horizontal col-md-12">
   <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0" class="table table-bordered col-md-12">
  <tr align="center">
    <td><b>Área</b></td>
    <td><b>Puntaje Máximo</b> </td>
    <td><b>Puntaje Obtenido</b> </td>
  </tr>
  <tr>
    <td>Relación Con los Demás</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['relacionMultiDisiplinario'] ?></td>
 </tr>
  <tr>
    <td>Imitación</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['imitacionMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>afecto</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['afectoMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Uso del Cuerpo</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['cuerpoMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Uso de Objetos</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['objetosMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Adaptación a Cambios</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['adaptacionMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Respuesta Visual</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['respVisualMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Respuesta Auditiva</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['respAuditivaMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Gusto, Olfato y respuesta táctil</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['gustoOlfatoTactoMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Ansiedad y Miedo</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['ansiedadMiedoMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Comunicación Verbal</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['comunicVerbalMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Comunicación No Verbal</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['comunicNoVerbalMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Nivel de Actividad</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['nivelActMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Respuesta Intelectual</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['respIntelectualMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td>Impresiones Generales</td>
    <td align="center">4</td>
    <td align="center"><?php echo $datos['impresGnrlMultiDisiplinario'] ?></td>
  </tr>
  <tr>
    <td><b>Total</b></td>
    <td align="center">60</td>
    <td align="center"><?php echo $datos['totalMultiDisiplinario'] ?></td>


  </tr>

</table>
</div>
<br> <br>

<div>
      <h4>CONCLUSIONES</h4><br>
      <?php echo $datos['conclusionesMultiDisiplinario'] ?>

  </div>

  <div>
      <h4>SUGERENCIAS</h4><br>
      <?php echo $datos['sugerenciasMultiDisiplinario'] ?>

  </div>

<br>
<br>


  <table style="border-collapse: collapse" align="justify">
    <tr>
        <th><?php echo $datos['nombrePsicopedagogo'], " ", $datos['apellidosPsicopedagogo'] ?></th>
        <th><?php echo $datos['nombreFonoaudiologo'], " ", $datos['apellidosFonoaudiologo'] ?></th>
        <th><?php echo $datos['nombreTerapeutaOcupacional'], " ", $datos['apellidosTerapeutaOcupacional'] ?></th>
      </tr>
      <tr>
        <th>Psicopedagoga</th>
        <th>Fonoaudiologa</th>
        <th>Terapeura Ocupacional</th>
      </tr>
  </table>

  <br><br>
    <table style="border-collapse: collapse" align="justify">
    <tr>
        <th><?php echo $datos['nombrePsicologico'], " ", $datos['apellidosPsicologico'] ?></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>Psicóloga</th>
        <th></th>
        <th></th>
      </tr>
  </table>
