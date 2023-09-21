<?php
session_start();
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "tekuani";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
$sql = "SELECT * FROM tazas";
$result = $conn->query($sql);

if (isset($_POST["agregar_carrito"])) {
    $producto_id = $_POST["producto_id"];
    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = array();
    }
    $_SESSION["carrito"][] = $producto_id;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tazas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Barra de navegacion-->
    <nav class="navbar navbar-expand-md">
        <div class="narvar">
            <a class="navbar-brand" href="#">
                <h1 class="tekuanitext">TALLER GRAFICO TEKUANI</h1>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon" 
            style=
            "color: #f0f0f0;
            display: flex;
            font-weight: bold;
            font-size: 24px;
            justify-content: center;
            align-items: center;"
            >≡</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="navbar-top">
                        <div class="nav-dropdown">
                            <button class="nav-btn">Productos</button>
                            <div class="nav-dropdown-content">
                                <a onclick="scrollToSection('G2')" href="Playeras.php">Playeras</a>
                                <a onclick="scrollToSection('G3')" href="Gorras.php">Gorras</a>
                                <a onclick="scrollToSection('G4')" href="Lonas.php">Lonas</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-top">
                        <button class="nav-btn"><a href="Nosotros.php">Nosotros</a></button>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-top">
                        <button class="nav-btn"><a href="carrito.php">Carrito</a></button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <h1>Carrito de Compras</h1>
    <?php
    if (isset($_SESSION["carrito"]) && count($_SESSION["carrito"]) > 0) {
        echo '<ul>';
        foreach ($_SESSION["carrito"] as $producto_id) {
            echo '<li>Producto ID: ' . $producto_id . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>El carrito de compras está vacío.</p>';
    }
    ?>
    <a href="Disenos.php">Volver a la tienda</a>
</body>
</html>


