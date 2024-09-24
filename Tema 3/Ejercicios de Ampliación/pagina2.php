<html>

<head>
    <title>Problema</title>
</head>

<body>

    <?php
    $inicio = 0;
    $fin = 10;

    for ($i = 0; $i <= $fin; $i++) {
        $resultado = $i * 2;
        echo $resultado . "<br>";
    }

    echo "<br>";

    while ($inicio <= $fin) {
        $resultado = $inicio * 2;
        echo $resultado . "<br>";

        $inicio++;
    }

    echo "<br>";

    $inicio = 0;
    $fin = 10;

    do {
        $resultado = $inicio * 2;
        echo $resultado . "<br>";

        $inicio++;
    } while ($resultado < 20);
    ?>

</body>

</html>