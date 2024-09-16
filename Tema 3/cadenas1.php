<?php
    //1
    $nombre = 'anaMArial';

    //2
    echo $nombre, "<br>";

    //3
    echo strlen($nombre), "<br>";

    //4
    echo strtoupper($nombre), "<br>";

    //5
    echo strtolower($nombre), "<br>";

    //6
    echo substr_count($nombre, "A"), "<br>";

    //7
    echo ord($nombre[0]), "<br>";
    
    //8
    // BUSCO LA PRIMERA POSCIÓN QUE CONTENGA UNA (A - a)
    $posicionPrimeraA = stripos($nombre, 'a');

    //SI (posicionPrimeraA) = FALSE RETORNO -1, SI NO MUESTRO LA POSICIÓN
    if ($posicionPrimeraA === false) {
        echo -1;
    } else {
        echo $posicionPrimeraA;
    }

    echo "<br>";
    
    //9
    $posicionUltimaA = strripos($nombre, 'a');

    //SI (posicionUltimaA) = FALSE RETORNO -1, SI NO MUESTRO LA POSICIÓN
    if ($posicionUltimaA === false) {
        echo -1;
    } else {
        echo $posicionUltimaA;
    }

    echo "<br>";
        
    //10
    $nombreSustituido = str_ireplace('a', '0', $nombre);
    echo $nombreSustituido, "<br>";
    
    //11
    if (stripos($nombre, 'al') === 0) {
        echo "El nombre comienza por 'al'";
    } else {
        echo "El nombre no comienza por 'al'";
    }

    echo "<br>";

    //12
    $nombreSinEspacios = trim($nombre);
    echo $nombreSinEspacios, "<br>";
        
    //13
    $nombrePrimeraMayuscula = ucfirst(strtolower($nombre));
    echo $nombrePrimeraMayuscula, "<br>";
?>