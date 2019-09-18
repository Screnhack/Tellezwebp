<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset ('plugins/images/iconos/favicon.ico')}}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('titulo') | Panel de Gestión  </title>

        <link href="{{asset('plugins/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('plugins/css/stilosnew.css')}}">
        <!-- MetisMenu CSS -->
        <link href="{{asset('plugins/css/sb-admin-2.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('plugins/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
    </head>

    <body>

        <div id="wrapper">
            <header>
                @include('admin.template.parcial.headerad')
            </header>

            <div id="page-wrapper"><br>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('titulopag')</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    @include('flash::message')
                    @yield('content')
                </div>
                <!-- /.row -->
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
            <button id="btnModalManual" class="btn btn-primary" data-toggle="modal" href="#modalManual" style="display:none"></button>
            <div id="modalManual" class="modal fade bs-example-modal-lg"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" id="cerrarModalManual" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h5 class="modal-title" id="myModalLabel">Manual de Usuario</h5>
                        </div>
                        <div class="modal-body">
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12 form-group" id="visorManual" style="display: flex; align-items: center; justify-content: center;"></div>
                                </div>
                                <br>
                            </div>
                            <br>
                        </div>
                        <div class="modal-footer">
                            <!--<a id="prueba"  download="ComprobantedePago.pdf" >
                                <button  type="button" class="btn btn-primary" id="">Descargar</button>
                            </a>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset('plugins/js/js/jquery.min.js')}}"></script>
        <script>
            $('div.alert').not('.alert-important').delay(3000).fadeOut(300);
            function mostrarManual(){
                $("#btnModalManual").click();
                var object = "<iframe style=\"height:600px;width:800px;\" src='{{asset('plugins/Documents/Manualdeusuario.pdf')}}'></iframe>";
                $("#visorManual").html(object);
            }
        </script>
        @yield('modalimg')
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('plugins/js/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('plugins/js/js/metisMenu.min.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('plugins/js/js/sb-admin-2.min.js')}}"></script>

        <script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>

        <script src="{{asset('plugins/multifile-master/jquery.MultiFile.js')}}"></script>
        @yield('javas')



    </body>

</html>
