
<html>
	<table>
		<thead>
			<tr>
			<th>Id</th>
			<th>Reporte</th>
			</tr>
		</thead>
		@foreach($citas as $cita)
		<tr>
		<td> {{$cita->idCitas}} </td>
		<td> {{$cita->reporte}} </td>
		</tr>
		@endforeach
	</table>
</html>


