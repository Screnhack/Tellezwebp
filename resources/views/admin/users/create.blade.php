@extends('admin.template.mainadmin')
@section('titulo','Usuarios')
@section('titulopag','Nuevo Usuario')
@section('content')
@if(count($errors)> 0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif
{!! Form::open(['route'=>'admin.users.store', 'method'=> 'POST'])!!}
<div class="grid-form">
    <div class="row">
        <div class="form-group col-md-3 col-md-offset-2">
            <label for="name" class="control-label"> Nombre: </label>
            <input type="text" name="name" class="form-control" placeholder="Digite su Nombre" required/>
        </div>
        <div class="form-group col-md-3">
            <label for="email" class="control-label"> Correo Electronico: </label>
            <input type="email" name="email" class="form-control" placeholder="example@comercialtellez.com" required/>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-3 col-md-offset-2">
            <label for="Password" class="control-label"> Contaseña: </label>
            <input type="password" name="password" class="form-control" placeholder="************" required/>
        </div>
        <div class="form-group col-md-3">
            <label for="name" class="control-label"> Tipo de Usuario:</label>
            <select name="tipo" class="form-control" required>
                <option value="">Seleccione Tipo de Usuario</option>
                <option value="usuario">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
    </div>
    <div class="form-group col-md-2 col-md-offset-4" >
        <input type="submit" class=" form-control btn btn-primary"  name="reg_usuario" value="Guardar" />
    </div>
</div>
{!!Form::close()!!}
@endsection