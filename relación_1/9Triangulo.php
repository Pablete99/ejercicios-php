<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 - Pablo González González</title>
</head>
<body>
    <h1>Triangulo Ejercicio</h1>

    <?php
    // Variables del triángulo
    $lado1 = 10;
    $lado2 = 20;
    $lado3 = 30;

    // CONDICIONALES para comprobación
    
    // 1. ¿Son los tres lados exactamente iguales?
    if ($lado1 == $lado2 && $lado1 == $lado3) {
        echo "El triángulo es equilátero.";
    } 
    // 2. Si no lo son... ¿Son los tres lados completamente diferentes entre sí?
    // Ojo: hay que comprobar las 3 combinaciones posibles
    elseif ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3) {
        echo "El triángulo es escaleno.";
    } 
    // 3. Si no son todos iguales, ni todos distintos... por descarte hay 2 iguales.
    else {
        echo "El triángulo es isósceles.";
    }
    ?>

</body>
</html>  