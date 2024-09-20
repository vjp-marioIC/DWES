<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays 2</title>
        <style>
            table {
                width: 500px;
            }

            th {
                color: white;
                background-color: #2b6fc8;
                text-align: left;
            }
            
            tr:nth-child(even) {
            background-color: #cdd4eb;
            }
        </style>
    </head>

    <body>
        <?php
            $paises = [
                ['pais' => 'Alemania', 'capital' => 'Berlín', 'extension' => 557046, 'habitantes' => 78420000],
                ['pais' => 'Austria', 'capital' => 'Viena', 'extension' => 83849, 'habitantes' => 7614000],
                ['pais' => 'Bélgica', 'capital' => 'Bruselas', 'extension' => 30518, 'habitantes' => 9932000]
            ];

            echo "<table>";
            echo "<tr>
                        <th>Pais</th>
                        <th>Capital</th>
                        <th>Extensión</th> 
                        <th>Habitantes</th>
                    </tr>";

            foreach ($paises as $pais) {
                echo "<tr>
                            <td>{$pais['pais']}</td>
                            <td>{$pais['capital']}</td>
                            <td>{$pais['extension']}</td>
                            <td>{$pais['habitantes']}</td>
                        </tr>";
            }

            echo "</table>";
        ?>
    </body>
</html>