@extends('admin.template.mainadmin')
@section('titulo','Lineas')
@section('titulopag','Modificar Linea '.$linea->nombre)
@section('content')
	{!! Form::open(['route'=>['admin.lineas.update',$linea->id],'method'=> 'PUT']) !!}
		<div class="form-group">
			<label for="name">Nombre de la Linea:</label>
			<input type="text" name="nombre" value="{{ $linea->nombre }}" class="form-control" required/>
		</div>
		<div class="form-group">
			{!!Form::label('descripcion','Descripcion de la Linea:')!!}
			{!!Form::textarea('descripcion',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			<input type="submit" value="Guardar Cambios" class="btn btn-primary" />
		</div>
	{!! Form::close() !!}
@endsection
