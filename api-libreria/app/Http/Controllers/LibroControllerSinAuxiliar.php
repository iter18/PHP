<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Services\impl\LibroServiceImpl;

/**
 * Controller declarando métodos de manera artesal, se pueden definir nombre personalizados para cada método
 */


class LibroControllerSinAuxiliar extends Controller
{

    protected $libroService;

    public function __construct(LibroServiceImpl $libroService)
    {
        $this->libroService = $libroService;
    }
    /**
     * Método para obtener lista de productos con interacción directa con el modelo
     */
    public function listaProductos()
    {

        $librosList = Libro::all();
        return response()->json($librosList, 200);
    }

    /**
     * Método para obtener lista de productos con capas de servicio y repositorio
     */
    public function listaProductosCapas()
    {
        $librosList = $this->libroService->getAllProducts();
        return response()->json($librosList, 200);
    }
}
