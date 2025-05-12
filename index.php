<?php
// index.php

// Configuración inicial
date_default_timezone_set('America/Bogota');
session_start();

// Variables del sitio
$titulo = "Proyecto de Transmisión de Datos: Análisis de la Población Mundial, Mortalidad Infantil y Esperanza de Vida";
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
            <a href="https://app.powerbi.com/groups/me/reports/3b3124c2-b798-42a3-9b2f-1eae1cd9d696/ReportSection8a60e6ad7e9c19755dfa?experience=power-bi" class="boton">Ir a visualización de datos</a>
        </section>

        <section class="conclusiones">
            <h2>Conclusiones del Análisis</h2>
            <ul>
                <li>A menor esperanza de vida, mayor es la mortalidad infantil, siendo el continente africano el más afectado por esta tendencia.</li>
                <li>Angola representa el país más afectado, ya que su esperanza de vida promedio es de 56 años y una mortalidad infantil de 191 por cada 1000 decesos.</li>
                <li>El país menos afectado es Mónaco, perteneciente al continente europeo, con una esperanza de vida promedio de 89 años y una mortalidad infantil de 5 por cada 1000 decesos.</li>
            </ul>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> - Proyecto de Transmisión de Datos</p>
        </div>
    </footer>
</body>
</html>

