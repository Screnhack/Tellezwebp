@extends('admin.template.main')
@section('estilo')
@endsection
@section('content')
<div class="agile_inner_banner_info">
    <div class="banner-w3lstext agileits-w3layouts">
        <ol class="breadcrumb">
            <li><a href="/">INICIO</a></li>
            <li class="active">POLITICAS</li>
        </ol>
    </div>
</div>

<div class="container" style="margin-bottom: 15px;">
    <div class="col-sm-12">
        <center>
            <a href="javascript:mostrarPoliticas();" class="btn-papers" id="politicasSeguridad"><i class="fa fa-users"></i><br>Politicas de Seguridad</a>
            <a href="javascript:mostrarPoliticas();" class="btn-papers" id="politicas2"><i class="fa fa-road"></i><br>Habeas Data</a>
            <a href="javascript:mostrarPoliticas();" class="btn-papers" id="politicas3"><i class="fa fa-list-alt"></i><br>Politicas de Seguridad</a>
            <a href="javascript:mostrarPoliticas();" class="btn-papers" id="politicas3"><i class="fa fa-list-alt"></i><br>Politicas de Seguridad</a>
        </center>
    </div>		
</div>
<button id="btnModalPoliticas" class="btn btn-primary" data-toggle="modal" href="#politics" style="display:none"></button>
<div id="politics" class="modal fade bs-example-modal-lg"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" id="cerrarModalComprobante" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h5 class="modal-title" id="myModalLabel">politicas de Seguridad</h5>
            </div>
            <div class="modal-body">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12 form-group" id="visorPoliticas" style="display: flex; align-items: center; justify-content: center;"></div>
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
<script>
    function mostrarPoliticas() {
        $("#btnModalPoliticas").click();
        var object = "<iframe style=\"height:600px;width:800px;\" src='{{asset('plugins/Documents/POLITICA-SEGURIDAD.pdf')}}'></iframe>";
        $("#visorPoliticas").html(object);
    }
</script>
@endsection