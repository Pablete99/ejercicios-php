<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Pablo González González</title>
</head>
<body>
    <h1>Formas de mostrar "Hello World", versión de PHP y fecha actual</h1>

    <?php
    /* 
    En este script mostramos el clásico 'Hello world' usando
    distintos formatos y etiquetas HTML embebidas en PHP.
    */

    // 1. Texto plano en HTML
    echo "Hello world";
    echo "<hr>"; // Separador visual

    // 2. Encabezado de nivel 2
    echo "<h2>Hello world</h2>";

    // 3. Párrafo con estilos CSS inline (color, tipografía, alineación)
    echo "<p style='color: #2c3e50; font-family: Arial, sans-serif; text-align: center; font-size: 18px;'>Hello world</p>";

    // 4. Salto de línea entre Hello y world usando la etiqueta <br> de HTML
    echo "Hello <br> world";
    echo "<hr>";

    // 5. Información sobre la instalación de PHP
    echo "<h3>Información del entorno PHP:</h3>";
    echo "<p>Versión actual de PHP: <strong>" . phpversion() . "</strong></p>";

    // Nota: phpinfo() imprime toda la configuración completa en HTML. 
    // Lo dejo comentado para que no rompa la maqueta de la página, pero se llamaría así:
    // phpinfo();

    // 6. Fecha y hora del sistema en el momento de ejecución
    // Establecemos la zona horaria de España para que la hora sea la correcta
    date_default_timezone_set('Europe/Madrid');
    
    // date() formateado: d = día, m = mes, Y = año (4 dígitos), H = hora (24h), i = min, s = seg
    $fechaActual = date("d/m/Y H:i:s");
    echo "<p>Fecha y hora de ejecución del servidor: <strong>$fechaActual</strong></p>";
    ?>

</body>
</html>