<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        if ($query) {
            $productos = Producto::where('nombre_producto', 'LIKE', "%$query%")
                ->orWhere('descripcion', 'LIKE', "%$query%")
                ->get();
        } else {
            $productos = Producto::all();
        }

        return view('productos.index', compact('productos', 'query'));
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}
