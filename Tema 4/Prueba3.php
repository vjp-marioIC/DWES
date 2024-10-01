<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Prueba 3</title>
    </head>
    <body>
       <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <label for="nombre">Nombre*</label>
            <br>
            <input type="text" id="nombre" name="nombre"/>
            
            <br>
            <br>

            <label for="apellido">Apellido</label>
            <br>
            <input type="text" id="apellido" name="apellido"/>

            <br>
            <br>

            <label for="email">Email*</label>
            <br>
            <input type="email" id="email" name="email"/>
            
            <br>
            <br>
       
            <label for="fechaNacimiento">Fecha de nacimiento*</label>
            <br>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento"/>

            <br>
            <br>

            <input type="submit" value="Enviar">
       </form>

       <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $fechaNacimiento = $_POST['fechaNacimiento'];

            echo "Nombre: " . $nombre . "<br>";
            echo "Apellido: " . $apellido . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Fecha de nacimiento: " . $fechaNacimiento . "<br>";
        }
        ?>
    </body>
</html>