<?php
$saludo = "Hola ";
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Mario Iglesias Capa">
        <title>Desarrollo Web en Entorno Cliente</title>
    </head>

    <body>
        <?php
            //1 CREA UNA VARIABLE LLAMADA NOMBRE E INICIALIZARLA CON EL VALOR "anaMarial".
            $nombre = 'anaMArial';

            //2 MÚESTRALA POR PANTALLA.
            echo "Nombre: " . $nombre, "<br>";

            //3 MUESTRA POR PANTALLA LA LONGITUD DE LA VARIABLE NOMBRE. (FUNCIÓN STRLEN)
            echo "Longitud de la variable nombre: " . strlen($nombre), "<br>";

            //4 MUESTRA LA VARIABLE NOMBRE CON SU CONTENIDO TODO EN MAYÚSCULA (FUNCIÓN strtouper)
            echo "Nombre en mayúsculas: " . strtoupper($nombre), "<br>";

            //5 MUESTRA LA VARIABLE NOMBRE CON SU CONTENIDO TODO EN MINÚSCULA (FUNCIÓN strtolower)
            echo "Nombre en min´suculas: " . strtolower($nombre), "<br>";

            //6 MUESTRA EL NÚMERO DE VECES QUE APARECE LA LETRA A (MAYÚSCULA O MINÚSCULA)
            echo "Número de veces que aparece la letra (a): " . substr_count(strtolower($nombre), 'a'), "<br>";

            //7 MUESTRA EL CÓDIGO ASCCI DE LA PRIMERA LETRA DEL NOMBRE
            echo "Código ascci de la primera letra: " . ord($nombre[0]), "<br>";

            //8 MUESTRA LA POSICIÓN DE LA PRIMERA A EN EL NOMBRE (SEA MAYÚSCULA O MINÚSCULA). SI NO HAY NINGUNA MOSTRARÁ -1.
            // BUSCO LA PRIMERA POSCIÓN QUE CONTENGA UNA (A - a)
            $posicionPrimeraA = stripos($nombre, 'a');

            //SI (posicionPrimeraA) = FALSE MUESTRO -1, SI NO MUESTRO LA POSICIÓN
            if ($posicionPrimeraA === false) {
                echo -1;
            } else {
                echo "La posición de la primera (a) es: " . $posicionPrimeraA;
            }

            echo "<br>";

            //9 LO MISMO PERO CON LA ÚLTIMA A
            // BUSCO LA ÚLTIMA POSCIÓN QUE CONTENGA UNA (A - a)
            $posicionUltimaA = strripos($nombre, 'a');

            //SI (posicionUltimaA) = FALSE RETORNO -1, SI NO MUESTRO LA POSICIÓN
            if ($posicionUltimaA === false) {
                echo -1;
            } else {
                echo "La posición de la última (a) es: " . $posicionUltimaA;
            }

            echo "<br>";

            //10 MUSTRA EL NOMBRE SUSTITUYENDO LAS LETRAS A POR EL NÚMERO CEO (SEA MAYÚSCULA O MINÚSCULA)
            $nombreSustituido = str_ireplace('a', '0', $nombre);
            echo "Nombre sustituido: " . $nombreSustituido, "<br>";

            //11 INDICA SI EL NOMBRE COMIENZA POR "al" O NO.
            if (stripos($nombre, 'al') === 0) {
                echo "El nombre comienza por 'al'";
            } else {
                echo "El nombre no comienza por 'al'";
            }

            echo "<br>";

            //12 ELIMINA LOS ESPACIO DEL PRINCIPIO Y EL FINAL DEL NOMBRE SI LOS HUBIERA Y MUESTRA EL RESULTADO POR PANTALLA.
            $nombreSinEspacios = trim($nombre);
            echo "Nombre sin espacios: " . $nombreSinEspacios, "<br>";

            //13 MUESTRA LA VARIABLE NOMBRE CON LA PRIMERA LETRA EN MAYÚSCULA Y LAS DEMÁS EN MINÚSCULAS.
            $nombrePrimeraMayuscula = ucfirst(strtolower($nombre));
            echo "Nombre con la primera letra en mayuscula: " . $nombrePrimeraMayuscula, "<br>";
        ?>
    </body>
</html>