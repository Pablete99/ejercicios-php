<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Pablo González González</title>
    <style>
        /* Estilos CSS sencillos para la tabla */
        table {
            border-collapse: collapse;
            width: 300px;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #2c3e50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Array asociativo constante, bucle foreach y tablas HTML</h1>

    <?php
    // Declaramos el array asociativo constante: Clave = Día, Valor = Temperatura (float)
    define('TEMPERATURAS', [
        'Lunes'     => 22.5,
        'Martes'    => 24.0,
        'Miércoles' => 21.8,
        'Jueves'    => 25.3,
        'Viernes'   => 26.1,
        'Sábado'    => 27.5,
        'Domingo'   => 23.0
    ]);

    // 1. Temperatura del primer día
    // Para arrays asociativos podemos acceder directamente por su clave 'Lunes'
    echo "<p>La temperatura del primer día (Lunes) es: <strong>" . TEMPERATURAS['Lunes'] . " ºC</strong></p>";

    // Variable acumuladora para sumar las temperaturas
    $sumaTemperaturas = 0;

    // 2. Mostrar todas las temperaturas secuencialmente
    echo "<h3>Temperaturas secuenciales:</h3><p>";
    foreach (TEMPERATURAS as $dia => $temp) {
        echo "$dia: $temp ºC | ";
        $sumaTemperaturas += $temp; // Acumulación con +=
    }
    echo "</p>";

    // 3. Lo mismo en formato de lista numerada (<ol>)
    echo "<h3>Temperaturas en lista numerada:</h3>";
    echo "<ol>";
    foreach (TEMPERATURAS as $dia => $temp) {
        echo "<li><strong>$dia:</strong> $temp ºC</li>";
    }
    echo "</ol>";

    // 4. Salida formateada en forma de Tabla HTML
    echo "<h3>Temperaturas en forma de tabla:</h3>";
    echo "<table>";
    echo "<thead><tr><th>Día</th><th>Temp. Máxima (ºC)</th></tr></thead>";
    echo "<tbody>";

    foreach (TEMPERATURAS as $dia => $temp) {
        echo "<tr>";
        echo "<td>$dia</td>";
        echo "<td>" . number_format($temp, 1) . " ºC</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    // Cálculo adicional del promedio para aprovechar el acumulador
    $media = $sumaTemperaturas / count(TEMPERATURAS);
    echo "<p><em>Temperatura media de la semana: <strong>" . number_format($media, 2) . " ºC</strong></em></p>";
    ?>

</body>
</html>