<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 - Pablo González González</title>
</head>
<body>
    <h1>División por restas sucesivas</h1>

    <?php 
    $dividendo = 20;
    $divisor = 3;

    // Comprobaciones básicas: positivos y que el divisor no sea 0 
    if (is_int($dividendo) && is_int($divisor) && $dividendo >= 0 && $divisor > 0) {
        $cociente = 0; // Este es nuestro contador
        $resto = $dividendo; // El resto empieza siendo todo el número

        // Mientras lo que quede sea mayor o igual al divisor, podemos seguir restando
        while ($resto >= $divisor) {
            $resto = $resto - $divisor; // Acumulador de restas
            $cociente++; // Sumamos 1 al contador
        }

        echo "<p>Operación: $dividendo / $divisor</p>";
        echo "<p>Cociente: $cociente</p>";
        echo "<p>Resto: $resto</p>";
    } else {
        echo "<p>Datos inválidos. Asegúrate de poner enteros positivos y que el divisor no sea cero.</p>";
    }
    ?>

</body>
</html>