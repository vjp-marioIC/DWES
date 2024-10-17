<?php
    require_once 'Contacto.class.php';

    class PContacto extends Contacto {
        //ATRIBUTOS
        private string $direccion;
        private string $ciudad;
        private string $provincia;

        //CONSTRUCTOR PARAMETRIZADO
        public function __construct(int $id,string $nombre, string $telefono, DateTime $fechaAlta, string $foto, string $direccion, string $ciudad, string $provincia) {
            parent::setId($id);
            parent::setNombre($nombre);
            parent::setTelefono($telefono);
            parent::setFechaAlta($fechaAlta);
            parent::setFoto($foto);
            $this->direccion = $direccion;
            $this->ciudad = $ciudad;
            $this->provincia = $provincia;
        }

        //GETTERS Y SETTERS
        public function getDireccion(): string
        {
            return $this->direccion;
        }

        public function setDireccion(string $direccion): self
        {
            $this->direccion = $direccion;

            return $this;
        }

        public function getCiudad(): string
        {
            return $this->ciudad;
        }

        public function setCiudad(string $ciudad): self
        {
            $this->ciudad = $ciudad;

            return $this;
        }

        public function getProvincia(): string
        {
            return $this->provincia;
        }

        public function setProvincia(string $provincia): self
        {
            $this->provincia = $provincia;

            return $this;
        }

        //MÉTODO CLONAR
        public function __clone() {
            $clonPadre = parent::__clone();

            $clonPadre = clonPadre . $this->direccion, $this->ciudad, $this->provincia;

            return $clonPadre;
        }

        //MÉTODO (toString)
        public function __toString()
        {
            $cadena = parent::__toString();

            $cadena = $cadena . " Dirección: ". $this->direccion ." Ciudad: " .  $this->ciudad . " Provincia: " . $this->provincia;

            return $cadena;
        }
    }
?>