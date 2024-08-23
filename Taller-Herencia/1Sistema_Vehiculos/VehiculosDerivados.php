<?php
require_once 'Vehiculo.php';

class Automovil extends Vehiculo {
    public $numPuertas;

    public function __construct($marca, $modelo, $año, $numPuertas) {
        parent::__construct($marca, $modelo, $año);
        $this->numPuertas = $numPuertas;
    }

    public function abrirMaletero() {
        return "El maletero del automóvil está abierto.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Número de puertas: $this->numPuertas";
    }
}

class Motocicleta extends Vehiculo {
    public $tipoManillar;

    public function __construct($marca, $modelo, $año, $tipoManillar) {
        parent::__construct($marca, $modelo, $año);
        $this->tipoManillar = $tipoManillar;
    }

    public function hacerCaballito() {
        return "La motocicleta está haciendo un caballito.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Tipo de manillar: $this->tipoManillar";
    }
}

class Camion extends Vehiculo {
    public $capacidadCarga;

    public function __construct($marca, $modelo, $año, $capacidadCarga) {
        parent::__construct($marca, $modelo, $año);
        $this->capacidadCarga = $capacidadCarga;
    }

    public function descargar() {
        return "El camión está descargando su carga.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Capacidad de carga: $this->capacidadCarga kg";
    }
}
?>
