<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha"/>

            <label for="numDias">Número de días:</label>
            <input type="number" id="numDias" name="numDias"/>
            

            <input type="submit" value="Calcular">
        </form>


        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $fecha = $_POST['fecha'];
                $numDias = $_POST['numDias'];

                $fechaConvertida = strtotime($fecha);

                $fechaGenerada = date('d/m/Y', $fechaConvertida);
                $fechaGenerada = new DateTime();

                $fechaDentroDeXDias = $fechaGenerada->add(new DateInterval('P' . $numDias . 'D'));

                echo "La fecha seleccionada es: " . $fecha . "<br>";
                echo "Días ingresados:  " . $numDias . "<br>"; 
                echo "La fecha resultante es: " . $fechaDentroDeXDias->format('d/m/Y');
            }
        ?>
    </body>
</html>