<?php
$saludo = 'Hola ';
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Cadenas 2</title>
    </head>
    <body>
        <?php
            if (isset($_GET['name'])) {
                $nombre = $_GET['name'];
                
                //1
                echo  $saludo . trim($nombre, '/'), "<br>";
                //2
                echo "Longitud del nombre: " . strlen($nombre), "<br>";
                //3
                echo "Nombre en mayúsculas: " . strtoupper($nombre), "<br>";
                //4
                echo "Nombre en minúsculas: " . strtolower($nombre), "<br>";
            } else {
                $nombre = 'Mario';

                echo $saludo . $nombre . "<br>";
            }


            //5 Dsitinguir entre mayusculas y minusculas
            if (isset($_GET['prefix'])) {
                $prefix = $_GET['prefix'];

                $incial= strpos($nombre, $prefix);

                if ($incial === false) {
                    echo "La cadena '$prefix' no fue encontrada en la cadena '$nombre'", "<br>";
                } else {
                    echo "La cadena '$prefix' fue encontrada en la cadena '$nombre'", "<br>";
                }
            } else {
                echo "No existe ese parametro" , "<br>";
            }

            //6
            echo "EL número de veces que aparece la letra 'e' es: " . substr_count($nombre, "e"), "<br>";
            //7
            $pos = stripos($nombre, 'a');

            if ($pos === false) {
                echo "No se encontró la letra 'a' en '$nombre'", "<br>";
            } else {
                echo "La letra 'a' se encontró en '$nombre' en la posición $pos", "<br>";
            }

            //8
            $nombreSustituido = str_ireplace('o', '0', $nombre);

            echo "El nombre sustituidao queda asi: " . $nombreSustituido;
        ?>
    </body>
</html>