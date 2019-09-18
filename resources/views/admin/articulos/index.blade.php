@extends('admin.template.mainadmin')
@section('titulo','Articulos')
@section('titulopag','Lista de articulos')
@section('content')
{!!Form::open(['route'=>'admin.articulos.index','method' => 'GET', 'class' => 'navbar-form pull-right'])!!}
	<div class="input-group">
		{!!Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Buscar Articulo..', 'aria-describedby' => 'search'])!!}
		<span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>
	</div>
{!!Form::close()!!}
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Grupo</th>
			<th>Marca</th>
			<th>Lineas</th>
			<th>&nbsp;</th>
		</thead>
		<tbody>
			@foreach($articulos as $articulo)
			<tr>
				<td> {{ $articulo->id }} </td>
				<td> {{ $articulo->nombre }} </td>
				<td> {{ $articulo->categoria->nombre }}</td>
				<td> {{ $articulo->marca->nombre }}</td>
				<td> @foreach($articulo->lineas as $linea)
						{{ $linea->nombre }}, 
					@endforeach
				</td>	
				<td><a href="{{route('admin.articulos.edit', $articulo->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
				<a href="{{route('admin.articulos.destroy', $articulo->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
			</tr>
			@endforeach
		</tbody>
		</table>
		<div class="text-center">
			{!!$articulos->render()!!}
		</div>
	</div>
</div>
@endsection