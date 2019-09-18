@extends('admin.template.mainadmin')
@section('titulo','Caracteristicas')
@section('titulopag','Nueva Caracteristica')
@section('content')
	{!! Form::open(['route'=>'admin.caracteristicas.store','method'=> 'POST']) !!}
		<div class="form-group">
			<label for="tipe">Tipo de Caracteristicas:</label>
			<input type="text" name="tipo" placeholder="Example: Peso, Volumen, Longitud, Voltaje, etc.." class="form-control"  required/>
		</div>
		<div class="form-group">
			<label for="name">Descripcion la Caracteristica:</label>
			<input type="text" name="descripcion" placeholder="Example: 250kg, 250v, 1000mt3" class="form-control" />
		</div>
		<div class="form-group">
			<input type="submit" value="Guardar" class="btn btn-primary" />
		</div>
	{!! Form::close() !!}
@endsection