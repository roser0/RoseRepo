<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $titulo = htmlspecialchars($_POST['titulo']);
    $descripcion = htmlspecialchars($_POST['descripcion']);
    $prioridad = htmlspecialchars($_POST['prioridad']);

    // Leer las tareas actuales del archivo
    $archivo = "tareas.txt";
    $tareas = array();

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        $tareas = json_decode($contenido, true);
    }

    // Crear una nueva tarea
    $nuevaTarea = array(
        "id" => uniqid(),
        "titulo" => $titulo,
        "descripcion" => $descripcion,
        "prioridad" => $prioridad,
        "completada" => false
    );

    // Agregar la nueva tarea al array de tareas
    $tareas[] = $nuevaTarea;

    // Guardar el array actualizado en el archivo
    file_put_contents($archivo, json_encode($tareas));

    // Redirigir a la página de listado de tareas
    header("Location: listar_tareas.php");
    exit();
}
?>