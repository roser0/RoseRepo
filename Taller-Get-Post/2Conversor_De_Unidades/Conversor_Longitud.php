<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de longitud</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <label for="cantidad">Ingrese la cantidad que desea convertir</label> 
    <input type="number" name="cantidad" id="cantidad"> <br> <br>
    <label for="origen">Ingrese unidad de origen</label>
    <select name="origen" id="origen">
        <option value="Metros">Metros</option>
        <option value="Kilometros">Kilometros</option>
        <option value="Centimetros">Centimetros</option>
        <option value="Pies">Pies</option>
        <option value="Pulgadas">Pulgadas</option>
    </select> <br> <br>
    <label for="destino">Ingrese la unidad de destino</label>
    <select name="destino" id="destino">
        <option value="Metros">Metros</option>
        <option value="Kilometros">Kilometros</option>
        <option value="Centimetros">Centimetros</option>
        <option value="Pies">Pies</option>
        <option value="Pulgadas">Pulgadas</option>
    </select> <br> <br>

    <input type="submit" name="submit" value="Convertir" > 
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $metro = !empty($_POST['Metros']);
            $kilometro = !empty($_POST['Kilometros']);
            $centimetro = !empty($_POST['Centimetros']);
            $pie = !empty($_POST['Pies']);
            $pulgada = !empty($_POST['Pulgadas']);
            $origen = $_POST['origen'];
            $destino = $_POST['destino'];
            $cantidad = $_POST['cantidad'];
            $resultado = 0;
        }


        if($origen == "Metros" && $destino == "Kilometros"){
            $resultado = $cantidad * 0.001;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Metros" && $destino == "Centimetros"){
            $resultado = $cantidad *100;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino;
        } elseif ($origen == "Metros" && $destino == "Pies"){
            $resultado = $cantidad * 3.280; 
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino;
        } elseif ($origen == "Metros" && $destino == "Pulgadas") {
            $resultado = $cantidad * 39.37;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Kilometros" && $destino == "Metros") {
            $resultado = $cantidad * 1000;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Kilometros" && $destino == "Centimetros") {
            $resultado = $cantidad * 100000;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Kilometros" && $destino == "Pies") {
            $resultado = $cantidad * 3280.83;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Kilometros" && $destino == "Pulgadas") {
            $resultado = $cantidad * 39370.07;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        }  elseif ($origen == "Centimetros" && $destino == "Metros") {
            $resultado = $cantidad * 0.01;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Centimetros" && $destino == "Kilometros") {
            $resultado = $cantidad * 0.00001;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Centimetros" && $destino == "Pies") {
            $resultado = $cantidad * 0.032;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Centimetros" && $destino == "Pulgadas") {
            $resultado = $cantidad * 0.393;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        }  elseif ($origen == "Pies" && $destino == "Metros") {
            $resultado = $cantidad * 0.3048;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Pies" && $destino == "Kilometros") {
            $resultado = $cantidad * 0.0003048;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Pies" && $destino == "Centimetros") {
            $resultado = $cantidad * 30.48;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Pies" && $destino == "Pulgadas") {
            $resultado = $cantidad * 12;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        }  elseif ($origen == "Pulgadas" && $destino == "Metros") {
            $resultado = $cantidad * 0.0254;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Pulgadas" && $destino == "Kilometros") {
            $resultado = $cantidad * 0.0000254;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Pulgadas" && $destino == "Centimetros") {
            $resultado = $cantidad * 2.54;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } elseif ($origen == "Pulgadas" && $destino == "Pies") {
            $resultado = $cantidad * 0.08333;
            echo "Su conversión de " . $cantidad . " ". $origen . " a " . $destino  . " es: " . $resultado . " ". $destino; 
        } else {
            echo "Conversión no valida";
        }

?>
</body>
</html>