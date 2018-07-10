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

    public function contact(){
    	return view('contactos');
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

    public function mensajes(CreateMessageRequest $request){
    	
    	/*
    	$this->validate($request, [
    		'nombre' => 'required',
    		'email' => 'email|required',
    		'mensaje' => 'required|min:5|max:15'
    	]);*/
    	
    	//return $request->all();
    	 /*
    	if($request->has('nombre') && !empty($request->input('nombre'))){
    		return 'Tiene nombre es: '.$request->input('nombre');
    	} else {
    		return 'No tiene nombre';
    	}
    	*/
    	
    	/*
    	return redirect()
    		->route('contactos')
    		->with('info', 'Tu mensaje ha sido enviado correctamente :)');
		*/

    	return back()->with('info', 'El mensaje se envio correctamente :)');
    }
}
 