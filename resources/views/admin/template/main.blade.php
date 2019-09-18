<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Comercial Téllez S.A.S | Cúcuta</title>
        <!--Icono de la pagina -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset ('plugins/images/iconos/favicon.ico')}}">

        <!-- metas para poder volver la pagina responsive -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="keywords" content="Ferreterías, Contruccion,  Industrial, herramientas" />
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" /> 

        <!--estilos de la pagina -->
        <link href="{{asset('plugins/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!--estilos propios-->
        <!--<link rel="stylesheet" href="{{asset('plugins/css/style.css')}}" type="text/css" media="all" />-->
        <link rel="stylesheet" href="{{asset('plugins/css/style.css')}}" type="text/css" media="all" />
        <!-- //font-awesome icons -->
        @yield('estilo')
        <link rel="stylesheet" href="{{asset('plugins/css/font-awesome.css')}}">
        <link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('plugins/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/css/lightslider.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/css/owl.theme.default.min.css')}}">
    </head>  
    <body>
        <header class="">
            @include('admin.template.parcial.header2')
        </header>
        @yield('content')
        <footer>
            @include('admin.template.parcial.footer')
        </footer>
        <!--Chat de facebook-->
        <section class="chat-container">
            <div class="chat-button"><span class="fa fa-wechat"></span> Chatea con Nosotros</div>
            <div class="chat-content">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=messages&width=300&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="300" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </section>



        <!--Script de la pagina-->
        <script type="application/x-javascript"> 
            addEventListener("load", function() { 
            setTimeout(hideURLbar, 0); },
            false); 
            function hideURLbar(){
            window.scrollTo(0,1); 
            } 
        </script>

        <script src="{{asset('plugins/js/jquery-2.2.3.min.js')}}"></script>
        <script src="{{asset('plugins/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('plugins/js/lightslider.min.js')}}"></script>
        <script>
$(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('header').addClass('header2');
        } else {
            $('header').removeClass('header2');
        }
    });
});
$(".submenu").click(function () {
    $(this).children("ul").slideToggle();
});
        </script>
        @yield('jquerys')
        <script src="{{asset ('plugins/js/bootstrap.js')}}"></script>
        @yield('chat')
        <script type="text/javascript">
            /* repetido*/
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
                $(".chat-button").click(function (e) {
                    e.preventDefault();
                    $(".chat-content").slideToggle("fast");
                })
            });
        </script>
        <script src="{{asset('plugins/js/jquery.flexisel.js')}}"></script>
        @yield('flexisel')
        <script src="{{asset('plugins/js/responsiveslides.min.js')}}"></script>
        <script src="{{asset ('plugins/js/jquery.wmuSlider.js')}}"></script>
        @yield('wmuSlider')
        <script src="{{asset('plugins/js/jquery.flexslider.js')}}"></script>
        @yield('flexslider')
        <script src="{{asset('plugins/js/jarallax.js')}}"></script>
        <script src="{{asset('plugins/js/SmoothScroll.min.js')}}"></script>
        <script type="text/javascript">
            /* init Jarallax */
            $('.jarallax').jarallax({
                speed: 0.5,
                imgWidth: 1366,
                imgHeight: 768
            })
        </script>
        <script src="{{asset('plugins/js/move-top.js')}}"></script>
        <script src="{{asset('plugins/js/easing.js')}}"></script>


    </body>
</html>