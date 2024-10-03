<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <label for="frase">Ingresa una frase:</label>
            <input type="text" id="frase" name="frase"/>

            <label for="palabra">Buscar la palabra:</label>
            <input type="text" id="palabra" name="palabra"/>
            

            <input type="submit" value="Comprobar">
        </form>


        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $frase = $_POST['frase'];
                $palabra = $_POST['palabra'];

                $laFrase = strpos($frase, $palabra);

                echo "La frase: ". $frase . "<br>";

                if ($laFrase === false) {
                    echo "La palabra " . $palabra . " no existe en la frase " . $frase;
                } else {
                    echo "Contiene la palabra '" . $palabra . "'";
                }
            }
        ?>
    </body>
</html>