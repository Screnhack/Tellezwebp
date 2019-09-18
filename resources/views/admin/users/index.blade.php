@extends('admin.template.mainadmin')
@section('titulo','Usuarios')
@section('titulopag','Lista de Usuarios')
@section('content')
{!!Form::open(['route'=>'admin.users.index','method' => 'GET', 'class' => 'navbar-form pull-right'])!!}
<div class="input-group">
    {!!Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Buscar Usuario..', 'aria-describedby' => 'search'])!!}
    <span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>
</div>
{!!Form::close()!!}
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>E-mail</th>
            <th>Tipo</th>
            <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td> {{$user->id}} </td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->email}} </td>
                    <td> {{$user->tipo}} </td>
                    <td>
                        @if($user->tipo == 'admin')
                        <a href="{{route ('admin.users.edit',$user->id )}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
                        @else
                        <a href="{{route ('admin.users.edit', $user->id )}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
                        <a href="{{route ('admin.users.destroy', $user->id )}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>	
        </table>
        {!!$users->render()!!}
    </div>
</div>
@endsection