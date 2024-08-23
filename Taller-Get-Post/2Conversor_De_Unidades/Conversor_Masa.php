<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Masa</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label for="cantidad">Ingrese la cantidad que desee convertir</label>
        <input type="number" name="cantidad" id="cantidad"> <br> <br>
        <label for="origen">Ingrese la unidad de origen</label>
        <select name="origen" id="origen">
            <option value="Libras">Libras</option>
            <option value="Kilogramos">Kilogramos</option>
            <option value="Gramos">Gramos</option>
        </select> <br> <br>
        <label for="destino">Ingrese la unidad de destino</label>
        <select name="destino" id="destino">
            <option value="Libras">Libras</option>
            <option value="Kilogramos">Kilogramos</option>
            <option value="Gramos">Gramos</option>
        </select> <br> <br>

        <input type="submit" name="submit" value="Conversión">
    </form>

    <?php
    if (isset($_POST['submit'])){
        $libras = !empty($_POST['Libras']);
        $kilogramos = !empty($_POST['Kilogramos']);
        $gramos = !empty($_POST['Gramos']);
        $cantidad = $_POST['cantidad'];
        $origen = $_POST['origen'];
        $destino = $_POST['destino'];
        $resultado = 0;
    }

    if($origen == "Libras" && $destino == "Kilogramos") {
        $resultado = $cantidad * 0.453; 
        echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino;
    } elseif ($origen == "Libras" && $destino == "Gramos"){
        $resultado = $cantidad * 453.59;
        echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino;
    } elseif ($origen == "Kilogramos" && $destino == "Libras"){
        $resultado = $cantidad * 2.204; 
        echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino;
    } elseif ($origen == "Kilogramos" && $destino == "Gramos") {
        $resultado = $cantidad * 1000; 
        echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino;
    } elseif ($origen == "Gramos" && $destino == "Libras") {
        $resultado = $cantidad * 0.002204;
        echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino;
    } elseif ($origen == "Gramos" && $destino == "Kilogramos"){
        $resultado = $cantidad * 0.001;
        echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino;
    } else {
        echo "Conversión no valida";
    }
    ?> 
</body>
</html>