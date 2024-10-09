<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroControllerSinAuxiliar;

//Route::get('/user', function (Request $request) {
//  return $request->user();
//})->middleware('auth:sanctum');

//forma 1 de declarar endpoints, método directos GET,PUT,POST,DELETE,ETC. y con la ventaja de nombres propios end point

Route::get('/products', [LibroControllerSinAuxiliar::class, 'listaProductos']);
