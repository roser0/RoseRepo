<?php
session_start();

if (isset($_GET['opcion'])) {
    // Obtener la opción seleccionada
    $opcion = $_GET['opcion'];

    // Leer los votos actuales del archivo
    $archivo = "votos.txt";
    $votos = array();

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        $votos = json_decode($contenido, true);
    }

    // Incrementar el voto para la opción seleccionada
    if (isset($votos[$opcion])) {
        $votos[$opcion]++;
    } else {
        $votos[$opcion] = 1;
    }

    // Guardar los votos actualizados en el archivo
    file_put_contents($archivo, json_encode($votos));

    // Guardar la opción votada en una variable de sesión para evitar votos duplicados
    $_SESSION['votado'] = true;

    // Mostrar los resultados de la votación
    echo "<h2>Resultados de la Votación</h2>";
    foreach ($votos as $lenguaje => $cantidad) {
        echo "<p>$lenguaje: $cantidad votos</p>";
    }

    echo "<p>Gracias por votar por $opcion.</p>";
} else {
    echo "<h2>Error</h2>";
    echo "<p>No se seleccionó ninguna opción.</p>";
}
?>