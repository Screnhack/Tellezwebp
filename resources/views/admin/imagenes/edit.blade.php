@extends('admin.template.mainadmin')
@section('titulo','Imagenes')
@section('titulopag','Modificar Imagen'.$imagen->nombre)
@section('content')
	{!! Form::open(['route'=>['admin.imagenes.update',$imagen->id],'method'=> 'PUT', 'files'=> 'true']) !!}
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
			<label for="name">Nombre de la Imagen:</label>
			<input type="text" name="nombre" value='{{$imagen->nombre}}' class="form-control" required />
		</div>
		<div class="form-group col-md-3">
			<label for="name">Nombre del Grupo:</label>
			<input type="text" name="" value='{{$imagen->articulo->nombre}}' class="form-control" required />
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6 col-md-offset-2">
			{!!Form::label('image','Imagenes')!!}
			{!!Form::file('images',['multiple','class'=>'form-control multi max-1','accept'=>"png|jpg"])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-2 col-md-offset-6">
			<input type="submit" value="Guardar Cambios" class="btn btn-primary" />
		</div>
	</div>
	{!! Form::close() !!}
@endsection