<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 - Pablo González González</title>
</head>
<body>
    <h1>Calcula la suma de los N primeros números</h1>

    <?php 
     // Inicializamos variables necesarias para el calculo
    $n = 7;
    $acumulado = 0;
    // bucle for que haga el trabajo
    for($i = 0; $i<= $n; $i++){
        $acumulado = $acumulado + $i;
    }
    echo "Resultado " .$acumulado;
    ?>

    </body>
</html>