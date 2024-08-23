<?php
require_once 'InstrumentosMusicalesDerivados.php';

// Creación de una Guitarra
$miGuitarra = new Guitarra("Madera", 6);
echo $miGuitarra->obtenerDetalles() . "<br>";
echo $miGuitarra->tocar() . "<br>";
echo $miGuitarra->afinar() . "<br><br>";

// Creación de un Piano
$miPiano = new Piano("Metal", 88);
echo $miPiano->obtenerDetalles() . "<br>";
echo $miPiano->tocar() . "<br>";
echo $miPiano->afinar() . "<br><br>";

// Creación de un Violín
$miViolin = new Violin("Madera", 4);
echo $miViolin->obtenerDetalles() . "<br>";
echo $miViolin->tocar() . "<br>";
echo $miViolin->afinar() . "<br>";
?>
