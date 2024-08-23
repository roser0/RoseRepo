<?php
require_once 'FormaGeometrica.php';

class Circulo extends FormaGeometrica {
    public $radio;

    public function __construct($color, $radio) {
        parent::__construct($color);
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
    }

    public function obtenerDetalles() {
        return parent::obtenerColor() . ", Radio: $this->radio";
    }
}

class Rectangulo extends FormaGeometrica {
    public $ancho;
    public $alto;

    public function __construct($color, $ancho, $alto) {
        parent::__construct($color);
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea() {
        return $this->ancho * $this->alto;
    }

    public function calcularPerimetro() {
        return 2 * ($this->ancho + $this->alto);
    }

    public function obtenerDetalles() {
        return parent::obtenerColor() . ", Ancho: $this->ancho, Alto: $this->alto";
    }
}

class Triangulo extends FormaGeometrica {
    public $base;
    public $altura;
    public $lado1;
    public $lado2;
    public $lado3;

    public function __construct($color, $base, $altura, $lado1, $lado2, $lado3) {
        parent::__construct($color);
        $this->base = $base;
        $this->altura = $altura;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function calcularArea() {
        return 0.5 * $this->base * $this->altura;
    }

    public function calcularPerimetro() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    public function obtenerDetalles() {
        return parent::obtenerColor() . ", Base: $this->base, Altura: $this->altura, Lados: $this->lado1, $this->lado2, $this->lado3";
    }
}
?>
