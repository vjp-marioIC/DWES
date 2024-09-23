<?php
    $saludo = "Hola ";
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Fechas 1</title>
    </head>
    <body>
        <?php
            // 1
            $fecha = new DateTime();
            echo $fecha->format('d-m-Y H:i:s');
                 
            // 2
            $zona = new DateTimeZone('Europe/Madrid'); 
            echo $zona;
     
            // 3
            $intervaloDe45Dias = new DateInterval('P45D');
            echo $intervaloDe45Dias; 

            // 4
            $fechaEnero = new DateTime('01/01/2024');
        ?>
    </body>
</html>