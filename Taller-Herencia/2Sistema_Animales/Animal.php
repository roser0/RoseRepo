<?php
class Animal {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function comer() {
        return "$this->nombre está comiendo.";
    }

    public function dormir() {
        return "$this->nombre está durmiendo.";
    }

    public function moverse() {
        return "$this->nombre se está moviendo.";
    }

    public function obtenerDetalles() {
        return "Nombre: $this->nombre, Edad: $this->edad años";
    }
}
?>
