 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
	
Route::get('/',['as' => 'home', 'uses' => 'PagesController@home']);//->middleware('example');
Route::get('Hello', ['as' => 'contactos', 'uses' => 'PagesController@contact']);
Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");

//Route::post('contacto', 'PagesController@mensajes');

Route::resource('mensajes','MessagesController');
/*
Route::get('mensaje',['as' => 'messages.index', 'uses' => 'MessagesController@index'] );
Route::get('mensaje/create',['as' => 'messages.create', 'uses' => 'MessagesController@create'] );
Route::post('messages',['as'=>'messages.store','uses'=>'MessagesController@store']);
Route::get('mensaje/{id}',['as' => 'messages.show', 'uses' => 'MessagesController@show']);
Route::get('mensaje/{id}/edit',['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);
Route::put('mensaje/{id}',['as' => 'messages.update', 'uses' => 'MessagesController@update']);
Route::delete('mensaje/{id}',['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);
*/

/*
Route::get('/', ['as' => 'home', function () {
    //return view('welcome');
    /*
    echo "<a href=". route('contactos') .">Contacto</a><br>";
    echo "<a href=". route('contactos') .">Contacto</a><br>";
    echo "<a href=". route('contactos') .">Contacto</a><br>";
    echo "<a href=". route('contactos') .">Contacto</a><br>";
    echo "<a href=". route('contactos') .">Contacto</a><br>";
    */
  /*  
    return view('home');
}]);
*/
/*
Route::get('Hello', ['as' => 'contactos', function(){
	return view('contactos');
}]);
*/
/*
Route::get('saludo/{nombre?}', ['as' => 'saludos', function($nombre='Invitado'){
	//return "Saludos $nombre";
	//return view('saludo', ['nombre' => $nombre]);
	//return view('saludo')->with(['nombre' => $nombre]);
	$script = "<script>alert('Problemas XSS - Cross Site Scripting!')</script>";
	$consolas = [
		'PS4',
		'Xbox One',
		'Nintendo Switch',
		'PS Vita'
	];
	return view('saludo', compact('nombre', 'script', 'consolas'));
}])->where('nombre', "[A-Za-z]+");
*/