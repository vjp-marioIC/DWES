<?php
    //LLAMO A LAS CLASES DE CONTACTO Y AGENDA
    require_once "../entity/Contacto.class.php";
    require_once "../entity/Agenda.class.php";
    
    $agenda = new Agenda('AGENDA');

    echo $agenda;
?>