<?php
require_once 'DocumentosDerivados.php';

// Creación de un Libro
$miLibro = new Libro("Cien años de soledad", "Gabriel García Márquez", 417);
echo $miLibro->obtenerDetalles() . "<br>";
echo $miLibro->imprimir() . "<br>";
echo $miLibro->leer() . "<br><br>";

// Creación de un Artículo
$miArticulo = new Articulo("El impacto del cambio climático", "Juan Pérez", "Revista Científica", 42);
echo $miArticulo->obtenerDetalles() . "<br>";
echo $miArticulo->guardar() . "<br>";
echo $miArticulo->revisar() . "<br><br>";

// Creación de un Reporte
$miReporte = new Reporte("Reporte Anual 2023", "María López", "2023-12-31");
echo $miReporte->obtenerDetalles() . "<br>";
echo $miReporte->imprimir() . "<br>";
echo $miReporte->analizar() . "<br>";
?>
