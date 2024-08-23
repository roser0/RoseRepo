<?php
require_once 'DispositivosElectronicosDerivados.php';

// Creación de un Smartphone
$miSmartphone = new Smartphone("Samsung", "Galaxy S21", "Android");
echo $miSmartphone->obtenerDetalles() . "<br>";
echo $miSmartphone->encender() . "<br>";
echo $miSmartphone->tomarFoto() . "<br><br>";

// Creación de una Laptop
$miLaptop = new Laptop("Dell", "XPS 13", "13 pulgadas");
echo $miLaptop->obtenerDetalles() . "<br>";
echo $miLaptop->encender() . "<br>";
echo $miLaptop->ejecutarPrograma("Microsoft Word") . "<br><br>";

// Creación de un Televisor
$miTelevisor = new Televisor("LG", "OLED55", "55 pulgadas");
echo $miTelevisor->obtenerDetalles() . "<br>";
echo $miTelevisor->encender() . "<br>";
echo $miTelevisor->cambiarCanal(5) . "<br>";
?>
