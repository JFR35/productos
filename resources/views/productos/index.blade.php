@extends('layouts.app')

@section('content')

    <!-- Formulario de búsqueda -->
    <form action="{{ route('productos.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" placeholder="Buscar productos..." value="{{ $query ?? '' }}" class="form-control form-control-lg" aria-label="Buscar producto">
            <button type="submit" class="btn btn-primary btn-lg">Buscar Producto</button>
        </div>
    </form>

    <!-- Productos -->
    <div class="row">
        @forelse ($productos as $producto)
            <div class="col-md-4 mb-4"> <!-- Cambiado de col-md-6 a col-md-4 para mostrar 3 cards por fila -->
                <div class="card">
                    <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre_producto }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre_producto }}</h5>
                        <p class="card-text">{{ \Str::limit($producto->descripcion, 60) }}</p>
                        <p class="card-text"><strong>{{ number_format($producto->precio, 2, ',', '.') }}€</strong></p>
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info btn-sm">Más detalles</a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm">Añadir al carrito</a>
                    <!--
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    -->
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No hay productos disponibles.</p>
            </div>
        @endforelse
    </div>

@endsection
