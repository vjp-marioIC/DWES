<?php
    //LLAMO A LAS CLASES DE CONTACTO Y AGENDA
    require_once "../entity/Contacto.class.php";
    require_once "../entity/Agenda.class.php";

    //CREO LOS OBJETOS CONTACTO
    $contacto1 = new Contacto(1, 'Juan', '123-456-7890', new DateTime(), 'foto1.jpg');
    $contacto2 = new Contacto(2, 'María', '987-654-3210', new DateTime(), 'foto2.jpg');
    $contacto3 = new Contacto(3, 'Pedro', '555-555-5555', new DateTime(), 'foto3.jpg');

    //CREO AGENDA1 CON EL PRIMER CONTACTO
    $agenda1 = new Agenda('AGENDA', $contacto1);

    //AGREGO DOS CONTACTOS MÁS A AGENDA1
    $agenda1->agregarContacto($contacto2);
    $agenda1->agregarContacto($contacto3);

    //MUESTRO AGENDA1 POR PRIMERA VEZ
    echo $agenda1;
?>