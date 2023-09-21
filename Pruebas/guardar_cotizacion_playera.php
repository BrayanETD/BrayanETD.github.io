<?php
$conexion = new mysqli("localhost", "root", "", "tekuani");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$tallas = $_POST["tallas"];
$cantidad = $_POST["cantidad"];
$colores = $_POST["colores"];
$precio_ch = 30;
$precio_m = 40;
$precio_g = 50;

$total = 0;
if ($tallas === 'CH') {
    $total = $cantidad * ($precio_ch + $colores * 20);
} elseif ($tallas === 'M') {
    $total = $cantidad * ($precio_m + $colores * 20);
} elseif ($tallas === 'G') {
    $total = $cantidad * ($precio_g + $colores * 20);
}

$descuento = floor($cantidad / 10) * 0.20;
$total_final = $total * (1 - $descuento);

$insert_query = "INSERT INTO consultaPlayera (producto, tamanio, colores, cantidad, total) VALUES ";

$insert_query .= "('Playera', '$tallas', '$colores', '$cantidad', '$total')";

if ($conexion->query($insert_query) === TRUE) {
    header("Location: consultas.php");
} else {
    echo "Error al guardar la cotización: " . $conexion->error;
}

$conexion->close();
?>