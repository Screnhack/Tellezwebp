@extends('admin.template.mainadmin')

@section('titulo','Inicio')

@section('titulopag','Bienvenido al Panel de Administracion del Comercial Téllez S.A.S.')
@section('content')
<div>
    @if(Auth::user()->tipo == 'admin')
    <a class="boton1" href="{{route('admin.users.index')}}" >
        <i class="fa fa-user"></i>
        <h3>Usuarios</h3>
    </a>
    @endif
    <a class="boton1" href="{{route('admin.categorias.index')}}" >
        <i class="fa fa-pencil"></i>
        <h3>Grupos</h3>
    </a>
    <a class="boton1" href="{{route('admin.marcas.index')}}" >
        <i class="fa fa-inbox"></i>
        <h3>Marcas</h3>
    </a>
    <a class="boton1" href="{{route('admin.lineas.index')}}" >
        <i class="fa fa-flag"></i>
        <h3>lineas</h3>
    </a>
    <!--
    <a class="boton1" href="{{route('admin.caracteristicas.index')}}" >
            <i class="fa fa-bookmark"></i>
            <h3>Caracter..</h3>
    </a>
    -->
    <a class="boton1" href="{{route('admin.articulos.index')}}" >
        <i class="fa fa-tags"></i>
        <h3>Productos</h3>
    </a>
    <a class="boton1" href="{{route('admin.imagenes.index')}}" >
        <i class="fa fa-camera"></i>
        <h3>Imagenes</h3>
    </a>
    <a class="boton1" href="{{route('admin.imagenes.index')}}" >
        <i class="fa fa-gift"></i>
        <h3>Promociones</h3>
    </a>
    <a class="boton1" href="javascript:mostrarManual();" >
        <i class="fa fa-file"></i>
        <h3>Manual</h3>
    </a>
    <!--
            <a class="boton1" href="#" >
                    <i class="fa fa-dashboard"></i>
                    <h3>Pagina</h3>
            </a>
            <a class="boton1" href="#" >
                    <i class="fa fa-th-list"></i>
                    <h3>Nosotros</h3>
            </a>
            <a class="boton1" href="#" >
                    <i class="fa fa-group"></i>
                    <h3>Clientes</h3>
            </a>
            <a class="boton1" href="#" >
                    <i class="fa fa-commenting"></i>
                    <h3>Contacto</h3>
            </a>
    </div>
    -->

    @endsection