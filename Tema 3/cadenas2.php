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
                echo  $saludo. trim($nombre, '/'), "<br>";
                //2
                echo strlen($nombre), "<br>";
                //3
                echo strtoupper($nombre), "<br>";
                //4
                echo strtolower($nombre), "<br>";
            } else {
                echo $saludo . 'Mario';
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
                echo "no existe ese parametro" , "<br>";
            }

            //6
            echo substr_count($nombre, "e"), "<br>";
            //7
            $pos = stripos($nombre, 'a');

            if ($nombre !== false) {
                echo "Se encontró 'a' en '$nombre' en la posición $pos", "<br>";
            }

            //8
            $nombreSustituido = str_ireplace('o', '0', $nombre);

            echo $nombreSustituido;
        ?>
    </body>
</html>