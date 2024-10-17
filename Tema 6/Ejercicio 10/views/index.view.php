<?php
    //LLAMO A LAS CLASES DE CONTACTO Y AGENDA
    require_once "../entity/Contacto.class.php";
    require_once "../entity/Agenda.class.php";
    require_once "../entity/EContacto.class.php";
    require_once "../entity/PContacto.class.php";

    //CREO LOS OBJETOS (EContacto)
    $eContacto1 = new EContacto(1, 'Juan', '123-456-7890', new DateTime(), 'foto1.jpg', 'juan@gmail.com', 'http://google.es');
    $eContacto2 = new EContacto(2, 'María', '987-654-3210', new DateTime(), 'foto2.jpg', 'maria@gmail.com', 'http://google.es');
    $eContacto3 = new EContacto(3, 'Pedro', '333-333-3333', new DateTime(), 'foto3.jpg', 'pedro@gmail.com', 'http://google.es');

    //CREO LOS OBJETOS (PContacto)
    $pContacto1 = new PContacto(4, 'Federica', '444-444-4444', new DateTime(), 'foto4.jpg', 'Avenida Federico', 'Plasencia', 'Cáceres');
    $pContacto2 = new PContacto(5, 'Pablo', '555-555-5555', new DateTime(), 'foto4.jpg', 'Avenida Donantes de Sangre', 'Plasencia', 'Cáceres');
    $pContacto3 = new PContacto(6, 'Marta', '666-666-6666', new DateTime(), 'foto6.jpg', 'Avenida Martín Palomino', 'Plasencia', 'Cáceres');
    

    //CREO AGENDA1 CON EL PRIMER CONTACTO
    $agenda = new Agenda('AGENDA', $eContacto1);

    //AGREGO LOS CONTACTOS MÁS A AGENDA
    $agenda->agregarContacto($eContacto2);
    $agenda->agregarContacto($eContacto3);
    $agenda->agregarContacto($pContacto1);
    $agenda->agregarContacto($pContacto2);
    $agenda->agregarContacto($pContacto3);

    //MUESTRO AGENDA1 POR PRIMERA VEZ
    echo $agenda;
?>