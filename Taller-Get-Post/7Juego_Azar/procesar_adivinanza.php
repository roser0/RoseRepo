<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_ingresado = intval($_POST['numero']);
    $numero_aleatorio = $_SESSION['numero_aleatorio'];
    $_SESSION['intentos']++;

    if ($numero_ingresado < $numero_aleatorio) {
        $mensaje = "El número es mayor que $numero_ingresado.";
    } elseif ($numero_ingresado > $numero_aleatorio) {
        $mensaje = "El número es menor que $numero_ingresado.";
    } else {
        $mensaje = "¡Correcto! Has adivinado el número $numero_aleatorio en ".$_SESSION['intentos']." intentos.";
        // Reiniciar el juego
        session_destroy();
        echo "<a href='generar_numero.php'>Jugar de nuevo</a>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinar el Número</title>
</head>
<body>
    <h2>Juego de Adivinar el Número</h2>
    <p><?php echo $mensaje; ?></p>
    <form action="procesar_adivinanza.php" method="POST">
        <label for="numero">Ingresa otro número:</label><br>
        <input type="number" id="numero" name="numero" min="1" max="100" required><br><br>
        <input type="submit" value="Adivinar">
    </form>
</body>
</html>
