<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset ('plugins/images/iconos/favicon.ico')}}">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="{{asset('plugins/css/stylelogin.css')}}">
</head>
<body>
	<div class="loginbox">
		<img src="{{asset('plugins/images/avatar2.png')}}" class="avatar">
		<img src="{{asset('plugins/images/LogTellez.png')}}" class="logo" alt="logotellez">
		{!! Form::open(['route' =>'admin.auth.login', 'method' => 'POST', 'autocomplete' =>'off']) !!}
			<p>Usuario</p>
			<input type="text" name="email" placeholder="Ingrese su Usuario" required>
			<p>Contraseña</p>
			<input type="password" name="password" placeholder="Ingrese su Contraseña" required>
			<input type="submit" value="Login">
			<a href="#">Perdiste tu Contraseña... ?</a>
		{!! Form::close() !!}
	</div>
</body>
</html>