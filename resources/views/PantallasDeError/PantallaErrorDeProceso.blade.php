@extends ('layouts.admin')


@section('contenido')



<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron well">
				<h2>
					!A ocurrido un problema¡
				</h2>
				<p>
					Por seguridad ningun cambio se a realizado, por favor vuelva al menu principal mediante el siguiente boton
				</p>
        <form role="form" method='get' action='Mi_menu'>
          <input type='submit' name='action' value='Volver al menu'/>
        </form>

			</div>
		</div>
	</div>
</div>


@endsection
