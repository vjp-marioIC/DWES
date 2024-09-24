<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    //Generar un valor aleatorio entre 1 y 100. Luego mostrar
    //si tiene 1,2 o 3 dígitos.

    $valor = rand(1, 3);
    echo "El valor sorteado es $valor<br>";

    if ($valor == 1) {
        echo "Uno";
    } else {
        if ($valor == 2) {
            echo "Dos";
        } else {
            if ($valor == 3) {
                echo "Tres";
            }
        }
    }
    ?>
</body>
</html>