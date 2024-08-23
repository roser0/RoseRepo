<?php
session_start();

// Generar un número aleatorio entre 1 y 100
$_SESSION['numero_aleatorio'] = rand(1, 100);
$_SESSION['intentos'] = 0;

// Redirigir al formulario para comenzar el juego
header("Location: adivinar_numero.html");
exit();
?>
