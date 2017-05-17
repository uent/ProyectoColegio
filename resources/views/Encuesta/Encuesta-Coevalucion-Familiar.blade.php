@extends ('layouts.admin')



@section('nombrePagina')
  Encuesta
@endsection



@section('contenido')
<h2>Proceso de Coevaluacion Familiar</h2>
<p>Estimada Familia
Junto con saludarlos y agradeciendo su confianza les solicitamos completar este cuestionario con la mayor fidelidad posible. Su propósito es favorecer el proceso de evaluación que está por comenzar junto a su hijo/a.<p>



<form method="POST" action="{{ url() }}" class="form"> <!-- Direccion por determinar -->
		{!! csrf_field() !!}

		<h3>Identificacion</h3>

		<div class="form-group">
			<label for="Nombre">
				Nombre de su hijo
			</label>
				<input name="Nombre" class="form-control" placeholder="Nombre"></input>
		</div>

		<div class="form-group">
			<label for="Rut">
				Rut
			</label>
				<input name="Rut" class="form-control" placeholder="12345678-9"></input>
		</div>

		<div class="form-group">
			<label for="Fnacimiento">
				Fecha de Nacimiento
			</label>
				<input name="Fnacimiento" class="form-control" placeholder="dd-mm-aaaa"></input>
		</div>

		<div class="form-group">
			<label for="Edad">
				Edad
			</label>
				<input type="text" class="form-control" name="Edad" placeholder="">
		</div>

		<div class="form-group">
			<label for="Escolaridad">
				Escolaridad
			</label>
				<input type="text" class="form-control" name="Escolaridad" placeholder="Jardin o Colegio / Nivel o Curso">
		</div>

		<div class="form-group">
			<label for="Nhermanos">
				Numero de Hermanos
			</label><input type="text" class="form-control" name="Nhermanos" placeholder="">
		</div>

		<div class="form-group">
			<label for="Phermanos">
				Lugar que ocupa entre los Hermanos
			</label>
			<input type="text" class="form-control" name="Phermanos" placeholder="primero,segundo">
		</div>

		<div class="form-group">
			<label for="NomPadre">
				Nombre del Padre
			</label>
			<input type="text" class="form-control" name="NomPadre" placeholder="">
		</div>

		<div class="form-group"><label for="NomMadre">Nombre de la Madre</label><input type="text" class="form-control" name="NomMadre" placeholder=""></div>
		
		<div class="form-group"><label for="Direccion">Direccion</label><input type="text" class="form-control" name="Direccion" placeholder=""></div>

		<div class="form-group"><label for="Telefono">Telefono</label><input type="text" class="form-control" name="Telefono" placeholder=""></div>

		<div class="form-group"><label for="CorrElec">Correo electronico</label><input type="text" class="form-control" name="CorrELec" placeholder=""></div>

		<div class="form-group"><label for="NomCompFicha/Fecha">Nombre de quien completa la ficha y Fecha</label><input type="text" class="form-control" name="NomCompFicha/Fecha" placeholder=""></div>

		<h3>Motivo de Consulta</h3>	

		<div class="form-group"><label for="p21">¿Por qué solicita la evaluación? ¿Algún profesional / institución deriva para evaluación?</label><input type="text" class="form-control" name="p21" placeholder=""></div>

		<div class="form-group"><label for="p22">¿Qué expectativas tiene respecto al proceso de evaluación? (Ej: Determinar diagnóstico, recibir apoyos profesionales, acceder a escolaridad especializada, recibir orientación familiar, etc.)</label><input type="text" class="form-control" name="p22" placeholder=""></div>

		<div class="form-group"><label for="p23">¿Qué tipo de dificultad presenta actualmente su hijo/a? Por favor poner especial atención respecto de su desarrollo social, desarrollo del lenguaje, flexibilidad y adaptación al cambio, movimiento intereses o juegos peculiares.</label><input type="text" class="form-control" name="p23" placeholder=""></div>

		<div class="form-group"><label for="p24">¿Se le han realizado otras evaluaciones profesionales o examenes médios? </label><input type="text" class="form-control" name="p24" placeholder=""></div>

		<div class="form-group"><label for="p25">¿Tiene actualmente un profesional / médico tratante? Indique especialidad y frecuencia.</label><input type="text" class="form-control" name="" placeholder="p25"></div>

		<h3>Contexto Familiar</h3>

		<div class="form-group"><label for="p31">¿Quiénes integran su familia y qué ocupaciones tienen?</label><input type="text" class="form-control" name="p31" placeholder=""></div>

		<div class="form-group"><label for="p32">¿Existen antecedentes de enfermedades importantes en su familia?, ¿Cuáles? (Indique enfermedades médicas y/o psicológicas)</label><input type="text" class="form-control" name="p32" placeholder=""></div>

		<h3>Antecedentes relevantes</h3>

		<div class="form-group"><label for="p41">¿Cómo fue el desarrollo del embarazo? (edad al momento del embarazo, situaciones relevantes durante el mismo, enfermedades, accidentes, uso de medicamentos).</label><input type="text" class="form-control" name="p41" placeholder=""></div>

		<div class="form-group"><label for="p42">¿Con cuántas semanas de gestación nació su hijo(a)?</label><input type="text" class="form-control" name="p42" placeholder=""></div>

		<div class="form-group"><label for="p43">¿Cómo fue el parto? (parto normal o cesárea, inducción del parto, fórceps). </label><input type="text" class="form-control" name="p43" placeholder=""></div>

		<div class="form-group"><label for="p44">¿Cómo transcurrió el primer ano de vida de su hijo/a? (datos relevantes, salud, medicamentos)</label><input type="text" class="form-control" name="p44" placeholder=""></div>

		<div class="form-group"><label for="p45">Su hijo/a ¿Ha tenido o tiene enfermedades relevantes? Especifique enfermedad, medicamento y dosis. </label><input type="text" class="form-control" name="p45" placeholder=""></div>

		<h3>Desarrollo Evolutivo</h3>

		<div class="form-group"><label for="p51">Marcha, edad de adquisición y posterior evolución.</label><input type="text" class="form-control" name="p51" placeholder=""></div>
		
		<div class="form-group"><label for="p52">Control de esfínter diurno y nocturno, edad de adquisición y posterior evolución.</label><input type="text" class="form-control" name="p52" placeholder=""></div>

		<div class="form-group"><label for="p53">Habilidades motrices gruesas, ejemplo: coordinación para trasladarse, correr, hacer deportes, etc.</label><input type="text" class="form-control" name="p53" placeholder=""></div>
		
		<div class="form-group"><label for="p54">Habilidades motrices finas, ejemplo: tomar el lápiz, manejar los cubiertos, etc.</label><input type="text" class="form-control" name="p54" placeholder=""></div>

		<div class="form-group"><label for="p55">Adquisición del lenguaje. Senale si el desarrollo del lenguaje ha sido normal, rápido o con dificultades.</label><input type="text" class="form-control" name="p55" placeholder=""></div>

		<div class="form-group"><label for="p56">¿Qué dificultades ha presentado en el ámbito del lenguaje? (comprensión, expresión, etc.)</label><input type="text" class="form-control" name="p56" placeholder=""></div>
		
		<div class="form-group"><label for="p57">Desarrollo social ¿Cómo se relaciona su hijo/a con personas adultas?</label><input type="text" class="form-control" name="p57" placeholder=""></div>

		<div class="form-group"><label for="p58">Desarrollo social ¿Cómo se relaciona su hijo/a con otros ninos?</label><input type="text" class="form-control" name="p58" placeholder=""></div>
		
		<div class="form-group"><label for="p59">¿Qué tan autónomo/a es para las siguientes actividades? Marque a continuación</label><input type="text" class="form-control" name="p59" placeholder=""></div>

		<div class="form-group"><label for="p510">¿Cuáles son sus hábitos alimenticios? ¿Qué alimentos prefiere? ¿Amplio repertorio o restringido?</label><input type="text" class="form-control" name="p510" placeholder=""></div>

		<h3>Ambito Conductual</h3>

		<div class="form-group"><label for="p61">¿Cómo manifiesta sus emociones? (de manera adecuada, exagerada, poco atingente al contexto)</label><input type="text" class="form-control" name="p61" placeholder=""></div>
		<div class="form-group"><label for="p62">¿Cómo manifiesta la frustración? ¿Es muy irritable? ¿Hace pataletas?, ¿En qué momentos y con quién aparecen las pataletas?</label><input type="text" class="form-control" name="p62" placeholder=""></div>
		<div class="form-group"><label for="p63">¿Es flexible en cuanto a las actividades o tiene rutinas? (ej. prefiere mantener ciertas actividades en algún orden determinado) ¿Cuáles?</label><input type="text" class="form-control" name="p63" placeholder=""></div>
		<div class="form-group"><label for="p64">¿Tiene intereses claros por algunos objetos o actividades? Reitera en ellos de manera normal o exagerada?</label><input type="text" class="form-control" name="p64" placeholder=""></div>
		<div class="form-group"><label for="p65">¿Tiene miedos muy intensos? Cuáles.</label><input type="text" class="form-control" name="p65" placeholder=""></div>
		<div class="form-group"><label for="p66">¿Cómo son sus hábitos de sueno?</label><input type="text" class="form-control" name="p66" placeholder=""></div>

		<h3>Historia Escolar</h3>
		
		<div class="form-group"><label for="p71"> Inicio de escolaridad (ano y establecimiento) </label><input type="text" class="form-control" name="p71" placeholder=""></div>
		<div class="form-group"><label for="p72">Otros establecimientos posteriores (ano y lugar)</label><input type="text" class="form-control" name="p72" placeholder=""></div>
		<div class="form-group"><label for="p73">Establecimiento actual</label><input type="text" class="form-control" name="p73" placeholder=""></div>
		<div class="form-group"><label for="p74">Nivel / Curso actual</label><input type="text" class="form-control" name="p74" placeholder=""></div>
		<div class="form-group"><label for="p75">Repitencias</label><input type="text" class="form-control" name="p75" placeholder=""></div>
		<div class="form-group"><label for="p76">Comentarios, observaciones o inquietudes que quiera manifestar. </label><input type="text" class="form-control" name="p76" placeholder=""></div>


		<button type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; " class="btn btn-primary">Enviar</button>
</form>
@endsection
