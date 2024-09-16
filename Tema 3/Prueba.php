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
            if (isset($_GET['id'])) {
                $nombre = $_GET['id'];

                echo $saludo . $nombre;
            } else {
                echo 'Anónimo';
            }  
        ?>
    </body>
</html>