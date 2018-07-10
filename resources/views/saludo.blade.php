@extends('layout')


@section('contenido')

	<h1>Saludos por interpolacion {{ $nombre }}</h1>
	{{ $script }}
	{!! $script !!}

	Mensaje de consolas
	<br>
	<ul>
	@forelse($consolas as $consola)
		<li>{{ $consola }}</li>
	@empty
		<p>No hay consolas :(</p>
	@endforelse
	</ul>
	@if(count($consolas) === 1)
		<p>Solo tienes una consola</p>
	@elseif(count($consolas) > 1)
		<p>Tienes más de una consola</p>
	@else
		<p>No tienes ninguna consola</p>
	@endif

@stop