<?php
$conexion = new mysqli("localhost", "root", "", "tekuani");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$material = $_POST["material"];
$cantidad = $_POST["cantidad"];
$colores = $_POST["colores"];
$precio_vidrio = 50;
$precio_barro = 80;

$total = 0;
if ($material === 'vidrio') {
    $total = $cantidad * ($precio_vidrio + $colores * 20);
} elseif ($material === 'barro') {
    $total = $cantidad * ($precio_barro + $colores * 20);
}

$descuento = floor($cantidad / 10) * 0.20;
$total_final = $total * (1 - $descuento);

$insert_query = "INSERT INTO consultaTaza (producto, material, colores, cantidad, total) VALUES ";

$insert_query .= "('Taza', '$material', '$colores', '$cantidad', '$total')";

if ($conexion->query($insert_query) === TRUE) {
    header("Location: consultas.php");
} else {
    echo "Error al guardar la cotización: " . $conexion->error;
}

$conexion->close();
?>