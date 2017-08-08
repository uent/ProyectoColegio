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
	<h3>Proceso de Coevaluación Familiar</h3>
</div>
<br>

<div id="identificacionNino">
	<h4>I.    IDENTIFICACIÓN</h4><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0">
  		<tr>
		    <th>Nombre de su hijo</th>
		    <th><?php echo $datos['nombreNino'], " ", $datos['apellidosNino'] ?></th>
	  	</tr>
		<tr>
		    <th>Rut</th>
		    <th><?php echo $datos['rutNino'] ?></th>
	  	</tr>
		<tr>
		    <th>Fecha Nacimiento</th>
		    <th><?php echo $datos['fechaNacimiento'] ?> </th>
	  	</tr>
		<tr>
		    <th>Número de Hemanos</th>
		    <th><?php echo $datos["inputCantHrmns"] ?></th>
	  	</tr>
	  	<tr>
		    <th>Nombre del Padre</th>
		    <th><?php echo $datos["inputNombrePadre"] ?></th>
	  	</tr>
	  	<tr>
		    <th>Nombre de la Madre</th>
		    <th><?php echo $datos["nombreMadre"] ?></th>
	  	</tr>
	  	<tr>
		    <th>Direción</th>
		    <th><?php echo $datos["inputDireccion"] ?></th>
	  	</tr>
	  	<tr>
		    <th>Teléfono</th>
		    <th><?php echo $datos["inputCantHrmns"] ?></th>
	  	</tr>

	</table>
</div>
<div id="motivodeconsulta">
	<h4>II.    MOTIVO DE CONSULTA</h4><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
		<tr>
			<th>¿Por qué solicitala evaluación?¿Algún profesional / institucion deriva para evaluación?</th>
		</tr>
		<tr>
			<th><?php echo $datos["motivo1"] ?></th>
		</tr>
	</table>
	<br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
		<tr>
			<th>¿Qué expectativas tiene respecto al proceso de evaluación?</th>
		</tr>
		<tr>
			<th><?php echo $datos["motivo2"] ?></th>
		</tr>
	</table>
	<br>
	<table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0">
		<tr>
			<th>¿Qué tipo de dificultad presenta actualmente su hijo/a?</th>
		</tr>
		<tr>
			<th><?php echo $datos["motivo3"] ?></th>
		</tr>
	</table    >
</div>
<div id="contextoFamiliar">
	<h4>III.    CONTEXTO FAMILIAR</h4><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
  		<tr>
  			<th>¿Quiénes integran su familia y qué ocupaciones tienen?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["contexto1"] ?></th>
  		</tr>
	</table>
	<br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
  		<tr>
  			<th>¿Existen antecedentes de enfermedades importantes en su familia?, ¿Cuáles? </th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["contexto2"] ?></th>
  		</tr>
	</table><br>
</div>
<div id="Antecedentes">
	<h4>IV.    ANTECEDENTES RELEVANTES</h4><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
  		<tr>
  			<th>¿Cómo fue el desarrollo del embarazo?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["antecedentes1"] ?></th>
  		</tr>
	</table> <br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
  		<tr>
  			<th>¿Con cuántas semanas de gestación nació su hijo(a)? </th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["antecedentes2"] ?></th>
  		</tr>
	</table><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
  		<tr>
  			<th>¿Cómo fue el parto? </th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["antecedentes3"] ?></th>
  		</tr>
  		<tr>
  			<th>Peso</th>
  			<th><?php echo $datos["antecedentes3peso"] ?></th>
  		</tr>
  		<tr>
  			<th>Talla</th>
  			<th><?php echo $datos["antecedentes3talla"] ?></th>
  		</tr>
  		<tr>
  			<th>APGAR</th>
  			<th><?php echo $datos["antecedentes3apgar"] ?></th>
  		</tr>
	</table>
