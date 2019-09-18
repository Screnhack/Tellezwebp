@extends('admin.template.mainadmin')
@section('titulo','Lineas')
@section('titulopag','Lista de Lineas')
@section('content')
{!!Form::open(['route'=>'admin.marcas.index','method' => 'GET', 'class' => 'navbar-form pull-right'])!!}
	<div class="input-group">
		{!!Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Buscar Linea..', 'aria-describedby' => 'search'])!!}
		<span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>
	</div>
{!!Form::close()!!}
<div class="row">

	<div class="col-md-6">
		<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre Linea</th>
				<th>Descripcion</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($lineas as $linea)
			<tr>
				<td> {{ $linea->id }} </td>
				<td> {{ $linea->nombre }} </td>
				<td> {{ $linea->descripcion}} </td>
				<td><a href="{{route('admin.lineas.edit', $linea->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
				<a href="{{route('admin.lineas.destroy', $linea->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
		<div class="text-center">
		{!!$lineas->render()!!}
		</div>
	</div>
</div>
	
@endsection