<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

/**
 * Controller declarando métodos de manera artesal, se pueden definir nombre personalizados para cada método
 */


class LibroControllerSinAuxiliar extends Controller
{
    /**
     * Método para obtener lista de productos
     */

    public function listaProductos()
    {

        $librosList = Libro::all();
        return response()->json($librosList, 200);
    }
}
