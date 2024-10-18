<?php
    //LLAMO A LAS CLASES NECESARIAS
    require_once '../entity/SIRadioOpcion.class.php';
    require_once '../entity/SISelect.class.php';
?>

<h1>Búsqueda de canciones</h1>

<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <label for="textoBusqueda">Texto a buscar:</label>
    <input type="text" id="textoBusqueda" name="textoBusqueda">

    <br><br>

    <?php
        $opcionesRadio = [
            'titulo' => 'Títulos de canción',
            'album' => 'Nombres de álbum',
            'ambos' => 'Ambos campos'
        ];

        $selectorRadio = new SIRadioOpcion('Buscar en', 'buscarEn', $opcionesRadio, 'titulo');
        $selectorRadio->generaSelector();
    ?>

    <br><br>

    <?php
        $opcionesSelect = [
            'Todos' => 'Todos',
            'Blues' => 'Blues',
            'Jazz' => 'Jazz',
            'Pop' => 'Pop',
            'Rock' => 'Rock'
        ];

        $selectSelector = new SISelect('Género musical', 'generoMusical', $opcionesSelect, 'Todos');
        $selectSelector->generaSelector();
    ?>

    <br><br>
    
    <input type="submit" name="boton" value="Buscar">
</form>