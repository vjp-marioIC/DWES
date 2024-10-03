<?php
    require 'inc/canciones.inc.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $textoBuscar = $_POST['textoBuscar'];
        $buscar = $_POST['buscar'];
        $generoMusical = $_POST['generoMusical'];

        $canciones = arrayCaciones();

        /*
        if (($buscar === "tituloCancion") && ($generoMusical === "blues")) {
            $canciones = arrayCaciones();
        }

        foreach ($canciones as $key => $value) {
            echo 
        }*/
    }

    require 'views/Formulario.view.php';
?>