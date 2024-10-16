<?php
    require_once '../entity/Contacto.class.php';
    require_once '../entity/Agenda.class.php';

    // COMPRUEBO QUE EL (ID) EXISTE, SI ES ASÍ LO ALMACENO EN LA VARABLE (Id)
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $agenda = new Agenda("AGENDA");

        $contactos = $agenda->getArrayContactos();
        $contacto = $contactos[$id];

        echo $contacto;
    } else {
        echo "El ID no es válido";
    }
?>