@extends('admin.template.mainadmin')
@section('titulo','Caracteristicas')
@section('titulopag','Lista de Caracteristicas')
@section('content')
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Tipo</th>
			<th>Descripcion</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($caracteristicas as $caracteristica)
			<tr>
				<td> {{ $caracteristica->id }} </td>
				<td> {{ $caracteristica->tipo }} </td>
				
					@if($caracteristica->descripcion == '')
						<td>No tiene</td>
					@else
						<td> {{$caracteristica->descripcion}} </td> 
					@endif
				
				<td><a href="{{route('admin.caracteristicas.edit', $caracteristica->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
				<a href="{{route('admin.caracteristicas.destroy', $caracteristica->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!!$caracteristicas->render()!!}
	</div>

@endsection