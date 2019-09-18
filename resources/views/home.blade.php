@extends('admin.template.main')
@section('estilo')
<link rel="stylesheet" href="{{asset('plugins/css/poposlides.css')}}">
@endsection
@section('content')
<div id="popup" class="modal fade"  >
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-body" align="center">  
                <button type="button" style="font-size: 20px;" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-close"></span></button>
                <img src="{{asset('plugins/images/popup.png')}}" style=" width:auto; height: 70%; "  alt="">
                <a href="www.youtube.com">
                    <button  type="button" class="btn opt-hud">Hagalo ud mismo</button>
                </a>     
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div id="carousel-1" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- indicadores-->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <!-- fin indicadores-->
            <!-- contenedor de los sliders-->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{asset ('plugins/images/slider/banner0.jpg') }}" class="img-responsive" alt="">
                </div>
                <div  class="item">
                    <img src="{{asset ('plugins/images/slider/banner1.jpg') }}" class="img-responsive" alt="">
                </div>
                <div  class="item">
                    <img src="{{asset ('plugins/images/slider/banner2.jpg') }}" class="img-responsive" alt="">
                </div>
                <div  class="item">
                    <img src="{{asset ('plugins/images/slider/banner4.jpg') }}" class="img-responsive" alt="">
                </div>
                <div  class="item">
                    <img src="{{asset ('plugins/images/slider/banner5.jpg') }}" class="img-responsive" alt="">
                </div>
            </div>
            <!-- fin contenedor de los sliders-->
            <!-- controles -->
            <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <br>
    <!-- Promociones -->
    @if(sizeof($promociones) >= 4)
    <div class="row">
        <div class="agileits-title">
            <h3>Promociones</h3>
            <div class="heading-underline">
                <div class="h-u1"></div>
                <div class="h-u2"></div>
                <div class="h-u3"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="carousel2">
            <div class="slideControls">
                <a class="slidePrev">
                    <span class="glyphicon glyphicon-chevron-left "></span>
                </a>
                <a class="slideNext">
                    <span class="glyphicon glyphicon-chevron-right "></span>
                </a>
            </div>
            <ul id="lightSlider">
                @foreach($promociones as $promocion)
                <li>
                    <div class="promocion">
                        <div class="fotoPromo">
                            <img src="{{asset ('plugins/images/promociones/'.$promocion->imagen)}}" class="img-responsive" alt="Promo1">
                            <span >{{$promocion->porcentaje}}%</span>
                        </div>
                        <div class="infoPromo">
                            <p><center><b>{{$promocion->nombre}}</b><br></center>{{$promocion->descripcion}}<br>	
                            </p>
                            <a href="javascript:cargaimgPromo('{{asset ('plugins/images/promociones/'.$promocion->imagen)}}','{{$promocion->nombre}}','{{$promocion->descripcion}}','{{$promocion->porcentaje}}');" class="btn btn-primary form-control"><i class="fa fa-eye"></i> Ver Oferta </a>
                            <a href="" class="btn form-control btn-yellow"><i class="fa fa-shopping-cart"></i> Llevar al Carrito </a>
                        </div>	
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
<div id="services" class="services">
    <div class="agileits-title">
        <h3>Con más de <span class="titulosama">30 años</span></h3>
        <h3>en el sector construcción</h3>
        <div class="heading-underline">
            <div class="h-u1"></div>
            <div class="h-u2"></div>
            <div class="h-u3"></div>
            <div class="clearfix"></div>
        </div>
        <p class="titulosazul" ">Comercial Téllez es una empresa <span class="titulosama" ">Norte - Santandereana</span> que contribuye al desarrollo económico y social de la región, a través de la generación de empleos.</p>
    </div>
    <div class="clearfix"> </div>
    <div class="services-row">
        <div class="col-xs-12 col-sm-5 services-left"></div>
        <div class="col-xs-12 col-sm-7 services-right">
            <h4 class="w3agile-sbtitle titulosama">CERTIFICACIÓN ISO 9001: 2015</h4>
            <p class="compleblanco">Con el ánimo de mejorar nuestros procesos, en comercial Téllez S.A.S trabajamos continuamente para mantener actualizada la certificación ISO9001:2015, aspecto importante que genera respaldo y confianza a nuestros clientes en la prestación del servicio.</p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="services-row">
        <div class="col-xs-12 col-sm-5 services-left services-left2"></div>
        <div class="col-xs-12 col-sm-7 services-right services-right2">
            <h4 class="w3agile-sbtitle titulosazul">NUESTROS CLIENTES</h4>
            <p class="compleblanco">Gracias a ellos en comercial Téllez S.A.S se incorporan nuevos productos y servicios que permiten el crecimiento empresarial. Se caracterizan por estar en el sector de la construcción y por estar siempre innovando su hacer dentro de las actividades diarias.</p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="services-row">
        <div class="col-xs-12 col-sm-5 services-left services-left3"></div>
        <div class="col-xs-12 col-sm-7 services-right">
            <h4 class="w3agile-sbtitle titulosama">PRODUCTOS Y SERVICIOS</h4>
            <p class="compleblanco">Comercial Téllez cuenta con un amplio portafolio de productos, que le permite al cliente poder encontrar todo en un solo Lugar.
                No olvide que nuestros productos cuentan con la garantía y respaldo de los proveedores.“todos los productos tienen certificado de calidad”</p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div><br>

