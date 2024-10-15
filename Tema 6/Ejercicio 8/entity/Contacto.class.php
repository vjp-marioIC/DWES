<?php
    class Contacto {
        private int $id;
        private string $nombre;
        private string $telefono;
        private DateTime $fecha_alta;
        private string $foto;

        public function __construct(int $id, string $nombre, string $telefono, DateTime $fecha_alta, string $foto) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->telefono = $telefono;
            $this->fecha_alta = $fecha_alta;
            $this->foto = $foto;
        }
    }
?>