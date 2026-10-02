<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 - Pablo González González</title>
</head>
<body>
    <h1>Divisores de un número</h1>

    <?php 
    $numero = 10; // Lo ponemos nosotros 

    // Comprobamos que sea entero y mayor que cero
    if (is_int($numero) && $numero > 0) {
        echo "<p>Divisores de $numero:</p>";
        
        // Bucle for desde el 1 hasta nuestro número
        for ($i = 1; $i <= $numero; $i++) {
            // Si el resto de dividirlo es 0, significa que es divisor
            if ($numero % $i == 0) {
                // Lo pintamos de rojo y en negrita
                echo "<span style='color: red; font-weight: bold;'>$i </span>";
            } else {
                // Si no es divisor, lo sacamos normal, sin color
                echo "<span>$i </span>";
            }
        }
    } else {
        echo "<p>El número introducido no es un entero positivo válido.</p>";
    }
    ?>

</body>
</html>