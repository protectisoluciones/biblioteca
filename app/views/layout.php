<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Sistema Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 250px;
        background-color: #343a40;
    }

    .sidebar .nav-link {
        color: #fff;
    }

    .sidebar .nav-link:hover {
        background-color: #495057;
    }

    .main-content {
        flex-grow: 1;
        padding: 20px;
        width: 100%;
    }
    </style>
</head>

<body>

<?php
    $rutaActual = basename($_SERVER['REQUEST_URI']);
    $esLoginORegistro = in_array($rutaActual, ['', 'registrar']);
?>

    <?php if (!$esLoginORegistro): ?>
    <div class="sidebar d-flex flex-column p-3 text-white">
        <h4 class="text-center text-white">📚 Biblioteca</h4>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li><a href="/usuarios" class="nav-link">👤 Usuario</a></li>
            <li><a href="/libros" class="nav-link">📖 Libro</a></li>
            <li><a href="/prestamos" class="nav-link">🔄 Préstamo</a></li>
            <li><a href="/multas" class="nav-link">💸 Multa</a></li>
        </ul>
    </div>
    <?php endif; ?>

    <div class="main-content">
        <?= $content ?? '<h1>Bienvenido al Sistema de Biblioteca</h1><p>Selecciona una opción en el menú lateral para comenzar.</p>' ?>
    </div>

</body>

</html>