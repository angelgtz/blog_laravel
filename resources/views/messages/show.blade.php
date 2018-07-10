@extends('layout')

@section('contenido')
	<h1>Mensaje</h1>
	<p>El mensaje fue enviado por {{ $mensaje->nombre }} - {{ $mensaje->email }}</p>
	<p>El mensaje es: {{ $mensaje->mensaje }}</p>
@stop