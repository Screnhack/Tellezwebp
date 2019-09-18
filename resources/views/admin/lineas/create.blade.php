@extends('admin.template.mainadmin')
@section('titulo','Lineas')
@section('titulopag','Nueva Linea')
@section('content')
	{!! Form::open(['route'=>'admin.lineas.store','method'=> 'POST']) !!}
		<div class="form-group">
			<label for="name">Nombre de la Linea:</label>
			<input type="text" name="nombre" placeholder=" Example: Ferreteria, Industrial" class="form-control" required/>
		</div>
		
		<div class="form-group">
			{!!Form::label('descripcion','Descripcion de la Linea:')!!}
			{!!Form::textarea('descripcion',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			<input type="submit" value="Guardar" class="btn btn-primary" />
		</div>
	{!! Form::close() !!}
@endsection