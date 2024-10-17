<?php
    require_once 'Contacto.class.php';

    class EContacto extends Contacto{
        //ATRIBUTOS
        private string $email;
        private string $url;

        //CONSTRUCTOR PARAMETRIZADO
        public function __construct(int $id,string $nombre, string $telefono, DateTime $fechaAlta, string $foto, string $email, string $url) {
            parent::setId($id);
            parent::setNombre($nombre);
            parent::setTelefono($telefono);
            parent::setFechaAlta($fechaAlta);
            parent::setFoto($foto);
            $this->email = $email;
            $this->url = $url;
        }

        //GETTERS Y SETTERS
        public function getEmail(): string
        {
            return $this->email;
        }

        public function setEmail(string $email): self
        {
            $this->email = $email;

            return $this;
        }

        public function getUrl(): string
        {
            return $this->url;
        }

        public function setUrl(string $url): self
        {
            $this->url = $url;

            return $this;
        }

        //MÉTODO CLONAR
        /*
        public function __clone() {
            $clon = new EContacto($this->email, $this->url);

            return $clon;
        }*/

        //MÉTODO (toString)
        public function __toString()
        {
            $cadena = parent::__toString();

            $cadena = $cadena . "Emial: ". $this->email ." Url: " .  $this->url;

            return $cadena;
        }
    }
?>