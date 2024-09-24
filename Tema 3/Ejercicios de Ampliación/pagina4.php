<html>

<head>
    <title>Captura de datos del form</title>
</head>

<body>

    <?php
    echo "El nombre ingresado es:";
    echo $_REQUEST['nombre'] . "<br>";

    $edad =  $_REQUEST['edad'];

    if ($edad >= 18) {
        echo "Es mayor de edad";
    } else {
        echo "Es menor de edad";
    }

    


    ?>

</body>