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
            $fechaActual = new DateTime();
            echo "Fecha y hora actuales: " . $fechaActual->format('d-m-Y H:i:s') . "<br>";
     
            // 2
            $zonaHoraria = new DateTimeZone('Europe/Madrid');
            $fechaZonaHoraria = new DateTime('now', $zonaHoraria);
            echo "Zona horaria: " . $fechaZonaHoraria->getTimezone()->getName() . "<br>";

            // 3
            $fechaActualPara45Dias = new DateTime();
            $fechaDentroDe45Dias = $fechaActualPara45Dias->add(new DateInterval('P45D'));
            echo "La fecha dentro de 45 días será: " . $fechaDentroDe45Dias->format('d/m/Y') . "<br>";

            // 4
            $fechaEnero = new DateTime(date('Y') . '-01-01');
            $intervaloDesdeEnero = $fechaActual->diff($fechaEnero);
            echo "El número de días que han pasado desde el (01-01-2024) es de : " . $intervaloDesdeEnero->days . " días. <br>";

            // 5
            $zonaHorariaNewYork = new DateTimeZone('America/new_York');
            $fechaNuevaYork = new DateTime('now', $zonaHorariaNewYork);
            echo "La fecha y hora actual de Nueva York es: " . $fechaNuevaYork->format('d/m/Y H:i:s') . "<br>";

            // 6
            $fecha1Enero = new DateTime('2024-01-01');

            echo "El (01-01-2024) era: " . $fecha1Enero->format('l');
        ?>
    </body>
</html>