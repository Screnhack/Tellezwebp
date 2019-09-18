@extends('admin.template.mainadmin')
@section('titulo','Articulos')
@section('titulopag','Editar articulo '. $articulo->nombre)
@section('content')
	{!! Form::open(['route'=>['admin.articulos.update',$articulo],'method'=> 'PUT', 'files'=> 'true']) !!}
	<div class="row">
		<div class="form-group col-md-3">
			{!!Form::label('nombre','Nombre articulo')!!}
			{!!Form::text('nombre',$articulo->nombre,['class'=>'form-control','required'])!!}
		</div>
		<div class="form-group col-md-3">
			{!!Form::label('categoria_id','Grupo de Articulos')!!}
			{!!Form::select('categoria_id',$categorias,$articulo->categoria->id,['class'=>'form-control select-cat' , 'required'])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3">
			{!!Form::label('marca_id','Marcas')!!}
			{!!Form::select('marca_id',$marcas, $articulo->marca->id,['class'=>'form-control select-marca', 'required'])!!}
		</div>
		<div class="form-group col-md-3">
			{!!Form::label('linea_id','Lineas')!!}
			{!!Form::select('lineas[]',$lineas, $mislineas,['class'=>'form-control select-line' ,'multiple', 'required'])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			{!!Form::label('descripcion','Descripcion del articulo:')!!}
			{!!Form::textarea('descripcion',$articulo->descripcion,['class'=>'form-control'])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-4">
			{!!Form::submit('Guardar cambios',['class'=>'btn btn-primary'])!!}
		</div>
	</div>
	{!! Form::close() !!}
@endsection
@section('javas')
<script>
	$('.select-line').chosen({
		max_selected_options:4
	});
</script>
@endsection