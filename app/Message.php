<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //Solo si la tabla no se llama como el modelo declaramos la variable table con el nombre de la tabla 
    //protected $table='nombre_de_la_tabla';
    protected $fillable=['nombre', 'email', 'mensaje'];
}
