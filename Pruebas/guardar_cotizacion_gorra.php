<?php
$conexion = new mysqli("localhost", "root", "", "tekuani");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$cantidad = $_POST["cantidad"];
$colores = $_POST["colores"];
$precio = 50;

$total = 0;

$descuento = floor($cantidad / 10) * 0.20;
$total_final = $total * (1 - $descuento);

$insert_query = "INSERT INTO consultagorra (producto, colores, cantidad, total) VALUES ";

$insert_query .= "('gorras', '$colores', '$cantidad', '$total')";

if ($conexion->query($insert_query) === TRUE) {
    header("Location: consultas.php");
} else {
    echo "Error al guardar la cotización: " . $conexion->error;
}

$conexion->close();
?>