<!-- //seccion descripcion empresa -->

<!-- welcome -->
<div class="welcome">
    <div class="container">
        <div class="agileits-title">
            <h3 class="titulosazul">Servicios</h3>
            <div class="heading-underline">
                <div class="h-u1"></div>
                <div class="h-u2"></div>
                <div class="h-u3"></div>
                <div class="clearfix"></div>
            </div>
        </div><br>
        <div class="welcomerow-agileinfo">
            <h5 class="titulosama" ">Sectores que se atienden</h5>
        </div>
        <div class="w3-welcome-grids">
            <div class="col-xs-6 col-sm-3 w3l-welcome-grid">
                <img src="{{asset('plugins/images/s2.png')}}" alt="" class="img-responsive"/>
                <div class="agileits-welcome-info">
                    <h4 class="center" >Ferreterías</h4>
                    <p class="complenegro">Empresas del sector automotriz - Metalmecánica - Agroindustrial: Ofrecemos sellantes, soldaduras, anticorrosivos, discos de corte, pegantes para vidrios y metales; Sistemas de riego y Sistema Séptico, herramienta agrícola.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 w3l-welcome-grid">
                <img src="{{asset('plugins/images/s4.jpg')}}" alt=" " class="img-responsive"/>
                <div class="agileits-welcome-info">
                    <h4 class="center" >Industria</h4>
                    <p class="complenegro" >Somos una empresa comercial, líder en Distribución a Ferreterías en Norte de Santander, Arauca, Saravena y su área de influencia, de todos los productos relacionados con el sector Ferretero, Agro-Industrial y de la Construcción.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 w3l-welcome-grid">
                <img src="{{asset('plugins/images/s3.png')}}" alt=" " class="img-responsive"/>
                <div class="agileits-welcome-info">
                    <h4 class="center" >Infraestructura </h4>
                    <p class="complenegro" >Productos como el cemento, el acero, tubería estructural, tubería para conducción de aguas y geotextiles para la construcción de vías, puentes, muros de contención, boxcolver, canales, entre otros. </p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 w3l-welcome-grid">
                <img src="{{asset('plugins/images/s1.png')}}" alt=" " class="img-responsive"/>
                <div class="agileits-welcome-info">
                    <h4 class="center" >Construcción</h4>
                    <p class="complenegro">Ofrecemos todos los productos para OBRA NEGRA Y GRIS, como cemento, agregados pétreos, Acero recto y figurado, Tubería Estructural, Tubería hidráulica, sanitaria y eléctrica, impermeabilizantes, herramientas y adhesivos.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<br>
<!-- //welcome -->

