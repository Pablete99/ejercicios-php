<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 - Pablo González</title>
</head>
<body>
    <h1>Calificador de Notas</h1>
    
    <?php
    // Variable con la nota 
    $nota = 7; 

    echo "<p>La nota introducida es: <b>$nota</b></p>";
    echo "<p>Tu calificación es: <b>";

    // Empezamos la cadena de if / elseif
    if ($nota >= 1 && $nota <= 4) {
        echo "Insuficiente";
    } 
    elseif ($nota == 5) {
        echo "Suficiente";
    } 
    elseif ($nota == 6) {
        echo "Bien";
    } 
    elseif ($nota == 7 || $nota == 8) {
        // Aquí he usado un OR (||), pero también serviría ($nota >= 7 && $nota <= 8)
        echo "Notable";
    } 
    elseif ($nota == 9 || $nota == 10) {
        echo "Sobresaliente";
    } 
    else {
        // Es una buena práctica poner un else por si meten un 11 o un -3
        echo "Error: La nota debe estar entre 1 y 10";
    }

    echo "</b></p>";
    ?>
    
</body>
</html>