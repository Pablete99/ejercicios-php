<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 - Pablo González González</title>
</head>
<body>
    <h1>Factorial de un número</h1>
    <?php 
    $numero = 67;
    $resultado = 1;

    if ($numero < 0){
        echo "No se puede realixar factorial para un número menor de cero.";
    } else {
        for($i = 1; $i<=$numero; $i++){
            $resultado = $resultado * $i;
    }
    echo("El factorial de " .$numero. " es " .$resultado);
    }
?>
</body>
</html>