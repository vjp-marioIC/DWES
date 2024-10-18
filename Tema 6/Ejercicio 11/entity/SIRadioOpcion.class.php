<?php
    require_once 'SelectorIndividual.class.php';

    class SIRadioOpcion extends SelectorIndividual {
        // MÉTODO GENERAR SELECTOR
        public function generaSelector() {
            echo "<label for='{$this->nombreCampo}'>{$this->tituloCampo}:</label>";

            // RECORRO EL ARRAY DE ($opcionesRadio)
            foreach ($this->valores as $valor => $texto) {
                // SI EL VALOR ES IGUAL AL ELEMENETO SELECCIONADO, ESTÁ (checked) SI NO LO INICIALIZO A VACIO.
                $seleccionado = ($valor == $this->elementoSeleccionado) ? 'checked' : '';

                echo "<input type='radio' name='{$this->nombreCampo}' valor='{$valor}' {$seleccionado}>";
                echo "<label for='{$valor}'>{$texto}</label>";
            }
        }
    }
?>