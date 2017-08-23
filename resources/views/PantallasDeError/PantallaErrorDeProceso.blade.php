@extends ('layouts.admin')


@section('contenido')



<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron well">
				<h2>
					! A ocurrido un problema ¡
				</h2>
				<p>
					Por seguridad ningún cambio se ha realizado, por favor vuelva al menú principal mediante el siguiente botón
				</p>
        <form role="form" method='get' action='Mi_menu'>
          <input type='submit' name='action' value='Volver al menu'/>
        </form>

			</div>
		</div>
	</div>
</div>


@endsection
