<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Pablo González González</title>
</head>
<body>
    <h1>Tipos de datos escalares, var_dump() y formato con printf()</h1>

    <?php
    // Declaración de variables de tipo escalar
    $esEstudiante = true;         // Boolean (bool)
    $edad = 21;                   // Integer (int)
    $notaMedia = 8.756;           // Float / Double
    $nombre = "Pablo";            // String

    // Ejemplo de 'variables variables' ($$)
    // La variable $curso guarda el texto "modulo"
    $curso = "modulo";
    // Al usar $$, creamos dinámicamente una variable llamada $modulo
    $$curso = "Desarrollo Web en Entorno Servidor";

    echo "<h2>1. Muestra con echo simple</h2>";
    echo "<p>Nombre: $nombre | Edad: $edad | Nota: $notaMedia | Es estudiante: " . ($esEstudiante ? 'Sí' : 'No') . "</p>";
    echo "<p>Variable dinámica (\$modulo): $modulo</p>";

    echo "<h2>2. Inspección de datos con var_dump()</h2>";
    echo "<pre>"; // Usamos <pre> para que var_dump se vea ordenado en HTML
    var_dump($esEstudiante);
    var_dump($edad);
    var_dump($notaMedia);
    var_dump($nombre);
    echo "</pre>";

    echo "<h2>3. Salida formateada con printf()</h2>";
    
    // Formateo de Boolean (%d muestra 1 o 0, %s muestra cadena)
    printf("<p>Booleano como entero (%%d): %d</p>", $esEstudiante);

    // Formateo de Integer (%d decimal, %b binario, %X hexadecimal)
    printf("<p>Entero decimal (%%d): %d | En binario (%%b): %b</p>", $edad, $edad);

    // Formateo de Float (usamos %.2f para recortar a 2 decimales)
    printf("<p>Float original: %f | Redondeado a 2 decimales (%%.2f): %.2f</p>", $notaMedia, $notaMedia);

    // Formateo de String (%s para cadenas)
    printf("<p>String en mayúsculas gracias a función (%%s): %s</p>", strtoupper($nombre));
    ?>

</body>
</html>