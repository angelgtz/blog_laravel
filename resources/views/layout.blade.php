<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
		.active {
			text-decoration: none;
			color: green;
		}

		.error{
			color: red;
			font-size: 12px;
		}
	</style>
	<title>Mi Sitio</title>
</head>
<body>
	<header>
		<h1>{{ request()->is('/') ? "Estas en el home" : "No estas en el home" }}</h1>
		<h1>{{ request()->url() }}</h1>
		<?php
	 		function activeMenu($url){
	 			return request()->is($url) ? 'active' : '';
	 		}
		?>
		<nav>
			<a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
			<a class="{{ activeMenu('saludos/*') }}" href="{{ route('saludos', 'AngelG') }}">Saludos</a>
			<!-- <a class="{{ activeMenu('Hello') }}" href="{{ route('contactos') }}">Contactos</a> -->
			<a class="{{ activeMenu('mensaje/create') }}" href="{{ route('mensajes.create') }}">Contactos 2</a>
			<a class="{{ activeMenu('mensaje') }}" href="{{ route('mensajes.index') }}">Mensajes</a>
		</nav>
	</header>
	@yield('contenido')
	<br>
	<footer>Copyright {{ date('Y') }}</footer>
</body>