<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Pablo González González</title>
</head>
<body>
<h1>Dos arrays asociativos paralelos</h1>
<?php
// 1. Array asociativo con la rúbrica (los pesos de cada nota)
// Los valores en este caso son porcentajes que suman 1 (1.0 = 100%)
$rubrica = [
    "inicial" => 0.10, // Vale un 10%
    "primera" => 0.20, // Vale un 20%
    "segunda" => 0.30, // Vale un 30%
    "tercera" => 0.40  // Vale un 40%
];

// 2. Array asociativo PARALELO con las notas de la persona
// Fíjate que usamos exactamente las mismas claves
$notas = [
    "inicial" => 6.0,
    "primera" => 7.5,
    "segunda" => 5.0,
    "tercera" => 8.0
];

// Variable para ir guardando la suma final
$notaFinal = 0;

echo "<h3>Desglose de notas:</h3>";

// 3. Recorremos el array de la rúbrica
// $fase tomará el valor del texto ("inicial", "primera"...)
// $peso tomará el valor numérico (0.10, 0.20...)
foreach ($rubrica as $fase => $peso) {
    
    // Usamos la clave $fase para acceder a la nota en el OTRO array
    $notaDeEstaFase = $notas[$fase];
    
    // Calculamos cuánto aporta esta nota a la nota final (nota * porcentaje)
    $valorPonderado = $notaDeEstaFase * $peso;
    
    // Lo sumamos al acumulador
    $notaFinal += $valorPonderado;
    
    // Imprimimos por pantalla lo que ocurre en cada paso para que lo veas claro
    echo "En la fase <b>$fase</b> sacó un $notaDeEstaFase (Aporta $valorPonderado puntos a la final).<br>";
}

// 4. Imprimimos el resultado final fuera del bucle
echo "<h3>Resultado:</h3>";
echo "La nota final de la persona es: <b>" . $notaFinal . "</b>";
?>


</body>
</html>