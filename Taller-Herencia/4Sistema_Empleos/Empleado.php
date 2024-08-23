<?php
abstract class Empleado {
    public $nombre;
    public $cargo;
    protected $salarioBase;

    public function __construct($nombre, $cargo, $salarioBase) {
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->salarioBase = $salarioBase;
    }

    abstract public function calcularSalario();
    abstract public function calcularBonificacion();

    public function obtenerDetalles() {
        return "Nombre: $this->nombre, Cargo: $this->cargo";
    }
}
?>
