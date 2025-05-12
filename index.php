<?php
// index.php

// Configuración inicial
date_default_timezone_set('America/Bogota');
session_start();

// Variables del sitio
$titulo = "Proyecto de Transmisión de Datos";
$mensaje = "Bienvenido al panel de visualización de datos transmitidos";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><?php echo $titulo; ?></h1>
        </div>
    </header>

    <main class="container">
        <section class="bienvenida">
            <p><?php echo $mensaje; ?></p>
            <p>Fecha y hora actual: <strong><?php echo date('d/m/Y H:i:s'); ?></strong></p>
        </section>

        <section class="acciones">
            <a href="pages/conexion_bd.php" class="boton">Ver conexión a la base de datos</a>
            <a href="pages/visualizacion.php" class="boton">Ir a visualización de datos</a>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> - Proyecto de Transmisión de Datos</p>
        </div>
    </footer>
</body>
</html>
