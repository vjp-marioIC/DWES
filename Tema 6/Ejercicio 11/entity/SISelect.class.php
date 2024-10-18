<?php
    require_once 'SelectorIndividual.class.php';

    class SISelect extends SelectorIndividual {
        //MÉTODO GENERAR SELECTOR
        public function generaSelector() {
            echo "<label for='{$this->nombreCampo}'>{$this->tituloCampo}:</label>";
            echo "<select name='{$this->nombreCampo}'>";

            // RECORRO EL ARRAY DE ($opcionesSelect)
            foreach ($this->valores as $valor => $texto) {
                // SI EL VALOR ES IGUAL AL ELEMENETO SELECCIONADO, ESTÁ (checked) SI NO LO INICIALIZO A VACIO.
                $seleccionado = ($valor == $this->elementoSeleccionado) ? 'selected' : '';
                
                echo "<option valor='{$valor}' {$seleccionado}>{$texto}</option>";
            }

            echo "</select>";
        }
    }
?>