</div>
<div id="desarrollo">
	<h4>V.    DESARROLLO EVOLUTIVO</h4><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
  		<tr>
  			<th>Habilidades motrices gruesas, ejemplo: coordinación para trasladarse, correr, hacer deportes, etc.</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["desarrollo3"] ?></th>
  		</tr>
	</table> <br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
  		<tr>
  			<th>Habilidades motrices finas, ejemplo: tomar el lápiz, manejar los cubiertos, etc.</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["desarrollo4"] ?></th>
  		</tr>
	</table><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"     >
  		<tr>
  			<th>Adquisición del lenguaje. Señale si el desarrollo del lenguaje ha sido normal, rápido o con dificultades.</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["desarrollo5"] ?></th>
  		</tr>
	</table> <br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>¿Qué dificultades ha presentado en el ámbito del lenguaje? (comprensión, expresión, etc.)</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["desarrollo6"] ?></th>
  		</tr>
	</table> <br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>Desarrollo social ¿Cómo se relaciona su hijo/a con personas adultas?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["desarrollo7"] ?></th>
  		</tr>
	</table><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>Desarrollo social ¿Cómo se relaciona su hijo/a con otros niños?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["desarrollo8"] ?></th>
  		</tr>
	</table><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>¿Qué tan autónomo/a es para las siguientes actividades?</th>
  		</tr>
  		<tr>
  			<th>COMER</th>
  			<th><?php echo $datos["comer"] ?></th>
  		</tr>
  		<tr>
  			<th>VESTIRSE</th>
  			<th><?php echo $datos["vestirse"] ?></th>
  		</tr>
  		<tr>
  			<th>HIGIENE</th>
  			<th><?php echo $datos["higiene"] ?></th>
  		</tr>

	</table><br>

	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>¿Cuáles son sus hábitos alimenticios?¿Qué alimentos prefiere?¿Amplio repertorio o restringido?</th>
  			<th><?php echo $datos["habitosAlimenticios"] ?></th>
  		</tr>

	</table>
</div>
<div id="ambitoConductual">
	<h4>VI.    ÁMBITO CONDUCTUAL</h4><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>¿Cómo manifiesta sus emociones?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["ambitoConductual1"] ?></th>
  		</tr>
	</table> <br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>¿Cómo manifiesta la frustración? ¿Es muy irritable  ? ¿Hace pataletas? ¿En que momento y con quién aparecen las pataletas?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["ambitoConductual2"] ?></th>
  		</tr>
	</table> <br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>¿Es flexible en cuanto a actividades o tiene rutinas?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["ambitoConductual3"] ?></th>
  		</tr>
	</table> <br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>¿Tiene intereses claros por algunos objetos o actividades? ¿Reitera en ellos de manera normal o exagerada?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["ambitoConductual4"] ?></th>
  		</tr>
	</table> <br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>¿Tiene miedos muy intensos? ¿Cuáles?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["ambitoConductual5"] ?></th>
  		</tr>
	</table> <br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
  			<th>¿Cómo son sus hábitos de sueños?</th>
  		</tr>
  		<tr>
  			<th><?php echo $datos["ambitoConductual6"] ?></th>
  		</tr>
	</table  >
</div>
<div id="Historial">
	<h4>VII.    HISTORIAL ESCOLAR</h4><br>
	 <table WIDTH="550" border="1" align="center" bordercolor="blue" cellspacing="0"   >
  		<tr>
		    <th>Inicio Escolaridad</th>
		    <th><?php echo $datos["historiaEscolar1"] ?></th>
	  	</tr>
		<tr>
		    <th>Otros estable  cimientos posteriores<small>(año y lugar)</small></th>
		    <th><?php echo $datos["historiaEscolar2"] ?></th>
	  	</tr>
	  	<tr>
		    <th>Estable  cimiento Actual</th>
		    <th><?php echo $datos["historiaEscolar3"] ?></th>
	  	</tr>
	  	<tr>
		    <th>Nivel/Curso Actual</th>
		    <th><?php echo $datos["historiaEscolar4"] ?></th>
	  	</tr>
	  	<tr>
		    <th>Repitencias</th>
		    <th><?php echo $datos["historiaEscolar5"] ?></th>
	  	</tr>
	  	<tr>
		    <th>Comentarios, observaciones o inquietudes que quiera manifestar?</th>
		    <th><?php echo $datos["historiaEscolar6"] ?></th>
	  	</tr>

	</table  >
</div>
