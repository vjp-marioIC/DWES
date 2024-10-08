<?php
    require 'inc/canciones.inc.php';

    $canciones = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // SI LA VARIABLE ES RECIBIDA LA ALMACENO, SI NO LA INICIALIZO A VACIO PARA QUE NO DE ERROR
        $textoBuscar = $_POST['textoBuscar'] ?? '';
        $buscar = $_POST['buscar'] ?? '';
        $generoMusical = $_POST['generoMusical'] ?? '';

        $canciones = arrayCaciones();

        // FILTRO LAS CANCIONES POR CAMPO DE BÚSQUEDA Y GÉNERO
        $canciones = array_filter($canciones, function($cancion) use ($textoBuscar, $buscar, $generoMusical) {

            if ($buscar === 'tituloCancion') {
                return stripos($cancion['titulo'], $textoBuscar) !== false;
            } elseif ($buscar === 'nombreAlbum') {
                return stripos($cancion['album'], $textoBuscar) !== false;
            } elseif ($buscar === 'ambosCampos') {
                return stripos($cancion['titulo'], $textoBuscar) !== false || stripos($cancion['album'], $textoBuscar) !== false;
            }

            // PASO TODO A MINÚSCULAS PARA NO TENER PROBLEMAS ENTRE (MAYÚS. Y MINÚS.) 
            if (strtolower($cancion['genero']) !== strtolower($generoMusical)) {
                return false;
            }

            return true;
        });
    }

    require 'views/Formulario.view.php';
?>
