@extends('admin.template.mainadmin')
@section('titulo','Promociones')
@section('titulopag','Nueva Promoción')
@section('content')
{!! Form::open(['route'=>'admin.promociones.store','method'=> 'POST','files'=> 'true']) !!}
<div class="container">
    <div class="row">
        <div class="form-group col-md-3">
            <label for="name">Nombre de la Promoción:</label>
            <input type="text" name="nombre" placeholder="" class="form-control" required/>
        </div>
        <div class="form-group col-md-3">
            {!!Form::label('articulo_id','Producto',['class'=>'col-sm-12'])!!}
            <div class="col-sm-12">
                {!!Form::select('articulo_id',$articulos,null,['class'=>'form-control select-cat', 'placeholder'=>'Seleccione un Articulo' , 'required'])!!}
            </div>

        </div>
        <div class="form-group col-md-2">
            <label for="porcentaje" >Descuento Promoción:</label>
            <div class="input-group col-sm-8">
                <input type="text" name="porcentaje" id="porcentaje"  placeholder="10" max-lenght="2" class="form-control" required/>
                <span class=" input-group-addon btn btn-primary">%</span>
            </div>
        </div>
        <div class="form-group col-md-8">
            {!!Form::label('descripcion','Descripcion de la Promoción:')!!}
            {!!Form::textarea('descripcion',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group col-md-8">
            {!!Form::label('imagenpromo','Imagen Promoción')!!}
            {!!Form::file('imagenpromo',['multiple','class'=>'form-control multi max-1','accept'=>"png|jpg"])!!}
        </div>
        <div class="form-group col-md-2 col-md-offset-3 pull-left">
            <input type="submit" style="margin-top: -5px;" value="Guardar" class="btn btn-primary" />
        </div>
    </div>
</div>

{!! Form::close() !!}
@endsection