<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Leer las tareas actuales del archivo
    $archivo = "tareas.txt";
    $tareas = array();

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        $tareas = json_decode($contenido, true);
    }

    // Buscar la tarea y marcarla como completada
    foreach ($tareas as &$tarea) {
        if ($tarea['id'] === $id) {
            $tarea['completada'] = true;
            break;
        }
    }

    // Guardar el array actualizado en el archivo
    file_put_contents($archivo, json_encode($tareas));

    // Redirigir a la página de listado de tareas
    header("Location: listar_tareas.php");
    exit();
} else {
    echo "<p>ID de tarea no proporcionado.</p>";
}
?>
