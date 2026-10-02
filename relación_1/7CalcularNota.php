<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Pablo González González</title>
</head>
<body>
    <h2>Calcula la nota final de una persona</h2>
    <?php
    // declaramos las variables a usar
    $v1 = 8.75;
    $v2 = 7.25;
    $v3 = 5;
    $sinJustificar = 5*0.25;

    // Realizamos los calculos
    $suma = $v1 + $v2;
    $resultadoNoFinal = $suma / 2;
    $resultadoFinal = $resultadoNoFinal - $sinJustificar;

    // Comprobamos la condicion y mostramos por pantalla
    if($resultadoFinal >= 5){
        echo "La nota del alumno es " .$resultadoFinal. "<br>";
        echo "El alumno esta aprobado";
    } else {
        echo "La nota del alumno es " .$resultadoFinal. "<br>";
        echo "El alumno esta suspenso";
    }
    
    
    ?>
    
</body>
</html>