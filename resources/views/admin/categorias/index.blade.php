@extends('admin.template.mainadmin')
@section('titulo','Grupos de Articulos')
@section('titulopag','Lista de Grupos')
@section('content')
<div class="row">
	{!!Form::open(['route'=>'admin.categorias.index','method' => 'GET', 'class' => 'navbar-form pull-right'])!!}
			<div class="input-group">
				{!!Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Buscar Grupo..', 'aria-describedby' => 'search'])!!}
				<span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>
			</div>
	{!!Form::close()!!}
	<div class="col-md-12">
		<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>&nbsp;</th>
		</thead>
		<tbody>
			@foreach($categorias as $categoria)
			<tr>
				<td> {{ $categoria->id }} </td>
				<td> {{ $categoria->nombre }} </td>
				
					@if($categoria->descripcion == '')
						<td>No tiene</td>
					@else
						<td> {{$categoria->descripcion}} </td> 
					@endif
				
				<td><a href="{{route('admin.categorias.edit', $categoria->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
				<a href="{{route('admin.categorias.destroy', $categoria->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!!$categorias->render()!!}
	</div>
	</div>
</div>
@endsection