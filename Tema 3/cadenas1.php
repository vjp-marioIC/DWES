<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Cadenas 1</title>
    </head>
    <body>
        <?php
            //1
            $nombre = 'anaMArial';

            //2
            echo $nombre, "<br>";

            //3
            echo strlen($nombre), "<br>";

            //4
            echo strtoupper($nombre) , "<br>";
        
            //5
            echo strtolower($nombre) , "<br>";

            //6
            echo substr_count($nombre, "A") , "<br>";

            //7 muestra el codgio ascci de la primera letra del nombre
            echo ord(), "<br>";
            
            

            //8 muestra la posicion de la primera a existante en el nombre sea mayuscula o minuscula , si no hay nunguna mostrará -1
            //9 lo mismo pero con a última a.
            //10
            //11
            //12
            //13
        ?>
    </body>
</html>