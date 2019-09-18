@extends('admin.template.main')

@section('estilo')
<link rel="stylesheet" href="{{asset('plugins/css/lightbox.css')}}">
@endsection
@section('content')
<!-- /agile_inner_banner_info -->
<div class="agile_inner_banner_info">
    <div class="banner-w3lstext agileits-w3layouts">
        <ol class="breadcrumb">
            <li><a href="/">INICIO</a></li>
            <li class="active">CLIENTES</li>
        </ol>
    </div>
</div>
<!-- //agile_inner_banner_info -->
<!-- //banner -->
<!-- gallery -->
<div class="gallery">
    <div class="container">
        <div class="agileits-title">
            <h3 class="titulosazul">Nuestros clientes <span class="titulosama">son el pilar más importante</span> en la organización</h3>
            <div class="heading-underline">
                <div class="h-u1"></div>
                <div class="h-u2"></div>
                <div class="h-u3"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-xs-12 gallery-grids">
            <div class="gallery-top-grids">
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/ecopetrol.jpg') }}"/>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/bolivar.png') }}"/>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/monape.jpg') }}"/>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/FNC.png') }}"/>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="gallery-top-grids">
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/viviendas.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/sena.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/alcaldia-cucuta.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/yadel.png') }}"/>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="gallery-top-grids">
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/Hotel-Arizona.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/paisajeUrbano.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/termotecnia.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/marval.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/logo_ospinas.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/CONCONCRETO.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/gobernacionNS.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <img class="img-responsive" src="{{asset ('plugins/images/clientes/esgamo.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection