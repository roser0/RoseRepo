<?php
require_once 'AnimalesDerivados.php';

// Creación de un Perro
$miPerro = new Perro("Rex", 5, "Labrador");
echo $miPerro->comer() . "<br>";
echo $miPerro->obtenerDetalles() . "<br>";
echo $miPerro->ladrar() . "<br><br>";

// Creación de un Gato
$miGato = new Gato("Mittens", 3, "Negro");
echo $miGato->dormir() . "<br>";
echo $miGato->obtenerDetalles() . "<br>";
echo $miGato->maullar() . "<br><br>";

// Creación de un Pez
$miPez = new Pez("Nemo", 1, "Salado");
echo $miPez->moverse() . "<br>";
echo $miPez->obtenerDetalles() . "<br>";
echo $miPez->nadar() . "<br>";
?>
