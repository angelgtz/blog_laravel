<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use \App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
	public function __construct(){
		$this->middleware('example', ['only' => ['home']]); //En este caso se pude usar tanto only para aplicar
															//Solo a uno o except para excluir a quien no se aplicara
	}

    public function home(){
    	return view('home');
    	//return response('Hola desde el inicio', 201, ['X-Token' => 'secret']);
    	/*
    	return response('Hola desde el inicio', 201)
    	->header('X-Token', 'Secret 1')
    	->header('X-Token-2', 'secret 2')
    	->cookie('X-cookie', 'cookie'); 
    	*/
    }

    public function saludo($nombre = 'Invitado'){
    	$script = "<script>alert('Problemas XSS - Cross Site Scripting!')</script>";
		$consolas = [
			'PS4',
			'Xbox One',
			'Nintendo Switch',
			'PS Vita'
		];
		return view('saludo', compact('nombre', 'script', 'consolas'));
    }
}
 