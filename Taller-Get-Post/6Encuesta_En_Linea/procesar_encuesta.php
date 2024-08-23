<?php
if (isset($_GET['opcion'])) {
    $opcion = $_GET['opcion'];

    // Leer las respuestas actuales del archivo
    $archivo = "resultados_encuesta.txt";
    $resultados = array();

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        $resultados = json_decode($contenido, true);
    }

    // Incrementar el conteo de la opción seleccionada
    if (isset($resultados[$opcion])) {
        $resultados[$opcion]++;
    } else {
        $resultados[$opcion] = 1;
    }

    // Guardar los resultados actualizados en el archivo
    file_put_contents($archivo, json_encode($resultados));

    // Redirigir a la página de resultados
    header("Location: resultados_encuesta.php");
    exit();
} else {
    echo "<h2>Error</h2>";
    echo "<p>No se seleccionó ninguna opción.</p>";
}
?>
