<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h2>Lista de Tareas</h2>
    <?php
    // Leer las tareas desde el archivo
    $archivo = "tareas.txt";
    $tareas = array();

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        $tareas = json_decode($contenido, true);
    }

    if (!empty($tareas)) {
        echo "<ul>";
        foreach ($tareas as $tarea) {
            $id = $tarea['id'];
            $titulo = $tarea['titulo'];
            $descripcion = $tarea['descripcion'];
            $prioridad = $tarea['prioridad'];
            $completada = $tarea['completada'] ? " (Completada)" : "";

            echo "<li>";
            echo "<strong>$titulo</strong> - $descripcion (Prioridad: $prioridad)$completada";
            if (!$tarea['completada']) {
                echo " - <a href='marcar_completada.php?id=$id'>Marcar como completada</a>";
            }
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay tareas pendientes.</p>";
    }
    ?>
    <br>
    <a href="index.html">Agregar nueva tarea</a>
</body>
</html>
