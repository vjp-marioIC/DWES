<?php
    require_once "Contacto.class.php";

    class Agenda {
        //ATRIBUTOS
        private string $nombre;
        private array $arrayContacto;

        //CONSTRUCTOR PARAMETRIZADO
        public function __construct(string $nombre, $contacto) {
            $this->nombre = $nombre;
            $this->arrayContacto[] = $contacto;
        }

        //GETTERS Y SETTERS
        public function getNombre(): string {
            return $this->nombre;
        }

        public function setNombre(string $nombre): self {
            $this->nombre = $nombre;

            return $this;
        }
        
        public function getArrayContacto() {
            return $this->arrayContacto;
        }

        public function setArrayContacto($arrayContacto): self {
            $this->arrayContacto = $arrayContacto;

            return $this;
        }

        //MÉTODO AGREGAR CONTACTO
        public function agregarContacto($contacto) {
            $this->arrayContacto[] = $contacto;
        }

        //MÉTODO ELIMINAR CONTACTO
        public function eliminarContacto($contacto) {
            //BUSCO EL CONTACTO CON ARRAY_SEARCH, SI NO LA ENCUENTRA RETORNA FALSE
            $contactoEncontrado = array_search($contacto, $this->arrayContacto);

            //SI EL CONTACTO ES ENCONTRADO LO ELIMINO
            if ($contactoEncontrado !== false) {
                unset($this->arrayContacto[$contactoEncontrado]);
            }
        }

        //MÉTODO CLONAR
        public function __clone() {
            //CLONO EL OBJETO AGENDA
            $clon = new Agenda($this->nombre, []);

            //CLONO  LOS CONTACTOS
            foreach ($this->arrayContacto as $contacto) {
                $clon->agregarContacto(clone $contacto);
            }

            return $clon;
        }

        //MÉTODO (toString)
        public function __toString() {
            
            $agendaYcontactos = [];

            // TÍTULO DE LA AGENDA
            $agendaYcontactos[] = "<h1>" . $this->nombre . "</h1>";

            // AGREGO CADA UNO DE LOS CONTACTOS A LA AGENDA
            foreach ($this->arrayContacto as $contacto) {
                $agendaYcontactos[] = "<p>" . $contacto . "</p>";
            }

            // JUNTO EL TITULO DE LA AGENDA CON LOS CONTACTOS
            return implode('', $agendaYcontactos);
        }
    }
?>