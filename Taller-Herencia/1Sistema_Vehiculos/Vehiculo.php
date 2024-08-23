<?php
class Vehiculo {
    public $marca;
    public $modelo;
    public $año;

    public function __construct($marca, $modelo, $año) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }

    public function arrancar() {
        return "El vehículo ha arrancado.";
    }

    public function frenar() {
        return "El vehículo ha frenado.";
    }

    public function acelerar() {
        return "El vehículo está acelerando.";
    }

    public function obtenerDetalles() {
        return "Marca: $this->marca, Modelo: $this->modelo, Año: $this->año";
    }
}
?>
