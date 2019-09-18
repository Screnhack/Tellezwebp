@extends('admin.template.main')
@section('content')
<div class="container content-gale">
    <div class="row">
        <div class="col-sm-2">
            @foreach($articulo->imagenes as $imagen)
            <div class="small"><img id='imagen{{$imagen->identificador}}' class='img-responsive'  src="{{ asset ('plugins/images/productos/'. $imagen->nombre)}}" alt=""></div>
            @endforeach
        </div>
        <div class="col-sm-6">
            <div class="large">
                @foreach($articulo->imagenes as $imagen)
                @if($imagen->identificador=='1')
                <img id="imagen"  class='img-responsive' src="{{ asset ('plugins/images/productos/'.$imagen->nombre)}}" alt="">
                @endif
                @endforeach
            </div>
        </div>
        <div class="col-sm-4">
            <div class="large large2">
                <div class="descripcion">
                    <h2>{{ $articulo->nombre }}</h2>
                    <h3>Descripcion: </h3>
                    <p>{{$articulo->descripcion}}</p>
                    <h3>Grupo de Articulo: {{ $articulo->categoria->nombre }}</h3>
                    <h3>Marca:  {{$articulo->marca->nombre}}</h3>
                    <h3>Lineas:</h3>
                    @foreach($articulo->lineas as $linea)
                    <h5>{{$linea->nombre}}</h5>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><br>
@endsection
@section('jquerys')
<script>
    $(document).ready(function () {
        var original = $('#imagen').attr('src');
        var imagen1 = $('#imagen1').attr('src');
        var imagen2 = $('#imagen2').attr('src');
        var imagen3 = $('#imagen3').attr('src');
        var imagen4 = $('#imagen4').attr('src');
        var imagen5 = $('#imagen5').attr('src');

        $('#imagen2').hover(function () {
            $('#imagen').attr('src', imagen2);
        }, function () {
            $(this).attr('src', imagen2);
            $('#imagen').attr('src', original);
        });
        $('#imagen3').hover(function () {
            $('#imagen').attr('src', imagen3);
        }, function () {
            $(this).attr('src', imagen3);
            $('#imagen').attr('src', original);
        });
        $('#imagen4').hover(function () {
            $('#imagen').attr('src', imagen4);
        }, function () {
            $(this).attr('src', imagen4);
            $('#imagen').attr('src', original);
        });
        $('#imagen5').hover(function () {
            $('#imagen').attr('src', imagen5);
        }, function () {
            $(this).attr('src', imagen5);
            $('#imagen').attr('src', original);
        });
    });
</script>
@endsection