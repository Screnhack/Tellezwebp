@extends('admin.template.mainadmin')
@section('titulo','Productos')
@section('titulopag','Nuevo Producto')
@section('content')
	{!! Form::open(['route'=>'admin.articulos.store','method'=> 'POST', 'files'=> 'true']) !!}
	<div class="row">
		<div class="form-group col-md-3">
			{!!Form::label('nombre','Nombre articulo')!!}
			{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del articulo:','required'])!!}
		</div>
		<div class="form-group col-md-3">
			{!!Form::label('categoria_id','Grupos')!!}
			{!!Form::select('categoria_id',$categorias,null,['class'=>'form-control select-cat', 'placeholder'=>'Seleccione un Grupo' , 'required'])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3">
			{!!Form::label('marca_id','Marcas')!!}
			{!!Form::select('marca_id',$marcas, null,['class'=>'form-control select-marca','placeholder'=>'Seleccione una Marca' ,'required'])!!}
		</div>
		<div class="form-group col-md-3">
			{!!Form::label('linea_id','Lineas')!!}
			{!!Form::select('lineas[]',$lineas, null,['class'=>'form-control select-line' ,'multiple', 'required'])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			{!!Form::label('descripcion','Descripcion del articulo:')!!}
			{!!Form::textarea('descripcion',null,['class'=>'form-control'])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			{!!Form::label('image','Imagenes')!!}
			{!!Form::file('images[]',['multiple','class'=>'form-control multi max-5','accept'=>"png|jpg|jpeg"])!!}
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-5">
			{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
		</div>
	</div>
	{!! Form::close() !!}
@endsection
@section('javas')
<script>
	$('.select-cat').chosen({
		placeholder_text_single: 'Seleccione un Grupo'
	});
	$('.select-marca').chosen({
		placeholder_text_single: 'Seleccione una Marca'
	});
		
	$('.select-line').chosen({
		placeholder_text_multiple: 'Seleccione un maximo de 4 lineas',
		max_selected_options:2
	});
</script>
@endsection