<?php
    require_once "Contacto.class.php";

    class Agenda {
        //ATRIBUTOS
        private string $nombre;
        private array $arrayContactos;

        //CONSTRUCTOR PARAMETRIZADO
        public function __construct(string $nombre) {
            $this->nombre = $nombre;
            $this->arrayContactos = [ new Contacto(1, 'Juan', '123-456-7890', new DateTime(), 'foto1.jpg'),
                                        new Contacto(2, 'María', '987-654-3210', new DateTime(), 'foto2.jpg'),
                                        new Contacto(3, 'Pedro', '555-555-5555', new DateTime(), 'foto3.jpg')
                                        ];
        }

        //GETTERS Y SETTERS
        public function getNombre(): string {
            return $this->nombre;
        }

        public function setNombre(string $nombre): self {
            $this->nombre = $nombre;

            return $this;
        }
        
        public function getArrayContactos() {
            return $this->arrayContactos;
        }

        public function setArrayContactos($arrayContactos): self {
            $this->arrayContactos = $arrayContactos;

            return $this;
        }

        //MÉTODO AGREGAR CONTACTO
        public function agregarContacto($contacto) {
            $this->arrayContactos[] = $contacto;
        }

        //MÉTODO ELIMINAR CONTACTO
        public function eliminarContacto($contacto) {
            //BUSCO EL CONTACTO CON ARRAY_SEARCH, SI NO LA ENCUENTRA RETORNA FALSE
            $contactoEncontrado = array_search($contacto, $this->arrayContactos);

            //SI EL CONTACTO ES ENCONTRADO LO ELIMINO
            if ($contactoEncontrado !== false) {
                unset($this->arrayContactos[$contactoEncontrado]);
            }
        }

        //MÉTODO CLONAR
        public function __clone() {
            //CLONO EL OBJETO AGENDA
            $clon = new Agenda($this->nombre, []);

            //CLONO  LOS CONTACTOS
            foreach ($this->arrayContactos as $contacto) {
                $clon->agregarContacto(clone $contacto);
            }

            return $clon;
        }

        //MÉTODO (toString)
        public function __toString() {

            // TÍTULO DE LA AGENDA
            $cadena = "<h1>" . $this->nombre . "</h1>";

            // AGREGO CADA UNO DE LOS CONTACTOS A LA AGENDA
            foreach ($this->arrayContactos as $contacto) {
                $cadena = $cadena . $contacto;
            }

            return $cadena;
        }
    }
?>