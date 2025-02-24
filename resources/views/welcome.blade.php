<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a Cafés y Tés</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Añadir imagen de fondo que cubra toda la pantalla */
        body {
            background-image: url('img/vistainicial.jpeg'); /* Cambia la URL por la de tu imagen */
            background-size: cover; /* Hace que la imagen cubra toda la pantalla */
            background-position: center; /* Centra la imagen */
            background-attachment: fixed; /* Mantiene la imagen fija al hacer scroll */
            height: 100vh; /* Asegura que ocupe toda la altura de la ventana */
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semitransparente */
            padding: 40px;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center content">
            <h1 class="mb-4">¡Bienvenido a la Web de Cafés y Tés!</h1>
            <p class="lead mb-4">¿Qué te gustaría hacer?</p>

            <div class="d-grid gap-2">
                <!-- Botón para usuarios registrados -->
                <a href="/login" class="btn btn-primary btn-lg">Ya estoy registrado</a>
                <!-- Botón para registro de nuevos usuarios -->
                <a href="/register" class="btn btn-success btn-lg">Me quiero registrar</a>
                <!-- Botón para ver productos sin registrarse -->
                <a href="/productos" class="btn btn-secondary btn-lg">Solo quería echar un vistazo</a>
            </div>
        </div>
    </div>

    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
