@extends('layout')

@section('contenido')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Error</title>
</head>
<body>
	<p>Error - Pagina no encontrada</p>
	<a href="{{ route('home') }}">Regresar</a>
</body>
</html>
@stop