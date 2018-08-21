<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>Mi Sitio</title>
</head>
<body>
	<header>
	<!--
		<h1>{{ request()->is('/') ? "Estas en el home" : "No estas en el home" }}</h1>
		<h1>{{ request()->url() }}</h1>
	-->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Title</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="{{ activeMenu('/') }}"><a href="{{ route('home') }}">Inicio</a></li>
					<li class="{{ activeMenu('saludos*') }}" ><a href="{{ route('saludos', 'AngelG') }}">Saludos</a></li>
					<li class="{{ activeMenu('mensajes/create') }}"><a href="{{ route('mensajes.create') }}">Contactos</a></li>
					@if(auth()->check())
						<li class="{{ activeMenu('mensajes') }}"><a href="{{ route('mensajes.index') }}">Mensajes</a></li>
					@endif
				</ul>
				<!--
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			-->
				<ul class="nav navbar-nav navbar-right">
					@if(auth()->guest())
						<li class="{{ activeMenu('login') }}">
							<a href="{{ "/login" }}">Login</a>
						</li>
					@else
						<li>
							<a href="/logout">Cerrar Sesion de {{ auth()->user()->name }}</a>
						</li>
					@endif
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
		<?php
	 		function activeMenu($url){
	 			return request()->is($url) ? 'active' : '';
	 		}
		?>
<!--
		<nav>
			<a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
			<a class="{{ activeMenu('saludos*') }}" href="{{ route('saludos', 'AngelG') }}">Saludos</a>
			<a class="{{ activeMenu('mensajes/create') }}" href="{{ route('mensajes.create') }}">Contactos</a>
			@if(auth()->guest())
				<a class="{{ activeMenu('login') }}" href="{{ "/login" }}">Login</a>
			@endif
			@if(auth()->check())
				<a class="{{ activeMenu('mensajes') }}" href="{{ route('mensajes.index') }}">Mensajes</a>
				<a href="/logout">Cerrar Sesion de {{ auth()->user()->name }}</a>
			@endif
		</nav>
	-->
	</header>
	<div class="container">
		@yield('contenido')
		<br>
		<footer>Copyright {{ date('Y') }}</footer>
	</div>
</body>