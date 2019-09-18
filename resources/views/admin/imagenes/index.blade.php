@extends('admin.template.mainadmin')
@section('titulo','Imagenes')
@section('titulopag','Lista de Imagenes')
@section('content')
{!!Form::open(['route'=>'admin.imagenes.index','method' => 'GET', 'class' => 'navbar-form pull-right'])!!}
	<div class="input-group">
		{!!Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Buscar Imagen..', 'aria-describedby' => 'search'])!!}
		<span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>
	</div>
{!!Form::close()!!}
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre Imagen</th>
			<th>Articulo</th>
			<th>Descripcion</th>
		</thead>
		<tbody>
			@foreach($imagenes as $imagen)
			<tr>
				<td> {{ $imagen->id }} </td>
				<td> {{ $imagen->nombre }} </td>
				<td> {{ $imagen->articulo->nombre}}</td>
				<td><a href="javascript:cargaimg('{{ asset ('plugins/images/productos/'.$imagen->nombre)}}','{{$imagen->nombre}}')" class="btn btn-warning" onclick=""><span class="glyphicon glyphicon-camera"></span>
				</a>
				<a href="{{route('admin.imagenes.edit', $imagen->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<button id="btnModalImageProductos" class="btn btn-primary" data-toggle="modal" href="#images-products" style="display:none"></button>
	<div id="images-products" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content" >
	            <div class="modal-body" align="center">  
	               <button type="button" style="font-size: 20px;" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-close"></span></button>
	              <img  id='imgmodal' style="width:70%; height: 70%;"   alt="">
	            </div>
	        </div>
	    </div>
	</div>
<!--	<div class="modales">
		<div class="imagenmodal">
			<div class="contimg">
				<button type="button" onclick="javascript:cerrarimg()" style="font-size: 50px; color: #fff;" class="close">&times;</button>
				<img id='imgmodal' src="" alt="">
			</div>
		</div>
	</div>-->
	<div class="text-center">
		{!!$imagenes->render()!!}
	</div>
@endsection
@section('modalimg')
	<script>
		function cargaimg(imagmda,nombre){
			console.log(nombre);
			 console.log(imagmda);
			$("#btnModalImageProductos").click();
			$('#imgmodal').attr('src',imagmda);
			//$('.modales').slideDown('slow');
		}
		function cerrarimg(){
			//$('.modales').slideUp('fast');
		}
	</script>
@endsection