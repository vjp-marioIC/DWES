<?php
    abstract class SelectorIndividual implements SelectorIndividual {
        //ATRIBUTOS
        private string $tituloCampo;
        private string $nombreCampo;
        private array $valores;
        private int $elementoSeleccionado;

        //CONSTRUCTOR PARAMETRIZADO
        public function __construct(string $tituloCampo, string $nombreCampo, $valores, int $elementoSeleccionado) {
            $this->tituloCampo = $tituloCampo;
            $this->nombreCampo = $nombreCampo;
            $this->valores[] = $valores;
            $this->elementoSeleccionado = $elementoSeleccionado;
        }

        //GETTERS Y SETTERS
        public function getTituloCampo(): string
        {
            return $this->tituloCampo;
        }

        public function setTituloCampo(string $tituloCampo): self
        {
            $this->tituloCampo = $tituloCampo;

            return $this;
        }

        public function getNombreCampo(): string
        {
            return $this->nombreCampo;
        }

        public function setNombreCampo(string $nombreCampo): self
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

        public function getElementoSeleccionado(): int
        {
            return $this->elementoSeleccionado;
        }

        public function setElementoSeleccionado(int $elementoSeleccionado): self
        {
            $this->elementoSeleccionado = $elementoSeleccionado;

            return $this;
        }

        // MÉTODO GENERAR SELECTOR
        abstract public function genereSelector();

        //MÉTODO (toString)
        public function __toString() {
            
        }
    }
?>