<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <select name="zonaHoraria" id="zonaHoraria">
                <option value="madrid">Europa, Madrid</option>
                <option value="peru">Lima, Perú</option>
                <option value="moscu">Europa, Moscú</option>
            </select>

            <input type="submit" value="Enviar">
        </form>


        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $fecha = $_POST['zonaHoraria'];


                if ($fecha === "madrid") {
                    date_default_timezone_set('Europe/Madrid');

                    echo "Hora de: " . date_default_timezone_get() . "<br>";

                    $fechaActual = new DateTime();
                    echo "La fecha actual es: " . $fechaActual->format('d-m-Y') . "<br>";
                    echo "La hora actual es: "  . $fechaActual->format('H:i:s') . "<br>";
                } else{
                    if ($fecha === "peru") {
                        date_default_timezone_set('America/Lima');

                        echo "Hora de: " . date_default_timezone_get() . "<br>";
    
                        $fechaActual = new DateTime();
                        echo "La fecha actual es: " . $fechaActual->format('d-m-Y') . "<br>";
                        echo "La hora actual es: "  . $fechaActual->format('H:i:s') . "<br>";;
                    } else {
                        if ($fecha === "moscu") {
                            date_default_timezone_set('Europe/Moscow');

                            echo "Hora de: " . date_default_timezone_get() . "<br>";
        
                            $fechaActual = new DateTime();
                            echo "La fecha actual es: " . $fechaActual->format('d-m-Y') . "<br>";
                            echo "La hora actual es: "  . $fechaActual->format('H:i:s') . "<br>";
                        }
                    }
                }
            }
        ?>
    </body>
</html>