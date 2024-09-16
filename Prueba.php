<?php
    $saludo = "Hola ";
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Desarrollo Web en Entorno Cliente</title>
    </head>
    <body>
        <?php
            $nombre = $_GET['id'];

            echo $saludo . $nombre;
        ?>
    </body>
</html>