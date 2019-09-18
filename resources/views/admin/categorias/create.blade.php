@extends('admin.template.mainadmin')
@section('titulo','Grupo de Articulos')
@section('titulopag','Nuevo Grupo')
@section('content')
	{!! Form::open(['route'=>'admin.categorias.store','method'=> 'POST']) !!}
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
			<label for="name">Nombre del Grupo:</label>
			<input type="text" name="nombre" placeholder="Nombre Categoria" class="form-control"  required/>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-9 col-md-offset-2" style="text-align: center;">
			{!!Form::label('descripcion','Descripcion del Grupo:')!!}
			{!!Form::textarea('descripcion',null,['class'=>'form-control'])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-2 col-md-offset-9">
			<input type="submit" value="Guardar Categoria" class="btn btn-primary" />
		</div>
	</div>
	{!! Form::close() !!}
@endsection