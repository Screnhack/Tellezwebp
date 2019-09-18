
<div class="row">
    <div class="jarallax">
        <div class="header">
            <div class="header-left">
                <div class="information">
                    <p class="cabecera"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> PBX: (7)5888777<!-- telefono -->
                        <i class="fa fa-map-marker" aria-hidden="true"></i> AV. 8 Nº. 12 - 62 Principal,Cúcuta-Colombia <!-- direccion -->
                        <i class="fa fa-envelope" aria-hidden="true"></i> Servicioalcliente@comercialtellez.com
                    </p> <!-- direccion -->
                </div>
            </div>
        </div>
        <div class="navegable">
            <div class="top-nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <a href="/" ><img class="logoemp" src="{{asset('plugins/images/LogTellez.png') }}"></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li><a href="/" class="linea-centro ">INICIO</a></li>
                                <li><a href="/nosotros" class="linea-centro">NOSOTROS</a></li>
                                <li><a href="/customers" class="linea-centro">CLIENTES</a></li>
                                <li class="dropdown">
                                    <a href="/" class="dropdown-toggle linea-centro" data-toggle="dropdown">CATALOGO <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="submenu-items">
                                                <ul class="multi-column-dropdown agile_short_dropdown">  
                                                    @foreach($categorias as $categoria)
                                                    <li><a href="{{route('catalogo.productos', $categoria->id)}}">{{$categoria->nombre}}</a></li>
                                                    @endforeach                                                  
                                                    <li><a href="#">Tejas y tanques</a></li>
                                                    <li><a href="#">Cementos</a></li>
                                                    <li><a href="#">Porcelánicos y cerámicos</a></li>
                                                    <li><a href="#">Tuberías y accesorios metálicos</a></li>
                                                    <li><a href="#">Paneles construcción liviana</a></li>

                                                </ul>
                                            </div>
                                            <div class="submenu-items">
                                                <ul class="multi-column-dropdown agile_short_dropdown">
                                                    <li><a href="#">Aluminio</a></li>
                                                    <li><a href="#">Válvulas, registros y cheques</a></li>
                                                    <li><a href="#">Griferías</a></li>
                                                    <li><a href="#">Pinturas</a></li>
                                                    <li><a href="#">Herramientas</a></li>
                                                    <li><a href="#">Alambres y puntillas</a></li>
                                                    <li><a href="#">Otros</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </ul> 
                                </li>
                                <li><a href="/contacts" class="linea-centro">CONTACTO</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
            <ul class="agileinfo-social-grids">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>