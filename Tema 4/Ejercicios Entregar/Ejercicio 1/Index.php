<?php
    require 'inc/canciones.inc.php';

    // Inicializa $canciones para evitar el warning
    $canciones = array(); // Vacío por defecto

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $textoBuscar = $_POST['textoBuscar'] ?? '';
        $buscar = $_POST['buscar'] ?? '';
        $generoMusical = $_POST['generoMusical'] ?? '';

        // Obtener todas las canciones
        $canciones = arrayCaciones();

        // Filtrado según el género musical y el campo de búsqueda
        $canciones = array_filter($canciones, function($cancion) use ($textoBuscar, $buscar, $generoMusical) {
            // Convertir género a minúsculas para evitar problemas de comparación
            if (strtolower($cancion['genero']) !== strtolower($generoMusical)) {
                return false;
            }

            // Filtrar por el tipo de búsqueda
            if ($buscar === 'tituloCancion') {
                return stripos($cancion['titulo'], $textoBuscar) !== false;
            } elseif ($buscar === 'nombreAlbum') {
                return stripos($cancion['album'], $textoBuscar) !== false;
            } elseif ($buscar === 'ambosCampos') {
                return stripos($cancion['titulo'], $textoBuscar) !== false || stripos($cancion['album'], $textoBuscar) !== false;
            }

            return true; // Devolver todas las canciones si no hay filtro
        });
    }

    require 'views/Formulario.view.php';
?>
