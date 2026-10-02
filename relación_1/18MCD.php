<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18 - Pablo González González</title>
</head>
<body>
    <h1>Máximo Común Divisor</h1>

    <?php 
    $num1 = 54;
    $num2 = 24;

    if (is_int($num1) && is_int($num2) && $num1 > 0 && $num2 > 0) {
        $a = $num1;
        $b = $num2;

        // Mientras los números sean diferentes, seguimos restando
        while ($a != $b) {
            // Le restamos el pequeño al grande
            if ($a > $b) {
                $a = $a - $b;
            } else {
                $b = $b - $a;
            }
        }
        
        // Cuando son iguales, el bucle para y cualquiera de los dos es el MCD
        echo "<p>El MCD de $num1 y $num2 es: <strong>$a</strong></p>";
    } else {
        echo "<p>Por favor, usa enteros positivos.</p>";
    }
    ?>

</body>
</html>