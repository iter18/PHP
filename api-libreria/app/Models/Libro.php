<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    //Mapear campos de tabla que persistiran, como tiene el nombre del campo en la tabla 
    protected $fillable = [
        'lib_titulo',
        'lib_clave_autor',
        'lib_genero',
        'lib_fecha_publicacion',
        'lib_isbn',
        'lib_editorial',
        'lib_num_paginas',
        'lib_descripcion',
        'lib_baja',
        'lib_foto',
    ];

    // Los atributos que deben estar ocultos para cuando se necesiten en cualquier pasrte del programa o en el json final
    protected $hidden = [];

    // Los tipos de datos que deben ser tratados como fecha
    protected $dates = [
        'lib_fecha_publicacion'
    ];
}
