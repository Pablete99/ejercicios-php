<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 - Pablo González González</title>
</head>
<body>
    <h1>Comprobar si un número es primo</h1>
    <?php
    $numero = 29; // Número a probar

    // Un número primo debe ser entero y mayor que 1
    if ($numero <= 1) {
        echo "<p>El número $numero no es primo (debe ser mayor que 1).</p>";
    } else {
        $esPrimo = true;

        // Comprobamos divisores desde 2 hasta la raíz cuadrada del número
        for ($i = 2; $i * $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $esPrimo = false;
                break; // Si encontramos un divisor, dejamos de buscar
            }
        }

        if ($esPrimo) {
            echo "<p>El número <strong>$numero</strong> ES primo.</p>";
        } else {
            echo "<p>El número <strong>$numero</strong> NO es primo.</p>";
        }
    }
    ?>
</body>
</html>