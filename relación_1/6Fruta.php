<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Pablo González González</title>
</head>
<body>
    <h1>Clase Fruta</h1>
    <?php
    // Definición de la clase Fruta
    class Fruta {
        // Atributos
        private $nombre;
        private $color;

        // Método para establecer el nombre
        public function set_name($nombre) {
            $this->nombre = $nombre;
        }

        // Método para obtener el nombre
        public function get_name() {
            return $this->nombre;
        }
    }

    // Instancia 1: Manzana
    $apple = new Fruta();
    $apple->set_name('Manzana');

    // Instancia 2: Plátano
    $banana = new Fruta();
    $banana->set_name('Plátano');

    // Mostrar los nombres por pantalla
    echo "<p>Fruta 1: " . $apple->get_name() . "</p>";
    echo "<p>Fruta 2: " . $banana->get_name() . "</p>";
    ?>
</body>
</html>