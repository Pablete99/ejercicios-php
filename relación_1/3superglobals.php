<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Pablo González González</title>
</head>
<body>
    <h1>Superglobales y lectura de \$_SERVER</h1>

    <h2>Valores de la superglobal \$_SERVER</h2>
    <ul>
        <?php
        // Creamos un array con las claves que nos pide el enunciado para recorrerlas fácilmente.
        $clavesSolicitadas = [
            'DOCUMENT_ROOT',
            'PHP_SELF',
            'SERVER_NAME',
            'SERVER_SOFTWARE',
            'SERVER_PROTOCOL',
            'HTTP_HOST',
            'HTTP_USER_AGENT',
            'REMOTE_ADDR',
            'REMOTE_PORT',
            'SCRIPT_FILENAME',
            'REQUEST_URI'
        ];

        // Recorremos las claves e imprimimos su valor. 
        // Usamos el operador ?? '' por si alguna clave no está definida en el servidor actual.
        foreach ($clavesSolicitadas as $clave) {
            $valor = $_SERVER[$clave] ?? 'No disponible';
            echo "<li><strong>$clave:</strong> $valor</li>";
        }
        ?>
    </ul>

    <hr>

    <h2>Diferencia entre var_dump() y print_r()</h2>

    <h3>Volcado con print_r(\$_SERVER)</h3>
    <pre>
    <?php print_r($_SERVER); ?>
    </pre>

    <h3>Volcado con var_dump(\$_SERVER)</h3>
    <pre>
    <?php var_dump($_SERVER); ?>
    </pre>

    <div style="background-color: #f4f4f4; padding: 10px; border-left: 4px solid #007bff;">
        <p><strong>Diferencia principal:</strong></p>
        <ul>
            <li><code>print_r()</code> muestra la estructura de forma limpia y legible para humanos (solo claves y valores).</li>
            <li><code>var_dump()</code> da mucha más información de depuración (debug): muestra los tipos de datos (string, int, array...), el número de elementos y la longitud exacta de cada cadena de texto.</li>
        </ul>
    </div>

</body>
</html>