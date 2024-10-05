<?php
    require 'inc/canciones.inc.php';

    $canciones = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

            if (strtolower($cancion['genero']) !== strtolower($generoMusical)) {
                return false;
            }

            return true;
        });
    }

    require 'views/Formulario.view.php';
?>
