<?php

namespace App\Repositories\impl;

use App\Repositories\LibroRepository;
use App\Models\Libro;

class LibroRepositoryImpl implements LibroRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllProducts()
    {

        $librosList = Libro::all();
        return $librosList;
    }
}
