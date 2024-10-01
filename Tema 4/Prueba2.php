<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Prueba 2</title>
    </head>
    <body>
       <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <label for="fechaNacimiento">Fecha de nacimiento</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento"/>

            <br>
            <br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email"/>
            
            <br>
            <br>

            <label for="observaciones">Observaciones</label>
            <textarea name="observaciones" cols="20" rows="5"></textarea>

            <br>
            <br>

            <input type="submit" value="Enviar su mensaje">
       </form>

       <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha = $_POST['fechaNacimiento'];
            $email = $_POST['email'];
            $observaciones = $_POST['observaciones'];

            echo "<br>";
            echo "Fecha: " . $fecha . " Email: " . $email . " Observaciones: " . $observaciones; 
        }
        ?>
    </body>
</html>