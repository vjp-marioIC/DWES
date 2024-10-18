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
        public function getTituloCampo(): null
        {
            return $this->tituloCampo;
        }

        public function setTituloCampo(null$tituloCampo): self
        {
            $this->tituloCampo = $tituloCampo;

            return $this;
        }

        public function getNombreCampo(): null
        {
            return $this->nombreCampo;
        }

        public function setNombreCampo(null$nombreCampo): self
        {
            $this->nombreCampo = $nombreCampo;

            return $this;
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

        public function getElementoSeleccionado(): null
        {
            return $this->elementoSeleccionado;
        }

        public function setElementoSeleccionado(null$elementoSeleccionado): self
        {
            $this->elementoSeleccionado = $elementoSeleccionado;

            return $this;
        }

        // MÉTODO GENERAR SELECTOR
        abstract public function generaSelector();
    }
?>