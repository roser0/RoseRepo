<?php
require_once 'VehiculosDerivados.php';

// Creación de un Automóvil
$miAutomovil = new Automovil("Toyota", "Corolla", 2020, 4);
echo $miAutomovil->arrancar() . "<br>";
echo $miAutomovil->obtenerDetalles() . "<br>";
echo $miAutomovil->abrirMaletero() . "<br><br>";

// Creación de una Motocicleta
$miMotocicleta = new Motocicleta("Harley-Davidson", "Sportster", 2018, "Chopper");
echo $miMotocicleta->arrancar() . "<br>";
echo $miMotocicleta->obtenerDetalles() . "<br>";
echo $miMotocicleta->hacerCaballito() . "<br><br>";

// Creación de un Camión
$miCamion = new Camion("Volvo", "FH16", 2022, 18000);
echo $miCamion->arrancar() . "<br>";
echo $miCamion->obtenerDetalles() . "<br>";
echo $miCamion->descargar() . "<br>";
?>
