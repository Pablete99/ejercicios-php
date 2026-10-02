<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20 - Pablo González González</title>
</head>
<body>
    <h1>Conversor a Binario, Octal o Hexadecimal</h1>

    <?php 
    $numero = 255; 
    $base = 16; // Ponemos nosotros la base (probar con 2, 8 o 16)
    
    $temporal = $numero;
    $resultados = [];

    // Validamos que el número sea ok y que la base sea de las permitidas
    if (is_int($numero) && $numero >= 0 && ($base == 2 || $base == 8 || $base == 16)) {
        
        if ($numero == 0) {
            array_push($resultados, "0");
        } else {
            while ($temporal > 0) {
                $resto = $temporal % $base;
                
                // Si la base es 16 y el resto es >= 10, toca poner letras
                if ($base == 16) {
                    switch ($resto) {
                        case 10: $caracter = "A"; break;
                        case 11: $caracter = "B"; break;
                        case 12: $caracter = "C"; break;
                        case 13: $caracter = "D"; break;
                        case 14: $caracter = "E"; break;
                        case 15: $caracter = "F"; break;
                        default: $caracter = (string)$resto; break; // Si es 9 o menos, se queda el número
                    }
                } else {
                    $caracter = (string)$resto; // Para bases 2 y 8 no hay letras
                }
                
                array_push($resultados, $caracter); // Metemos el carácter al array
                $temporal = intdiv($temporal, $base); // Dividimos quedándonos solo con el entero
            }
        }
        
        // Como antes, le damos la vuelta y lo juntamos todo
        $resultados = array_reverse($resultados);
        $texto_final = implode("", $resultados);
        
        echo "<p>El número $numero en base $base es: <strong>$texto_final</strong></p>";

    } else {
        echo "<p>Datos inválidos. Número >= 0 y base debe ser 2, 8 o 16.</p>";
    }
    ?>

</body>
</html>