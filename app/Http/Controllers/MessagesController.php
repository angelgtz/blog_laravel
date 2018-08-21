<?php

namespace App\Http\Controllers;

use DB;
use Carbon\carbon;
use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    function __construct(){
        $this->middleware('auth',['except'=>['create', 'store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Inicio
        //$mensajes = DB::table('messages')->get();
        $mensajes = Message::all();

        return view('messages.index', compact('mensajes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mensaje de retorno
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Almacena los datos
        //return 'Guardar y Redireccionar';

        /* ---- Este metodo es por Query Builder---

        DB::table('messages')->insert([
            "nombre" => $request->input('nombre'),
            "email" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        */

        //dd($request->all());

        Message::create($request->all());

        return redirect()->route('mensajes.create')->with('info', 'Hemos recibido tu mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$mensaje = DB::table('messages')->where('id', $id)->first(); //Query Builder
        $mensaje = Message::findOrFail($id);
        return view('messages.show', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$mensaje = DB::table('messages')->where('id', $id)->first(); //Query Builder
        $mensaje = Message::findOrFail($id);
        return view('messages.edit', compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Editar y redireccionar
        /*
        DB::table('messages')->where('id', $id)->update([ //Query Builder
            "nombre" => $request->input('nombre'),
            "email" => $request->input("email"),
            "mensaje" => $request->input("mensaje"),
            "updated_at" => Carbon::now()
        ]);
        */

        Message::findOrFail($id)->update($request->all());

        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //DB::table('messages')->where('id', $id)->delete(); //Query Builder

        Message::findOrFail($id)->delete();

        return redirect()->route('mensajes.index');
    }
}