<!-- services -->
<div class="why-choose-agile">
    <div class="container">
        <div class="services-w3lsrow">
            <div class="col-xs-6 col-sm-3 services-grids">
                <i class="fa fa-truck icon" aria-hidden="true"></i>
                <h4 class="titulosama">BODEGA</h4>
                <p class="compleblanco">Nuestra bodega su bodega. Facilitamos la recepción y entrega de mercancía.</p>
            </div>
            <div class="col-xs-6 col-sm-3 services-grids">
                <i class="fa fa-group icon" aria-hidden="true"></i>
                <h4 class="titulosama">ACOMPAÑAMIENTO </h4>
                <p class="compleblanco">Estamos a su lado en todo el proceso de la obra desde el diseño hasta su culminación. Acompañamos su idea hasta volverla realidad.</p>
            </div>
            <div class="col-xs-6 col-sm-3 services-grids">
                <i class="fa fa-briefcase icon" aria-hidden="true"></i>
                <h4 class="titulosama">PORTAFOLIO</h4>
                <p class="compleblanco">Contamos con el portafolio más completo de cualquier Proyecto. Su compra a través de un servicio integral, aquí lo tenemos todo.</p>
            </div>
            <div class="col-xs-6 col-sm-3 services-grids"><!--nombre de estilo  no existe-->
                <i class="fa fa-shield icon" aria-hidden="true"></i>
                <h4 class="titulosama">ASESORIA</h4>
                <p class="compleblanco">Asesoría profesional y personalizada. Nos capacitamos, pensando en solucionar sus dudas.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //services -->
    </div>
</div><br/>
<!-- //choose-us -->
<!-- //welcome -->

<!-- blog -->
<div class="blog" id="blog">
    <div class="container">
        <div class="agileits-title">
            <h3 class="titulosazul">Nuestros proveedores</h3>
            <div class="heading-underline">
                <div class="h-u1"></div>
                <div class="h-u2"></div>
                <div class="h-u3"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="trending-ads">
            <div class="container">
                <div class="trend-ads">
                    <ul id="flexiselDemo3">
                        <li>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Grival.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Gricol.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Fibreglass.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Durman.png')}}"/>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset ('plugins/images/proveedores/Dewalt.svg')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset ('plugins/images/proveedores/Corpacero.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset ('plugins/images/proveedores/A&G.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset ('plugins/images/proveedores/Ajover.svg')}}"/>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Corona.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Challenger.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Gyplac.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Herragro.png')}}"/>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Hilti.svg')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Pizano.svg')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/log2.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Cemex.svg')}}"/>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Metecno.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/p.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Pavco.png')}}"/>
                            </div>
                            <div class="col-md-3 biseller-column">
                                <img src="{{asset('plugins/images/proveedores/Pintuflex.png')}}"/>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<button id="btnModalImagePromo" class="btn btn-primary" data-toggle="modal" href="#images-promo" style="display:none"></button>
    <div id="images-promo" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-body" align="center">  
                   <button type="button" style="font-size: 20px;" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-close"></span></button>
                   <h3 id="titulo-promo"></h3>
                  <img  id='imgmodal' style="width:70%; height: 70%;"   alt="">
                  <span id="span-promo"></span>
                  <p id="descripcion"></p>
                  <a href="" class="btn form-control btn-yellow"><i class="fa fa-shopping-cart"></i> Llevar al Carrito </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('chat')
<script>
    $(document).ready(function () {
        $('#popup').modal('show')
    });
</script>
<!-- Smartsupp Live Chat script -->
@endsection

@section('flexisel')
<script type="text/javascript">
    $(function () {
            var slider = $("#lightSlider").lightSlider({
                item: 4,
                controls: false,
                auto: true,
                loop: true,
                pauseOnHover: true,
                responsive : [
                {
                breakpoint:780,
                settings: {
                    item:4,
                    slideMove:1,
                    slideMargin:6,
                  }
                },{
                breakpoint:430,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                  }
                }]
            });
            $('.slideControls .slidePrev').click(function () {
                slider.goToPrevSlide();
            });
            $('.slideControls .slideNext').click(function () {
                slider.goToNextSlide();
            });
        $(window).load(function () {
            $("#flexiselDemo3").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint: 700,
                        visibleItems: 1
                    }
                }
            });
        });
    });
function cargaimgPromo(imagmda,nombre, descripcion, porcentaje){
    $("#btnModalImagePromo").click();
    $('#imgmodal').attr('src',imagmda);
    $('#titulo-promo').html(nombre);
    $('#descripcion').html(descripcion);
    //$('.modales').slideDown('slow');
}
</script>
@endsection






