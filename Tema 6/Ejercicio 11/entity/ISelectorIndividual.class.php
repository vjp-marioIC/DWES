<?php
    interface SelectorIndividual {
        //CONSTRUCTOR PARAMETRIZADO
        public function __construct(string $tituloCampo, string $nombreCampo, $valores, int $elementoSeleccionado);
        public function genereSelector();
    }
?>