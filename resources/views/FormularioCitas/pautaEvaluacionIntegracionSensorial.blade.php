@extends ('layouts.admin')
@section('nombrePagina')
  Evaluación | Integración Sensorial
@endsection

@section('contenido')
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">

          <form class="form-horizontal col-md-4" align="center" method='get' action='GenerarInformeCoEvaluacion' target="_blank">
            <?php echo "<input type='hidden' name='idCita' value=",$datos["idCita"],"> "?>
          <b>  <input type='submit' name='action' value='PDF informe co-evaluacion'/><br>
          </form>

            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">AQUI VA EL NOMBRE NIÑO</h4>
                </div>
                <div class="panel-body">
                    <form>

                        <p><small>Primera etapa: responda SI o NO y comente si es necesario</small> </p><br>

                        <div class="form-group">
                            <label for="SNP1">¿Evita ser tocado en la cara o quita su cabeza de cosas que se encuentran cerca de su cara?</label><br>
                                <b>SI</b><input type="radio" name="SNP1" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP1" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP1comment">
                        </div>
                        <div class="form-group">
                            <label for="SNP2">¿Se disgusta que le laven la cara o el pelo?</label><br>
                                <b>SI</b><input type="radio" name="SNP2" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP2" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP2comment">
                        </div>
                        <div class="form-group">
                            <label for="SNP3">¿Se molesta más que los otros niños cuando lo llevan al dentista para que le miren o limpien los dientes</label><br>
                                <b>SI</b><input type="radio" name="SNP3" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP3" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP3comment">
                        </div>
                        <div class="form-group">
                            <label for="SNP4">¿Le provoca más angustia que los otros niños que le corten lasuñas de las manos y pies?</label><br>
                                <b>SI</b><input type="radio" name="SNP4" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP4" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP4comment">
                        </div>
                        <div class="form-group">
                            <label for="SNP5">¿Le molesta que otras personas lo toquen, aunque sea de una manera amistosa o afectuosa, y le hace el quite a los abrazos o cualquier tipo de contacto físico con la familia y amigos?</label><br>
                                <b>SI</b><input type="radio" name="SNP5" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP5" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP5comment">
                        </div>
                        <div class="form-group">
                            <label for="SNP6">¿Muestra una curiosa variación en sus respuestas al tacto de un momento a otro?</label><br>
                                <b>SI</b><input type="radio" name="SNP6" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP6" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP6comment">
                        </div>
                        <div class="form-group">
                            <label for="SNP7">Demuestra reacciones negativas cuando lo visten a ciertos tipos o aspectos de la ropa? <small>(Por ejemplo, pantalones elasticados, largos de manga,tipo de tela, etc)</small></label><br>
                                <b>SI</b><input type="radio" name="SNP7" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP7" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP7comment">
                        </div>
                        <div class="form-group">
                            <label for="SNP8">¿Se siente más amenazado cuendo lo sorprenden por detrás o cuando no ve facilmente?</label><br>
                                <b>SI</b><input type="radio" name="SNP8" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP8" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP8comment">
                        </div>
                        <div class="form-group">
                            <label for="SNP9">¿Se angustia cuando haymucha gente al rededor?<small>(Por ejemplo, estando dentro de una multitud o parado en una fila)</small></label><br>
                                <b>SI</b><input type="radio" name="SNP9" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP9" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP9comment">
                        </div>

                        <p><small>Primera etapa: responda SI o NO y comente si es necesario</small> </p><br>

                        <div class="form-group">
                            <label for="SNP10"></label>¿Se siente más amenazado cuendo lo sorprenden por detrás o cuando no ve facilmente?<br>
                                <b>SI</b><input type="radio" name="SNP10" value="SI"><br>
                                <b>NO</b><input type="radio" name="SNP10" value="NO"><br>
                                <input type="text" class="form-control m-t-xxs" id="SNP10comment">
                        </div>

                        <p><small>Segunda etapa: Marque la oraciones que correspondan a la realidad del niño(a) </small> </p><br>

                        <div class="form-group">
                            <input type="checkbox" name="CP" value="noToleraLucesNiRuidos">No tolera luces brillantes y ruidos fuertes como las sirenas de ambulancia <br>
                            <input type="checkbox" name="CP" value="distraeRuidos">Se distrae con ruidos de fondo que otros parecen noescuchar <br>
                            <input type="checkbox" name="CP" value="MiedoColumpios">Tener un miedo exagerado a los columpios <br>
                            <input type="checkbox" name="CP" value="problemaEntenderCuerpo">Con frecuencia tener problemas para entender dónde está su cuerpo en relación a otros objetos o personas<br>
                            <input type="checkbox" name="CP" value="tropezar">Tropezar con cosas y parecer torpe <br>
                            <input type="checkbox" name="CP" value="dificultadMedirFuerza">Tener dificultad para medir la fuerza que aplica, <small>Por ejemplo, puede romper el papel al borrar, pellizcar demasiado fuerte o dejar objetos con demasiada fuerza</small> <br>
                            <input type="checkbox" name="CP" value="necesidadTocar">Tener la necesidad constante de tocar a las personas o textuaras, incluso cuando no es socialmente aceptable <br>
                            <input type="checkbox" name="CP" value="noEntenderEspacioPersonal">No entender qué es el espacio personal incluso cuando los niños de su edad ya lo entienden <br>
                            <input type="checkbox" name="CP" value="toleranciaDolor">Tener una tolerancia extremadamente alta al dolor <br>
                            <input type="checkbox" name="CP" value="noConscienteFuerza">No ser consciente de su fuerza <br>
                            <input type="checkbox" name="CP" value="serInquieto">Ser muy inquietos e incapaces de sentarse tranquilos <br>
                            <input type="checkbox" name="CP" value="gustarSaltar">Gustarles actividades como saltar, chocarse y estrellarse <br>
                            <input type="checkbox" name="CP" value="disfrutarPresion">Disfrutar de presión profunda como abraos muy apretados <br>
                            <input type="checkbox" name="CP" value="desearGiros">Desear movimientointenso y/o giratorio <br>
                            <input type="checkbox" name="CP" value="quererLancenAlAire">Querer que los lancen al aire y saltar sobre los muebles y trampolines <br>
                            <input type="checkbox" name="CP" value="inusualTemorMovimiento">Inusual temor al movimiento y a la altura que no se presenta en otros niños de su edad <br>
                            <input type="checkbox" name="CP" value="extremoAnsiedadEstarElevado">Extremo y ansiedad a estar elevado del suelo, que se evidencia al no queres subirse a los ascensores, columpios, resbalines, etc. <br>
                            <input type="checkbox" name="CP" value="extremaSensibilidadSonidos">Extrema sensibilidad a sonidos en el ambiente.<small>A veces el niño(a) no es capaz de poner atención en clases debido a un déficit en la capacidad de filtrar sonidos ambientales, y se distrae fácilmente de lo que dice el profesor</small> <br>
                            <input type="checkbox" name="CP" value="constanteBusquedaMovimiento">Constante búsqueda de movimiento. <small>Incluso a veces pareciera no marearse con movimientos rotatorios excesivos</small> <br>
                            <input type="checkbox" name="CP" value="necesidadSensacionTacto">Necesidad constante de experimentar sensaciones de tacto y propiocepción, se apoya y empuja con el cuerpo a otros niños y parece no notar sensaciones típicamente dolorosas <br>
                            <input type="checkbox" name="CP" value="torpezaMotriz">El niño(a) se muestra torpe motrizmente, a veces choca con muebles u otros niños <br>
                            <input type="checkbox" name="CP" value="apartaJuegosMotrices">Debido a esta torpeza y dificultad en la ejecución de movimientos, el niño se aparta de participar en juegosmotores consus pares <br>
                            <input type="checkbox" name="CP" value="dificultadPlanificarSecuenciaMovimientos">Presenta dificultades en planificar secuencias de movimientos o acciones para lograr sus objetivos <small>Por ejemplo, al ponerse el delantal, o trepar estructuras de juegos en el patio</small> <br>
                            <input type="checkbox" name="CP" value="seleccionaMismoJuegos">Como le resulta difícilinnovar y planificar en juegos nuevos, tiende a seleccionar los mismo juegos todos los dias <br>
                            <input type="checkbox" name="CP" value="desplomarseApoyarseMesa">Le resulta dificil al niño mantener una postura adecuada en la silla durante las clases, tendiendo a 'desplomarse' y apoyarse sobre el banco <br>
                            <input type="checkbox" name="CP" value="dificultadCoordinarMovimientos">El niñomuestra gran dificultaden coordinar movimientos corporales. Le resulta dificil coordinar ambos lados del cuerpodurante actividades bilaterales <small>Por ejemplo, andar en bicicleta, amarrarselos zapatos, recortarcon tijeras tomando el papel con la otra mano</small> <br>
                            <input type="checkbox" name="CP" value="pierdeEquilibrio">Facilmente el niño(a) pierde el equilibrio <br>
                            <input type="checkbox" name="CP" value="confusionVisoEspacial">Demuestra confusión viso-espacial <br>
                            <input type="checkbox" name="CP" value="dificilActividadesMotricidadFina">Le resulta difícil al niño(a) ejecutar actividades de motricidad fina que requiere discriminación táctil y prescisión en los movimientos. <small>por ejemplo, abrochar botones, manipular objetos muy pequeños, tomar correctamente el lápiz</small> <br>
                            <input type="checkbox" name="CP" value="noDiscriminaPresion">El niño no discrimina el nivel de presión que debe aplicar sobre el lápiz para escribir <small>(Aplica mucha presion o muy poca)</small>, al igual quecuánta presión o fuerza debe aplicar al manipular otros objetos <small>(tiente a romper las cosas fácilmente)</small> <br>
                            <input type="checkbox" name="CP" value="dificultadDiferenciarSonidos">Presenta dificultaden diferenciar sonidos <br>
                        </div>
                        <div class="form-group">
                            <label for="SNP10">Comentarios y Observaciones</label><br>

                                <input type="text" class="form-control m-t-xxs" id="comment">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
