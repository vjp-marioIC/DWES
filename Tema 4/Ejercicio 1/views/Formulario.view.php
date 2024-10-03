<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" src="../css/style.css">
        <title>Formulario</title>

        <style>
            table {
                border: 1px solid black;
            }

            table tr th {
                border: 1px solid black;
                padding: 5px;
            }

            table tr td {
                border: 1px solid black;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1>Búesqueda de canciones</h1>

       <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <label for="textoBuscar">Texto a buscar: </label>
            <input type="text" id="textoBuscar" name="textoBuscar"/>
            
            <br>
            <br>

            <span>Buscar en: </span> 
            <input type="radio" id="tituloCancion" name="buscar" value="tituloCancion">
            <label for="tituloCancion">Titulos de canción</label>

            <input type="radio" id="nombreAlbum" name="buscar"  value="nombreAlbum">
            <label for="nombreAlbum">Nombre de álbum</label>

            <input type="radio" id="ambosCampos" name="buscar" value="ambosCampos">
            <label for="ambosCampos">Ambos campos</label>

            <br>
            <br>

            <span>Género musical: </span> 
            <select name="generoMusical" id="generoMusical">
                <option value="blues">Blues</option>
                <option value="jazz">Jazz</option>
                <option value="pop">Pop</option>
                <option value="rock">Rock</option>
            </select>

            <br>
            <br>

            <input type="submit" value="Buscar">
       </form>

       <?php
            echo "<br>";
            echo "<table>";
            echo "<tr>
                        <th>Titulo</th>
                        <th>Álbum</th>
                        <th>Género</th> 
                </tr>";

            foreach ($canciones as $cancion) {
                echo "<tr>
                            <td>{$cancion['titulo']}</td>
                            <td>{$cancion['album']}</td>
                            <td>{$cancion['genero']}</td>
                    </tr>";
            }

            echo "</table>";
        ?>
    </body>
</html>