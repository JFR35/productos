@extends('layouts.app')

@section('content')
    <h1>Lista de Productos</h1>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre_producto }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>{{ $producto->categoria->nombre_categoria ?? 'Sin categoría' }}</td>
                            <td>
                                <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre_producto }}" class="img-thumbnail" width="100">
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No hay productos disponibles.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection