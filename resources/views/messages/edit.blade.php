@extends('layout')

@section('contenido')
	<h1>Se va a editar el mensaje de: {{ $mensaje->nombre }}</h1>
	<form method="post" action="{{ route('mensajes.update', $mensaje->id) }}">
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<p>
			<label>Nombre</label>
			<input type="text" name="nombre" value="{{ $mensaje->nombre }}">
			{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
		</p>
		<p>
			<label>Email</label>
			<input type="text" name="email" value="{{ $mensaje->email }}">
			{!! $errors->first('email','<span class=error>:message</span>') !!}
		</p>
		<p>
			<label>Mensaje</label>
			<textarea name="mensaje">{{ $mensaje->mensaje }}</textarea>
			{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
		</p>
		<button type="submit">Enviar</button>
	</form>
@stop