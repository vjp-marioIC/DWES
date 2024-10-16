<?php
    class Contacto {
        //ATRIBUTOS
        private int $id;
        private string $nombre;
        private string $telefono;
        private DateTime $fechaAlta;
        private string $foto;

        //CONSTRUCTOR PARAMETRIZADO
        public function __construct(int $id,string $nombre, string $telefono, DateTime $fechaAlta, string $foto) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->telefono = $telefono;
            $this->fechaAlta = $fechaAlta;
            $this->foto = $foto;
        }

        //GETTERS Y SETTERS
        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id): self {
            $this->id = $id;

            return $this;
        }

        public function getNombre(): string {
            return $this->nombre;
        }

        public function setNombre(string $nombre): self {
            $this->nombre = $nombre;

            return $this;
        }

        public function getTelefono(): string {
            return $this->telefono;
        }

        public function setTelefono(string $telefono): self {
            $this->telefono = $telefono;

            return $this;
        }

        public function getFechaAlta(): DateTime {
            return $this->fechaAlta;
        }

        public function setFechaAlta(DateTime $fechaAlta): self {
            $this->fechaAlta = $fechaAlta;

            return $this;
        }

        public function getFoto(): string {
            return $this->foto;
        }

        public function setFoto(string $foto): self {
            $this->foto = $foto;

            return $this;
        }

        //MÉTODO CLONAR
        public function __clone() {
            $clon = new Contacto($this->id, $this->nombre, $this->telefono, $this->fechaAlta, $this->foto);

            return $clon;
        }

        //MÉTODO (toString)
        public function __toString()
        {
            $cadena =  "Contacto ". $this->id .
                   ": <br> ---------------------------------------------------" .
                   "<br> Nombre: " .  $this->nombre .
                   "<br> Teléfono: " . $this->telefono .
                   "<br> Fecha de Alta: " . $this->fechaAlta->format('Y-m-d H:i:s') .
                   "<br> Foto: " . $this->foto;

            if (str_contains($_SERVER["REQUEST_URI"], 'vercontacto.view')) {
                $cadena = $cadena . "<br>";
            } else {
                $cadena = $cadena . " <a href=\"../views/vercontacto.view.php?id=" . $this->id-1 . "\">Ver contacto</a>" . "<br> <br>";
            }

            return $cadena;
        }
    }
?>