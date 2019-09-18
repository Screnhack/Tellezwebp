@extends('admin.template.mainadmin')
@section('titulo','Promociones')
@section('titulopag','Lista de Promociones')
@section('content')
{!!Form::open(['route'=>'admin.promociones.index','method' => 'GET', 'class' => 'navbar-form pull-right'])!!}
<div class="input-group">
    {!!Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Buscar Promociones..', 'aria-describedby' => 'search'])!!}
    <span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>
</div>
{!!Form::close()!!}
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Articulo</th>
                    <th>Porcentaje</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($promociones as $promocion)
                <tr>
                    <td>{{$promocion->id}}</td>
                    <td>{{$promocion->nombre}}</td>
                    <td>{{$promocion->articulo->nombre}}</td>
                    <td>{{$promocion->porcentaje}}</td>
                    <td>{{$promocion->descripcion}}</td>
                    @if($promocion->estado == '1')
                    <td><a href="{{ route('admin.promociones.updateStatus',$promocion->id) }}" class="btn btn-success">Activo</td>
                    @else
                    <td><a href="{{ route('admin.promociones.updateStatus',$promocion->id) }}" class="btn btn-warning">Inactivo</td>
                    @endif
                    <td><a href="{{route('admin.promociones.edit',$promocion->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
                        <a href="{{ route('admin.promociones.destroy',$promocion->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!!$promociones->render()!!}
        </div>
    </div>
</div>

@endsection