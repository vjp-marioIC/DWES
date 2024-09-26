<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Mario Iglesias Capa">
        <title>Funciones 3</title>
    </head>
    <body>
        <?php
            $sumar = function($num1, $num2) {
                return $num1 + $num2;
            };

            $restar = function($num1, $num2) {
                return $num1 - $num2;
            };

            $multiplicar = function($num1, $num2) {
                return $num1 * $num2;
            };

            $dividir = function($num1, $num2) {
                return $num1 / $num2;
            };

            function operacion($operacion, $simbolo, $num1, $num2) {
                echo $num1 . " " . $simbolo . " " . $num2  . " = ". $operacion($num1, $num2) . "<br>"; 
            }

            operacion($sumar, '+', 4, 2);
            operacion($restar, '-', 4, 2);
            operacion($multiplicar, '*', 4, 2);
            operacion($dividir, '/', 4, 2);
        ?>
    </body>
</html>