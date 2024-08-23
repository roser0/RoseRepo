<?php
abstract class DispositivoElectronico {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function encender() {
        return "El dispositivo está encendido.";
    }

    public function apagar() {
        return "El dispositivo está apagado.";
    }

    public function cargar() {
        return "El dispositivo está cargando.";
    }

    public function obtenerDetalles() {
        return "Marca: $this->marca, Modelo: $this->modelo";
    }
}
?>
