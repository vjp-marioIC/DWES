<?php
    //LLAMO A LAS CLASES DE CONTACTO Y AGENDA
    require_once "../entity/Contacto.class.php";
    require_once "../entity/Agenda.class.php";

    //CREO LOS OBJETOS CONTACTO
    $contacto1 = new Contacto(1, 'Juan', '123-456-7890', new DateTime(), 'foto1.jpg');
    $contacto2 = new Contacto(2, 'María', '987-654-3210', new DateTime(), 'foto2.jpg');
    $contacto3 = new Contacto(3, 'Pedro', '555-555-5555', new DateTime(), 'foto3.jpg');

    //CREO AGENDA1 CON EL PRIMER CONTACTO
    $agenda1 = new Agenda('AGENDA v1', $contacto1);

    //AGREGO DOS CONTACTOS MÁS A AGENDA1
    $agenda1->agregarContacto($contacto2);
    $agenda1->agregarContacto($contacto3);

    //MUESTRO AGENDA1 POR PRIMERA VEZ
    echo $agenda1;

    //#################################################################################################

    //ELIMINO EL PRIMER CONTACTO
    $agenda1->eliminarContacto($contacto1);

    //CLONO ES SEGUNDO CONTACTO
    $contactoClonado = clone $contacto2;

    //AGREGO EL CONTACTO CLONADO A LA AGENDA
    $agenda1->agregarContacto($contactoClonado);

    //CAMBIO EL NOMBRE A LA AGENDA
    $agenda1->setNombre("AGENDA v2");

    //MUESTRO AGENDA1 POR SEGUNDA VEZ
    echo $agenda1;

    //#################################################################################################

    //CREO LOS OBJETOS CONTACTO
    $contacto4 = new Contacto(4, 'Laura', '111-222-3333', new DateTime(), 'foto4.jpg');
    $contacto5 = new Contacto(5, 'Carlos', '999-888-7777', new DateTime(), 'foto5.jpg');
    $contacto6 = new Contacto(6, 'Ana', '444-333-2222', new DateTime(), 'foto6.jpg');

    $agenda1->agregarContacto($contacto4);
    $agenda1->agregarContacto($contacto5);
    $agenda1->agregarContacto($contacto6);

    //CLONO LA AGENDA1
    $agendaClonada = clone $agenda1;

    //ELIMINO EL PRIMER CONTACTO
    $agendaClonada->eliminarContacto($contacto2);

    //CAMBIO EL NOMBRE DEL SEGUNDO CONTACTO
    $contacto3->setNombre("Federico");

    //CAMBIO EL NOMBRE A LA AGENDA
    $agendaClonada->setNombre("AGENDA v3");

    //MUESTRO (agendaClonada)
    echo $agendaClonada;
?>