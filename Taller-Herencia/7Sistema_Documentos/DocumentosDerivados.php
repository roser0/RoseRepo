<?php
require_once 'Documento.php';

class Libro extends Documento {
    private $numeroPaginas;

    public function __construct($titulo, $autor, $numeroPaginas) {
        parent::__construct($titulo, $autor);
        $this->numeroPaginas = $numeroPaginas;
    }

    public function leer() {
        return "Leyendo el libro: $this->titulo.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Número de páginas: $this->numeroPaginas";
    }
}

class Articulo extends Documento {
    private $revista;
    private $numero;

    public function __construct($titulo, $autor, $revista, $numero) {
        parent::__construct($titulo, $autor);
        $this->revista = $revista;
        $this->numero = $numero;
    }

    public function revisar() {
        return "Revisando el artículo: $this->titulo.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Revista: $this->revista, Número: $this->numero";
    }
}

class Reporte extends Documento {
    private $fecha;

    public function __construct($titulo, $autor, $fecha) {
        parent::__construct($titulo, $autor);
        $this->fecha = $fecha;
    }

    public function analizar() {
        return "Analizando el reporte: $this->titulo.";
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . ", Fecha: $this->fecha";
    }
}
?>
