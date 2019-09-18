@extends('admin.template.main')
@section('content')
<div class="agile_inner_banner_info">
    <div class="banner-w3lstext agileits-w3layouts">
        <ol class="breadcrumb">
            <li><a href="/">INICIO</a></li>
            <li class="active">CONTACTO</li>
        </ol>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="agileits-title">
            <h3>Contacto</h3>
            <div class="heading-underline">
                <div class="h-u1"></div>
                <div class="h-u2"></div>
                <div class="h-u3"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="map-pos" style="padding-bottom: 40px;">
            <div class="col-xs-6 col-sm-3 address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Principal </h5>
                    <p>AV. 8 Nº. 12 - 62 CÚCUTA-COLOMBIA </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-xs-6 col-sm-3 address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Bodega</h5>
                    <p>AV. 7 CLL 15N-76 ZONA INDUSTRIAL  </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-xs-6 col-sm-3 address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Correo</h5>
                    <p><a href="mailto:info@example.com">Servicioalciente<br>@comercialtellez.com</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-xs-6 col-sm-3 address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Teléfono</h5>
                    <p>(7)5888777</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="col-sm-6 mapa">
            <!-- map -->
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.107553112675!2d-72.50871228512938!3d7.883814894320233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e66459c92b448df%3A0xca7a260b6e19ed54!2sAv.+8+%2312-62%2C+C%C3%BAcuta%2C+Norte+de+Santander%2C+Colombia!5e0!3m2!1ses!2sin!4v1503957654211" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- //map -->
        <!-- correo -->
        <div class="col-sm-6 contacto">
            <form action="enviar.php" method="GET">
                <div class="contact-left">
                    <input type="text" name="nombre" placeholder="Nombre" required />
                    <input type="email" name="correo" placeholder="Su Correo" required />
                    <input type="text" name="asunto" placeholder="Asunto" required />
                    <input type="text" name="telefono" placeholder="Teléfono" required />
                </div>
                <div class="contact-right">
                    <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                    <input type="submit" value="Enviar"  onclick="correo_enviado()">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <!-- //correo -->
    </div>
</div>
<br><br>
@endsection
@section('chat')
<script type="text/javascript">
    // eventos javascript
    function correo_enviado()
    {   if (enviar.php != null) {
            alert("correo enviado")
        }
    }
</script>
@endsection