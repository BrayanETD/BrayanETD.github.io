<?php
$conexion = new mysqli("localhost", "root", "", "tekuani");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$metros = $_POST["metros"];
$cantidad = $_POST["cantidad"];
$colores = $_POST["colores"];
$precio_1M = 100;
$precio_2M = 150;
$precio_3M = 200;

$total = 0;
if ($metros === '1M') {
    $total = $cantidad * ($precio_1M + $colores * 20);
} elseif ($metros === '2M') {
    $total = $cantidad * ($precio_2M + $colores * 20);
} elseif ($metros === '3M') {
    $total = $cantidad * ($precio_3M + $colores * 20);
}

$descuento = floor($cantidad / 10) * 0.20;
$total_final = $total * (1 - $descuento);

$insert_query = "INSERT INTO consultaLona (producto, tamanio, colores, cantidad, total) VALUES ";

$insert_query .= "('Lona', '$metros', '$colores', '$cantidad', '$total')";

if ($conexion->query($insert_query) === TRUE) {
    header("Location: consultas.php");
} else {
    echo "Error al guardar la cotización: " . $conexion->error;
}

$conexion->close();
?>