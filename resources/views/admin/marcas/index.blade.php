@extends('admin.template.mainadmin')
@section('titulo','Marcas')
@section('titulopag','Lista de Marcas')
@section('content')
	{!!Form::open(['route'=>'admin.marcas.index','method' => 'GET', 'class' => 'navbar-form pull-right'])!!}
			<div class="input-group">
				{!!Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Buscar Marca..', 'aria-describedby' => 'search'])!!}
				<span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>
			</div>
	{!!Form::close()!!}
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped ">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($marcas as $marca)
				<tr>
					<td>{{$marca->id}}</td>
					<td>{{$marca->nombre}}</td>
					<td><a href="{{route('admin.marcas.edit',$marca->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
				<a href="{{ route('admin.marcas.destroy',$marca->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!!$marcas->render()!!}
	</div>
	</div>
</div>
	
@endsection