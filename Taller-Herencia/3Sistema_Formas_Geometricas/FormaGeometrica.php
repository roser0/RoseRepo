<?php
abstract class FormaGeometrica {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    abstract public function calcularArea();
    abstract public function calcularPerimetro();

    public function obtenerColor() {
        return "Color: $this->color";
    }
}
?>
