<?php
abstract class InstrumentoMusical {
    public $tipo;
    public $material;

    public function __construct($tipo, $material) {
        $this->tipo = $tipo;
        $this->material = $material;
    }

    abstract public function tocar();
    abstract public function afinar();

    public function obtenerDetalles() {
        return "Tipo: $this->tipo, Material: $this->material";
    }
}
?>
