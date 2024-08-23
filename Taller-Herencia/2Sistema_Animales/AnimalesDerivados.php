<?php
require_once 'Animal.php';

class Perro extends Animal {
    public $raza;

    public function __construct($nombre, $edad, $raza) {
        parent::__construct($nombre, $edad);
        $this->raza = $raza;
    }

    public function ladrar() {
        return "$this->nombre está ladrando.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Raza: $this->raza";
    }
}

class Gato extends Animal {
    public $color;

    public function __construct($nombre, $edad, $color) {
        parent::__construct($nombre, $edad);
        $this->color = $color;
    }

    public function maullar() {
        return "$this->nombre está maullando.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Color: $this->color";
    }
}

class Pez extends Animal {
    public $tipoAgua;

    public function __construct($nombre, $edad, $tipoAgua) {
        parent::__construct($nombre, $edad);
        $this->tipoAgua = $tipoAgua;
    }

    public function nadar() {
        return "$this->nombre está nadando.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Tipo de agua: $this->tipoAgua";
    }
}
?>
