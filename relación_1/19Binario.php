<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Pablo González González</title>
</head>
<body>
    <h1>Convertir Decimal a Binario</h1>

    <?php 
    $decimal = 13; // El número que vamos a pasar a binario
    $temporal = $decimal; // Usamos una variable temporal para no machacar el original
    $restos = []; // Creamos un array vacío para ir metiendo los restos (los ceros y unos)

    if (is_int($decimal) && $decimal >= 0) {
        
        if ($decimal == 0) {
            // Si es cero, no hay mucho que calcular
            array_push($restos, 0);
        } else {
            // Vamos dividiendo hasta que nos quedemos a cero
            while ($temporal > 0) {
                $modulo = $temporal % 2;
                array_push($restos, $modulo); // Guardamos el 0 o el 1 en el array
                
                // Actualizamos el número con la división ENTERA
                $temporal = intdiv($temporal, 2); 
            }
        }

        // El algoritmo saca el binario del revés, así que le damos la vuelta al array
        $restos_invertidos = array_reverse($restos);
        
        // implode() junta todos los elementos de un array en un String (como el .join() de Java/JS)
        $binario = implode("", $restos_invertidos);

        echo "<p>El número decimal $decimal en binario es: <strong>$binario</strong></p>";

    } else {
        echo "<p>El número no es correcto (debe ser entero y >= 0).</p>";
    }
    ?>

</body>
</html>