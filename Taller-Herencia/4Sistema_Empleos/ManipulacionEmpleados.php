<?php
require_once 'EmpleadosDerivados.php';

// Creación de un Gerente
$miGerente = new Gerente("Juan Pérez", 5000, 10);
echo $miGerente->obtenerDetalles() . "<br>";
echo "Salario: " . $miGerente->calcularSalario() . "<br>";
echo "Bonificación: " . $miGerente->calcularBonificacion() . "<br><br>";

// Creación de un Analista
$miAnalista = new Analista("María López", 4000, 500);
echo $miAnalista->obtenerDetalles() . "<br>";
echo "Salario: " . $miAnalista->calcularSalario() . "<br>";
echo "Bonificación: " . $miAnalista->calcularBonificacion() . "<br><br>";

// Creación de un Asistente
$miAsistente = new Asistente("Carlos Gómez", 3000, 10, 20);
echo $miAsistente->obtenerDetalles() . "<br>";
echo "Salario: " . $miAsistente->calcularSalario() . "<br>";
echo "Bonificación: " . $miAsistente->calcularBonificacion() . "<br>";
?>
