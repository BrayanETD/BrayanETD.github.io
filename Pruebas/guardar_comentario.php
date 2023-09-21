<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];
    $fecha = date("Y-m-d H:i:s");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tekuani";

    $conexion = new mysqli($servername, $username, $password, $dbname);
    if ($conexion->connect_error) 
    {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $insertar = "INSERT INTO comentarios (nombre, correo, comentario, fecha) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($insertar);
    $stmt->bind_param("ssss", $nombre, $correo, $comentario, $fecha);

    if ($stmt->execute()) 
    {
        header("Location: Disenos.php");
    } else {
        echo "Error al guardar el comentario: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
