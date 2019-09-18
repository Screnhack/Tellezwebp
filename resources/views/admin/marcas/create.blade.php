@extends('admin.template.mainadmin')
@section('titulo','Marcas')
@section('titulopag','Nueva Marca')
@section('content')
	{!! Form::open(['route'=>'admin.marcas.store','method'=> 'POST']) !!}
		<div class="row">
		<div class="form-group col-md-3">
			<label for="name">Nombre de la Marca:</label>
			<input type="text" name="nombre" placeholder="Nombre Marca" class="form-control" required/>
		</div>
		</div>
		<div class="row">
			<div class="form-group col-md-2">
			<input type="submit" style="margin-top: -5px;" value="Guardar" class="btn btn-primary" />
			</div>
		</div>
	{!! Form::close() !!}
@endsection