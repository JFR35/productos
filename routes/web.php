<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('categorias', CategoriaController::class)->names([
    'index' => 'categorias.index',
    'show' => 'categorias.show',
    'create' => 'categorias.create',
    'store' => 'categorias.store',
    'update' => 'categorias.update',
    'destroy' => 'categorias.destroy',
]);

Route::resource('productos', ProductoController::class)->names([
    'index' => 'productos.index',
    'show' => 'productos.show',
    'create' => 'productos.create',
    'store' => 'productos.store',
    'update' => 'productos.update',
    'destroy' => 'productos.destroy',
]);