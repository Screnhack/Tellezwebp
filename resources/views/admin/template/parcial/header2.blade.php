<div class="cabezera">
    <h5><span class="fa fa-phone"></span>&nbsp;PBX: (7)5888777 <span class="fa fa-map-marker"></span>&nbsp; AV. 8 Nº. 12 - 62 Principal,Cúcuta-Colombia <span class="fa fa-inbox"></span>&nbsp;Servicioalcliente@comercialtellez.com </h5>
</div>
<div class="content-menu">
    <input type="checkbox" id="check">
    <label for="check" class="fa fa-bars icon-menu"></label>
    <nav class="menu">
        <a href="/"><img src="{{asset('plugins//images/LOGOTELLEZ.svg')}}" alt=""></a>
        <a href="#" class="redes"><span class="fa fa-instagram"></span></a>
        <a href="https://es-la.facebook.com/Comercial-Tellez-SAS-137699616253035/" target="_blank" class="redes"><span class="fa fa-facebook"></span></a>
        <a href="https://twitter.com/tellezcomercial" target="_blank" class="redes"><span class="fa fa-twitter"></span></a>
        <a href="#" class="redes"><span class="fa fa-youtube"></span></a>
        <ul class="menu2">
            <li><a href="/" class="linea-centro">INICIO</a></li>
            <li><a href="/nosotros" class="linea-centro">NOSOTROS</a></li>
            <li><a href="/customers" class="linea-centro">CLIENTES</a></li>
            <li class="submenu-">
                <a href="#" class="linea-centro">CATALOGO <span class="fa fa-chevron-down"></span></a>
                <ul>
                    <!--@foreach($categorias as $categoria)
                    <li><a  class="linea-centro" href="{{route('catalogo.productos', $categoria->id)}}" >{{$categoria->nombre}}</a></li>
                    @endforeach-->  
                </ul>
            </li>
            <li><a href="/contacts" class="linea-centro">CONTACTO</a></li>
            <li><a href="/politics" class="linea-centro">POLITICAS</a></li>
        </ul>
    </nav>
</div>