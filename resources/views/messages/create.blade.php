@extends('layout')

@section('contenido')

<div class="container">
	<div class="col-md-4">
		<h1>Contacto</h1>
		@if(session() ->has('info'))
		<h3>{{ session('info') }}</h3>
		@else
		<h3>Escribeme</h3>
		<form method="post" action="{{ route('mensajes.store') }}">
			{!! csrf_field() !!}
			<p>
				<label>Nombre</label>
				<input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
				{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
			</p>
			<p>
				<label>Email</label>
				<input class="form-control" type="text" name="email" value="{{ old('email') }}">
				{!! $errors->first('email','<span class=error>:message</span>') !!}
			</p>
			<p>
				<label>Mensaje</label>
				<textarea class="form-control" name="mensaje">{{ old('mensaje') }}</textarea>
				{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
			</p>
			<button class="btn btn-primary" type="submit">Enviar</button>
		</form>
		<br>
		@endif	
	</div>
	<hr>
</div>
@stop