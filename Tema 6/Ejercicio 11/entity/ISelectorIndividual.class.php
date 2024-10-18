<?php
    interface ISelectorIndividual {
        //CONSTRUCTOR PARAMETRIZADO
        public function __construct($tituloCampo, $nombreCampo, $valores, $elementoSeleccionado);

        // MÉTODO GENERAR SELECTOR
        public function generaSelector();
    }
?>