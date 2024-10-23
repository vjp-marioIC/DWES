<?php
    require_once 'ISelectorIndividual.class.php';

    abstract class SelectorIndividual implements ISelectorIndividual {
        //ATRIBUTOS
        protected $tituloCampo;
        protected $nombreCampo;
        protected array $valores;
        protected $elementoSeleccionado;

        //CONSTRUCTOR PARAMETRIZADO
        public function __construct($tituloCampo, $nombreCampo, $valores, $elementoSeleccionado)
        {
            $this->tituloCampo = $tituloCampo;
            $this->nombreCampo = $nombreCampo;
            $this->valores = $valores;
            $this->elementoSeleccionado = $elementoSeleccionado;
        }

        //GETTERS Y SETTERS
        public function getTituloCampo(): string
        {
            return $this->tituloCampo;
        }

        public function setTituloCampo(string $tituloCampo): void
        {
            $this->tituloCampo = $tituloCampo;
        }

        public function getNombreCampo(): string
        {
            return $this->nombreCampo;
        }

        public function setNombreCampo(string $nombreCampo): void
        {
            $this->nombreCampo = $nombreCampo;
        }

        public function getValores()
        {
            return $this->valores;
        }

        public function setValores($valores): self
        {
            $this->valores = $valores;

            return $this;
        }

        public function getElementoSeleccionado(): int
        {
            return $this->elementoSeleccionado;
        }

        public function setElementoSeleccionado(int $elementoSeleccionado): void
        {
            $this->elementoSeleccionado = $elementoSeleccionado;
        }

        // MÉTODO GENERAR SELECTOR
        abstract public function generaSelector();
    }
?>