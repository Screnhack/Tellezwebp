@extends('admin.template.mainadmin')
@section('titulo','Caracteristicas')
@section('titulopag','Editar Caracteristica')
@section('content')
	{!! Form::open(['route'=>['admin.caracteristicas.update',$caracteristica->id],'method'=> 'PUT']) !!}
		<div class="form-group">
			<label for="name">Tipo de Caracteristicas:</label>
			<input type="text" name="tipo"  value='{{ $caracteristica->tipo }}' class="form-control"  required/>
		</div>
		<div class="form-group">
			<label for="name">Descripcion la Caracteristica:</label>
			<input type="text" name="descripcion" value='{{ $caracteristica->descripcion }}' class="form-control" />
		</div>
		<div class="form-group">
			<input type="submit" value="Guardar Cambios" class="btn btn-primary" />
		</div>
	{!! Form::close() !!}
@endsection


ALTER TABLE calidad_revista CHANGE care_id id SMALLINT NOT NULL AUTO_INCREMENT
ALTER TABLE carga_horaria CHANGE care_id id SMALLINT NOT NULL AUTO_INCREMENT
ALTER TABLE categoria_colciencias CHANGE care_id id SMALLINT NOT NULL AUTO_INCREMENT
ALTER TABLE categoria_profesor CHANGE care_id id SMALLINT NOT NULL AUTO_INCREMENT
ALTER TABLE producto_consultoria CHANGE care_id id SMALLINT NOT NULL AUTO_INCREMENT
ALTER TABLE calidad_revista CHANGE care_id id SMALLINT NOT NULL AUTO_INCREMENT
ALTER TABLE calidad_revista CHANGE care_id id SMALLINT NOT NULL AUTO_INCREMENT