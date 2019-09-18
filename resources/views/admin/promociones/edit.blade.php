@extends('admin.template.mainadmin')
@section('titulo','Promociones')
@section('titulopag','Modificar Promoción')
@section('content')
{!! Form::open(['route'=>['admin.promociones.update',$promocion],'method'=> 'PUT','files'=> 'true']) !!}
<div class="row">
    <div class="form-group col-md-3">
        <label for="name">Nombre de la Promoción:</label>
        <input type="text" name="nombre" value="{{$promocion->nombre}}" placeholder="" class="form-control" required/>
    </div>
    <div class="form-group col-md-3">
        {!!Form::label('articulo_id','Producto')!!}
        {!!Form::select('articulo_id',$articulos,$promocion->articulo->id,['class'=>'form-control select-cat', 'placeholder'=>'Seleccione un Articulo' , 'required'])!!}
    </div>
    <div class="form-group col-md-2">
        <label for="porcentaje" >Descuento Promoción:</label>
        <div class="input-group col-sm-12">
            <input type="text" name="porcentaje" id="porcentaje" value="{{$promocion->porcentaje}}" placeholder="Ejemplo: 10% 20%" max-lenght="2" class="form-control" required/>
            <span class="borders-right input-group-addon btn btn-primary">%</span>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-8">
            {!!Form::label('descripcion','Descripcion de la Promoción:')!!}
            {!!Form::textarea('descripcion',$promocion->descripcion,['class'=>'form-control'])!!}
        </div>
    </div>

</div>
<div class="row">
    <div class="form-group col-md-2">
        <input type="submit" style="margin-top: -5px;" value="Guardar" class="btn btn-primary" />
    </div>
</div>
{!! Form::close() !!}
@endsection