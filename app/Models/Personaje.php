<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    //
    protected $fillable = [
        "nombre",
        "alias",
        "estatura",
        "imagen",
        "especies",
        "genero",
        "edad",
        "vivo",
        "lugarNacimiento",
        "residencia"
    ];
}
