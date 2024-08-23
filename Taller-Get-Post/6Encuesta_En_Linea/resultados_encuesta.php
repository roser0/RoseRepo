<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Encuesta</title>
</head>
<body>
    <h2>Resultados de la Encuesta</h2>
    <?php
    // Leer los resultados desde el archivo
    $archivo = "resultados_encuesta.txt";
    $resultados = array();

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        $resultados = json_decode($contenido, true);
    }

    if (!empty($resultados)) {
        echo "<ul>";
        foreach ($resultados as $opcion => $cantidad) {
            echo "<li>$opcion: $cantidad votos</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay resultados disponibles.</p>";
    }
    ?>
    <br>
    <a href="index.html">Volver a la encuesta</a>
</body>
</html>
