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
            $arryOrdenado = $nombres;  
            sort($arryOrdenado);
            print_r($arryOrdenado);

            echo "<br>";
            
            //5
            $arrayInvertido = array_reverse($nombres);
            print_r($arrayInvertido);

            echo "<br>";
            
            //6
            $posicionNombre = array_search('Hugo', $nombres);
            
            if ($posicionNombre !== false) {
                echo "Valor encontrado con la clave: " . $posicionNombre . "<br>";
            } else {
                echo "Valor no encontrado" . "<br>";
            }
            
            //7
            $arrayAleatorio = $nombres;
            shuffle($arrayAleatorio);
            print_r($arrayAleatorio);
            
            //8
            foreach ($nombres as $nombre) {
                if (strpos($nombre, 'a') !== false) {
                    echo $nombre . " ";
                }
            }

            echo "<br>";

            //9
            $alumnos = [
                ['id' => 1, 'nombre' => 'Mario', 'edad' => 22],
                ['id' => 2, 'nombre' => 'Dani', 'edad' => 22],
                ['id' => 3, 'nombre' => 'Hugo', 'edad' => 21],
                ['id' => 4, 'nombre' => 'Jose', 'edad' => 21],
                ['id' => 5, 'nombre' => 'Nacho', 'edad' => 33]
            ];

            //10
            echo "<table border='1'>";
            echo "<tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th> 
                 </tr>";

            foreach ($alumnos as $alumno) {
                echo "<tr>
                        <td>{$alumno['id']}</td>
                        <td>{$alumno['nombre']}</td>
                        <td>{$alumno['edad']}</td>
                      </tr>";
            }

            echo "</table>";

            //11
            $arrySoloNombres = array_column($alumnos, 'nombre');
            print_r($arrySoloNombres);

            echo "<br>";

            //12
            $arryNumeros = [1, 2, 3 , 4, 5 , 6 , 7, 8, 9, 10];
            $arraySumaNumeros = array_sum($arryNumeros);

            echo "La suma de todos los números del array es: ";
            print_r($arraySumaNumeros);
        ?>
    </body>
</html>