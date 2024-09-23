<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Funciones 2</title>
    </head>
    <body>
        <?php
            function insert($nombreTabla, $arrayDatos, &$sentencia_sql) {

                $valor = '<br>';

                $claves = implode(', ', array_keys($arrayDatos[0]));

                foreach ($arrayDatos as $dato) {
                    $valor = $valor . "(". implode(', ', $dato) . ") <br>";
                }
                /*
                    echo "INSERT INTO " . $nombreTabla . " (" . $claves . " ) VALUES <br>"  . " ( <br>" .  $valor  . ")";
                */
            
                $sentencia_sql = str_replace('tabla', $nombreTabla, $sentencia_sql);
                $sentencia_sql = str_replace('campos', $claves, $sentencia_sql);
                $sentencia_sql = str_replace('valores', $valor, $sentencia_sql);

                return $sentencia_sql;
            }

            $arrayAlumnos = [
                ['dni' => '111', 'nombre' => 'marta', 'apellidos' => 'garcía', 'edad' => 21, 'ciclo' => 'daw'],
                ['dni' => '222', 'nombre' => 'lucia', 'apellidos' => 'pérez', 'edad' => 18, 'ciclo' => 'daw'],
                ['dni' => '333', 'nombre' => 'maya', 'apellidos' => 'rodriguez', 'edad' => 22, 'ciclo' => 'daw'],
                ['dni' => '444', 'nombre' => 'rita', 'apellidos' => 'gutierrez', 'edad' => 25, 'ciclo' => 'daw']
            ];

            $sentencia_sql = "INSERT INTO tabla (campos) VALUES (valores)";

            echo insert('Tabla1', $arrayAlumnos, $sentencia_sql);
        ?>
    </body>
</html>