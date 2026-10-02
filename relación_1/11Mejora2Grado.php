<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 - Pablo González González</title>
</head>
<body>
    <h1>Mejora de la ecuación de 2 grado</h1>
    
    <?php
    // Variables de prueba (puedes cambiarlas para comprobar los distintos ifs)
    $a = 0;
    $b = 5;
    $c = -10;

    echo "<h3>Ecuación: {$a}x² + {$b}x + {$c} = 0</h3>";

    // 1. Si a es 0: Ecuación de primer grado
    if ($a == 0) {
        $x = -$c / $b;
        echo "<p>Como a=0, es una ecuación de primer grado. <br>";
        echo "La única raíz es: <b>x = $x</b></p>";
    } 
    // 2. Si b es 0: Despeje directo
    elseif ($b == 0) {
        $x1 = -sqrt(-$c / $a);
        $x2 = sqrt(-$c / $a);
        echo "<p>Como b=0, calculamos directamente la raíz. <br>";
        echo "Las raíces son: <b>x1 = $x1</b> y <b>x2 = $x2</b></p>";
    } 
    // 3. Si c es 0: Factor común
    elseif ($c == 0) {
        $x1 = 0;
        $x2 = -$b / $a;
        echo "<p>Como c=0, sacamos factor común. <br>";
        echo "Las raíces son: <b>x1 = $x1</b> y <b>x2 = $x2</b></p>";
    } 
    // 4. Si a, b y c son distintos de 0: Fórmula general
    else {
        // Asumo que ya tenías la fórmula general del ejercicio anterior
        $discriminante = ($b ** 2) - (4 * $a * $c);
        
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        
        echo "<p>Ecuación completa. Usando la fórmula general: <br>";
        echo "Las raíces son: <b>x1 = $x1</b> y <b>x2 = $x2</b></p>";
    }
    ?>
    
</body>
</html>