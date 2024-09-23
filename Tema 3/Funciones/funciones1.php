<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Funciones 1</title>
    </head>
    <body>
        <?php
            function insert($nombreTabla, $arrayDatos) {

                $valor = '';

                $claves = implode(', ', array_keys($arrayDatos[0]));

                foreach ($arrayDatos as $dato) {
                    $valor = $valor . "(". implode(', ', $dato) . ") <br>";
                }

                echo "INSERT INTO " . $nombreTabla . " (" . $claves . " ) VALUES <br>"  . " ( <br>" .  $valor  . ")";
            
            }

            $arrayAlumnos = [
                ['dni' => '111', 'nombre' => 'marta', 'apellidos' => 'garcía', 'edad' => 21, 'ciclo' => 'daw'],
                ['dni' => '222', 'nombre' => 'lucia', 'apellidos' => 'pérez', 'edad' => 18, 'ciclo' => 'daw'],
                ['dni' => '333', 'nombre' => 'maya', 'apellidos' => 'rodriguez', 'edad' => 22, 'ciclo' => 'daw'],
                ['dni' => '444', 'nombre' => 'rita', 'apellidos' => 'gutierrez', 'edad' => 25, 'ciclo' => 'daw']
            ];

            insert('Tabla1', $arrayAlumnos);
        ?>
    </body>
</html>