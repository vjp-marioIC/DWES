<?php
    $saludo = "Hola ";
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays 1</title>
    </head>
    <body>
        <?php
            //1
           $nombres = ['Mario', 'Dani', 'Hugo', 'Jose', 'Nacho'];

           //2
           $numElementos = count($nombres);
           echo "El número de elementos del array es: " . $numElementos . "<br>";

            //3
            $cadenaNombres = implode(' ', $nombres);
            echo $cadenaNombres . "<br>";

            //4
            $arr = $nombres;    
            sort($arr);
            print_r($arr);

            echo "<br>";
            
            //5
            $arrayInvertido = array_reverse($nombres);
            print_r($arrayInvertido);

            echo "<br>";
            
            /*
            //6
            $posicionNombre = array_search('Mario', $nombre);
            
            if ($posicionNombre !== null) {
                echo "Valor encontrado con la clave: " . $posicionNombre . "<br>";
            } else {
                echo "Valor no encontrado" . "<br>";
            }
            
            print_r($posicionNombre);
            */
            
            //7
            $arrayAleatorio = $nombres;
            shuffle($arrayAleatorio);
            print_r($arrayAleatorio);
            
            //8
            
        ?>
    </body>
</html>