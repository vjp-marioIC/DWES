<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Prueba</title>
    </head>
    <body>
        <?php
            $nombre='XX';
            $edad='XX';
            $ciudad='XX';

            if (isset($_GET['nombre']) ){
                $nombre = $_GET['nombre'];

            }
            if(isset($_GET['edad']) ){
                $edad = $_GET['edad'];

            }
            if (isset($_GET['ciudad'])) {
                $ciudad = $_GET['ciudad'];

            } 
            echo "Hola soy " . $nombre . " tengo " . $edad . " años y vivo en la ciudad de " . $ciudad . ".";
 
             
        ?>
    </body>
</html>