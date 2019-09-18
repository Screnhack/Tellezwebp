@extends('admin.template.mainadmin')
@section('titulo','Marcas')
@section('titulopag','Modificar Marca '.$marca->nombre)
@section('content')
	{!! Form::open(['route'=>['admin.marcas.update',$marca->id],'method'=> 'PUT']) !!}
	<div class="row">
		<div class="form-group col-md-3">
			<label for="name">Nombre de la Marca:</label>
			<input type="text" name="nombre" value="{{$marca->nombre}}" class="form-control" required/>
		</div>
		<div class="form-group col-md-2">
			<input type="submit" value="Guardar Cambios" class="btn btn-primary" />
		</div>
	</div>
	{!! Form::close() !!}
@endsection