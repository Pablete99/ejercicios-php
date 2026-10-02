<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Pablo González González</title>
</head>
<body>
    <h1>Array constante con días de la semana y bucle for</h1>

    <?php
    // Declaramos el array constante con los días de la semana
    define('DIAS_SEMANA', [
        'Lunes',
        'Martes',
        'Miércoles',
        'Jueves',
        'Viernes',
        'Sábado',
        'Domingo'
    ]);

    // 1. Mostrar el primer día de la semana (índice 0)
    echo "<p>El primer día de la semana es: <strong>" . DIAS_SEMANA[0] . "</strong></p>";

    // Guardamos la longitud del array usando count()
    $totalDias = count(DIAS_SEMANA);

    // 2. Todos los días secuencialmente en una sola línea de texto
    echo "<h3>Días secuenciales:</h3><p>";
    for ($i = 0; $i < $totalDias; $i++) {
        echo DIAS_SEMANA[$i] . " ";
    }
    echo "</p>";

    // 3. Lo mismo pero creando una estructura de lista numerada HTML (<ol>)
    echo "<h3>Días en lista numerada (&lt;ol&gt;):</h3>";
    echo "<ol>";
    for ($i = 0; $i < $totalDias; $i++) {
        echo "<li>" . DIAS_SEMANA[$i] . "</li>";
    }
    echo "</ol>";
    ?>

</body>
</html>