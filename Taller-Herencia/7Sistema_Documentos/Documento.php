<?php
abstract class Documento {
    public $titulo;
    public $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function imprimir() {
        return "Imprimiendo el documento: $this->titulo.";
    }

    public function guardar() {
        return "Guardando el documento: $this->titulo.";
    }

    public function obtenerDetalles() {
        return "Título: $this->titulo, Autor: $this->autor";
    }
}
?>
