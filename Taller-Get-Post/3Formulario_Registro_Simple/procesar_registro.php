<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash de la contraseña

    // Guardar los datos en un archivo de texto
    $file = fopen("usuarios.txt", "a");
    fwrite($file, "Nombre: $nombre\nApellido: $apellido\nCorreo Electrónico: $email\nContraseña: $password\n\n");
    fclose($file);

    // Mostrar un mensaje de confirmación
    echo "<h2>Registro completado</h2>";
    echo "<p>Gracias por registrarte, $nombre $apellido.</p>";
} else {
    echo "<h2>Error en el registro</h2>";
    echo "<p>Hubo un problema al procesar tu solicitud.</p>";
}
?>