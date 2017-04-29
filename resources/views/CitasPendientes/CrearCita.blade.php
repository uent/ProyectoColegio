@extends('Layout\Layout')

@section('cabecera')
<?php
#cabecera
echo "Asignacion de Citas";
?>
@endsection


@section('content1')





@endsection

@section('content2')
<p> Datos Niño <p>


  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="btn-group">

  				<button class="btn btn-default">
  					Action
  				</button>
  				<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
  					<span class="caret"></span>
  				</button>
  				<ul class="dropdown-menu">
  					<li>
  						<a href="#">Action</a>
  					</li>
  					<li class="disabled">
  						<a href="#">Another action</a>
  					</li>
  					<li class="divider">
  					</li>
  					<li>
  						<a href="#">Something else here</a>
  					</li>
  				</ul>
  			</div>
  		</div>
  	</div>
  </div>

@endsection
