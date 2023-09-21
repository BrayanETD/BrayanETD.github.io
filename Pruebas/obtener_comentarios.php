<?php
$conexion = new mysqli("localhost", "root", "", "tekuani");
if ($conexion->connect_error) 
{
    die("Error de conexión: " . $conexion->connect_error);
}

$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
$consulta = "SELECT nombre, comentario, fecha FROM comentarios ORDER BY fecha DESC LIMIT 5 OFFSET $offset";
$resultado = $conexion->query($consulta);
$htmlComentarios = "";

if ($resultado->num_rows > 0) 
{
    while ($fila = $resultado->fetch_assoc()) 
    {
        $htmlComentarios .= "<p><strong>" . $fila["nombre"] . "</strong> (" . $fila["fecha"] . "):<br>";
        $htmlComentarios .= $fila["comentario"] . "</p>";
    }
}

$conexion->close();

echo $htmlComentarios;
?>
