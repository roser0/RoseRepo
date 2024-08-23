<?php
require_once 'Empleado.php';

class Gerente extends Empleado {
    private $porcentajeBonificacion;

    public function __construct($nombre, $salarioBase, $porcentajeBonificacion) {
        parent::__construct($nombre, "Gerente", $salarioBase);
        $this->porcentajeBonificacion = $porcentajeBonificacion;
    }

    public function calcularSalario() {
        return $this->salarioBase;
    }

    public function calcularBonificacion() {
        return $this->salarioBase * ($this->porcentajeBonificacion / 100);
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Salario Base: $this->salarioBase, Bonificación: " . $this->calcularBonificacion();
    }
}

class Analista extends Empleado {
    private $bonificacionFija;

    public function __construct($nombre, $salarioBase, $bonificacionFija) {
        parent::__construct($nombre, "Analista", $salarioBase);
        $this->bonificacionFija = $bonificacionFija;
    }

    public function calcularSalario() {
        return $this->salarioBase;
    }

    public function calcularBonificacion() {
        return $this->bonificacionFija;
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Salario Base: $this->salarioBase, Bonificación: " . $this->calcularBonificacion();
    }
}

class Asistente extends Empleado {
    private $horasExtra;
    private $tarifaHoraExtra;

    public function __construct($nombre, $salarioBase, $horasExtra, $tarifaHoraExtra) {
        parent::__construct($nombre, "Asistente", $salarioBase);
        $this->horasExtra = $horasExtra;
        $this->tarifaHoraExtra = $tarifaHoraExtra;
    }

    public function calcularSalario() {
        return $this->salarioBase + ($this->horasExtra * $this->tarifaHoraExtra);
    }

    public function calcularBonificacion() {
        return 0; // Asistente no tiene bonificación fija
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Salario Base: $this->salarioBase, Horas Extra: $this->horasExtra, Tarifa Hora Extra: $this->tarifaHoraExtra, Salario Total: " . $this->calcularSalario();
    }
}
?>
