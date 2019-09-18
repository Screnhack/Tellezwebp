@extends('admin.template.main')
@section('content')
<div class="contenedor">
    @foreach($articulos as $articulo)
    @if($articulo->categoria->id == $id_categoria)
    <div class="contenedorpro">
        <div class="contimg">
            @foreach($articulo->imagenes as $imagen)
            @if($imagen->identificador=='1')
            <div class="lado frente">
                <a href="{{route('catalogo.show', $articulo->id)}}"><img class=" img-responsive produc" src="{{ asset('plugins/images/productos/'. $imagen->nombre) }}" alt=""></a>
            </div>
            @endif
            @if($imagen->identificador=='2')
            <div class="lado atras">
                <a href="{{route('catalogo.show', $articulo->id)}}"><img class="img-responsive produc" src="{{ asset('plugins/images/productos/'. $imagen->nombre) }}" alt=""></a>
            </div>
            @endif
            @endforeach
        </div>
        <div class="container_des">
            <a href="{{route('catalogo.show', $articulo->id)}}">{{$articulo->nombre}}</a>
        </div>
    </div>
    @endif
    @endforeach
</div><br/>
@endsection