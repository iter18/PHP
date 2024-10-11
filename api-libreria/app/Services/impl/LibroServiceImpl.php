<?php

namespace App\Services\impl;

use App\Repositories\impl\LibroRepositoryImpl;
use App\Services\LibroService;

class LibroServiceImpl implements LibroService
{

    //inyectamos el repository
    protected $libroRepository;

    /**
     * Create a new class instance.
     */
    public function __construct(LibroRepositoryImpl $libroRepository)
    {
        //
        $this->libroRepository = $libroRepository;
    }

    public function getAllProducts()
    {

        return $this->libroRepository->getAllProducts();
    }
}
