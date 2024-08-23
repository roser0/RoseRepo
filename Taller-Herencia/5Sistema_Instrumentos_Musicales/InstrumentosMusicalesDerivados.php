<?php
require_once 'InstrumentoMusical.php';

class Guitarra extends InstrumentoMusical {
    private $numCuerdas;

    public function __construct($material, $numCuerdas) {
        parent::__construct("Guitarra", $material);
        $this->numCuerdas = $numCuerdas;
    }

    public function tocar() {
        return "La guitarra está siendo tocada.";
    }

    public function afinar() {
        return "La guitarra está siendo afinada.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Número de cuerdas: $this->numCuerdas";
    }
}

class Piano extends InstrumentoMusical {
    private $numTeclas;

    public function __construct($material, $numTeclas) {
        parent::__construct("Piano", $material);
        $this->numTeclas = $numTeclas;
    }

    public function tocar() {
        return "El piano está siendo tocado.";
    }

    public function afinar() {
        return "El piano está siendo afinado.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Número de teclas: $this->numTeclas";
    }
}

class Violin extends InstrumentoMusical {
    private $numCuerdas;

    public function __construct($material, $numCuerdas) {
        parent::__construct("Violín", $material);
        $this->numCuerdas = $numCuerdas;
    }

    public function tocar() {
        return "El violín está siendo tocado.";
    }

    public function afinar() {
        return "El violín está siendo afinado.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Número de cuerdas: $this->numCuerdas";
    }
}
?>
