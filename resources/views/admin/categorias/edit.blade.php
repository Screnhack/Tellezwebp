@extends('admin.template.mainadmin')
@section('titulo','Grupo de Articulos')
@section('titulopag','Modificar Grupo'.$categoria->nombre)
@section('content')
	{!! Form::open(['route'=>['admin.categorias.update',$categoria->id],'method'=> 'PUT']) !!}
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
			<label for="name">Nombre del Grupo:</label>
			<input type="text" name="nombre" value='{{ $categoria->nombre }}' class="form-control" required />
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-9 col-md-offset-2" style="text-align: center;">
			{!!Form::label('descripcion','Descripcion del Grupo:')!!}
			{!!Form::textarea('descripcion',$categoria->descripcion,['class'=>'form-control'])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-2 col-md-offset-9">
			<input type="submit" value="Guardar Cambios" class="btn btn-primary" />
		</div>
	</div>
	{!! Form::close() !!}
@endsection