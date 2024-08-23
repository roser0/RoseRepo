<?php
require_once 'DispositivoElectronico.php';

class Smartphone extends DispositivoElectronico {
    private $sistemaOperativo;

    public function __construct($marca, $modelo, $sistemaOperativo) {
        parent::__construct($marca, $modelo);
        $this->sistemaOperativo = $sistemaOperativo;
    }

    public function tomarFoto() {
        return "Se ha tomado una foto.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Sistema Operativo: $this->sistemaOperativo";
    }
}

class Laptop extends DispositivoElectronico {
    private $tamanoPantalla;

    public function __construct($marca, $modelo, $tamanoPantalla) {
        parent::__construct($marca, $modelo);
        $this->tamanoPantalla = $tamanoPantalla;
    }

    public function ejecutarPrograma($programa) {
        return "Ejecutando el programa $programa.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Tamaño de pantalla: $this->tamanoPantalla";
    }
}

class Televisor extends DispositivoElectronico {
    private $tamanioPantalla;

    public function __construct($marca, $modelo, $tamanioPantalla) {
        parent::__construct($marca, $modelo);
        $this->tamanioPantalla = $tamanioPantalla;
    }

    public function cambiarCanal($canal) {
        return "Canal cambiado a $canal.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Tamaño de pantalla: $this->tamanioPantalla";
    }
}
?>
