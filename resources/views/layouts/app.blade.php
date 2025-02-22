<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Proyecto Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>  {{-- El <body> está AQUÍ --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        </nav>

    <div class="container">  {{-- Contenedor principal para el contenido --}}
        @yield('content')  {{-- Aquí se insertará el contenido de las vistas --}}
    </div>

</body>
</html>