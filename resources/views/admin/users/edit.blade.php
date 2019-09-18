@extends('admin.template.mainadmin')
@section('titulo','Usuarios')
@section('titulopag','Modificar Usuario '.$user->name)
@section('content')
{!! Form::open(['route'=>['admin.users.update',$user->id], 'method'=> 'PUT'])!!}
<div class="grid-form">
    <div class="row">
        <div class="col-md-3 form-group col-md-offset-2">
            <label for="name" class="control-label"> Nombre: </label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}" required/>
        </div>
        <div class="col-md-3 form-group">
            <label for="email"> Correo Electronico: </label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}" required/>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-3 col-md-offset-2">
            <label for="Password" class="control-label"> Contaseña: </label>
            <input type="password" name="password" class="form-control" placeholder="************" required/>
        </div>
        @if($user->tipo == 'admin' && $user->name == "admin")
        <div class="form-group col-md-3">
            <label for="name"> Tipo de Usuario:</label>
            <select name="tipo" class=" form-control" required>
                <option value="admin">Administrador</option>
            </select>
        </div>
        @else
        <div class="form-group col-md-3">
            <label for="name"> Tipo de Usuario:</label>
            <select name="tipo" class=" form-control" required>
                <option value="usuario">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        @endif

    </div>
    <div class="form-group col-md-2 col-md-offset-4">
        <input type="submit" class="form-control btn btn-primary"  name="mdf_usuario" value="Guardar Cambios" />
    </div>
</div>
{!!Form::close()!!}
@endsection