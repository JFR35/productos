<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resources([
    'categorias' => CategoriaController::class,
    'productos' => ProductoController::class,
]);