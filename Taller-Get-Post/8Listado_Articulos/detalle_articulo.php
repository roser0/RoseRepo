<?php
include 'articulos.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    if (isset($articulos[$id])) {
        $articulo = $articulos[$id];
    } else {
        $mensaje = "El artículo no existe.";
    }
} else {
    $mensaje = "No se ha seleccionado ningún artículo.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Artículo</title>
</head>
<body>
    <h2>Detalle del Artículo</h2>

    <?php if (isset($articulo)): ?>
        <h3><?php echo $articulo['titulo']; ?></h3>
        <p><?php echo $articulo['descripcion']; ?></p>
        <p><strong>Precio:</strong> $<?php echo number_format($articulo['precio'], 2); ?></p>
    <?php else: ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <br>
    <a href="lista_articulos.php">Volver al listado</a>
</body>
</html>
