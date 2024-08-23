<?php
include 'articulos.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Artículos</title>
</head>
<body>
    <h2>Listado de Artículos</h2>
    <ul>
        <?php foreach ($articulos as $id => $articulo): ?>
            <li>
                <a href="detalle_articulo.php?id=<?php echo $id; ?>">
                    <?php echo $articulo['titulo']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
