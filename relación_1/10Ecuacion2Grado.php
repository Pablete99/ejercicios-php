<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 - Pablo González González</title>
</head>
<body>
    <h1>Ecuación de 2º Grado</h1>
    
    <?php
    // 1. Establecer las variables A, B y C
    $a = 1; 
    $b = -5;
    $c = 6;

    echo "<p>Resolviendo la ecuación: <strong>{$a}x² + {$b}x + {$c} = 0</strong></p>";

    // 2. Comprobar que a no sea 0 (para que sea de segundo grado)
    if ($a == 0) {
        echo "<p>El valor de 'a' no puede ser 0 en una ecuación de segundo grado.</p>";
    } else {
        // 3. Calcular el discriminante (b al cuadrado menos 4ac)
        $discriminante = ($b ** 2) - (4 * $a * $c);

        // 4. El if/else para comprobar si los números son reales
        if ($discriminante >= 0) {
            // Si es positivo o cero, calculamos la raíz y las soluciones
            $raiz = sqrt($discriminante);
            $x1 = (-$b + $raiz) / (2 * $a);
            $x2 = (-$b - $raiz) / (2 * $a);

            echo "<p><strong>Resultados reales encontrados:</strong></p>";
            echo "<ul>";
            echo "<li>x1 = $x1</li>";
            echo "<li>x2 = $x2</li>";
            echo "</ul>";
        } else {
            // Si es negativo, la raíz sería imaginaria
            echo "<p>La ecuación no tiene soluciones reales (el discriminante es menor que 0).</p>";
        }
    }
    ?>
</body>
</html>1