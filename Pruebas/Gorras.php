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
$sql = "SELECT * FROM gorras";
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
    <title>Gorras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    select,
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
    @media (max-width: 768px) {
        form {
            padding: 10px;
        }
        select,
        input[type="number"] {
            font-size: 14px;
            padding: 8px;
        }
        button {
            font-size: 14px;
    }
}
    .red {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .whatsapp-link {
        background-color: #25d366;
        color: #fff;
        padding: 15px 30px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        display: inline-block;
        margin: 10px;
    }
    .facebook-link {
        background-color: #1877f2;
        color: #fff;
        padding: 15px 30px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        display: inline-block;
        margin: 10px;
    }
    </style>
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
                                <a onclick="scrollToSection('G2')" href="Tazas.php">Tazas</a>
                                <a onclick="scrollToSection('G3')" href="Playeras.php">Playeras</a>
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
    <button onclick="scrollToTop()" class="scroll-to-top">↑</button>
    <!-- Galerias -->
    <main>
        <section class="seccion">
            <div class="G1" id="G1">
                <h1>Gorras</h1>
            </div>
            <div class="containerG">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="galeria">';
                        echo '<div class="foto">';
                        echo '<img src="' . $row["imagen"] . '" alt="">'; 
                        echo '</div>';
                        echo '<div class="pie">';
                        echo '<p>' . $row["nombre"] . '</p>'; 
                        echo '<p>$' . $row["precio"] . '</p>';
                        echo '<form method="post">';
                        echo '<input type="hidden" name="producto_id" value="' . $row["id"] . '">';
                        echo '<input type="submit" name="agregar_carrito" value="Agregar al carrito">';
                        echo '</form>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No se encontraron resultados.";
                }
                $conn->close();
                ?>
            </div>
        </section>
    </main>
    <div class="red">
        <a class="whatsapp-link" href="https://wa.me/756106">Enviar mensaje por WhatsApp</a>
        <a class="facebook-link" href="https://www.facebook.com/people/Taller-de-artes-Gr%C3%A1fica-Tekuani/100087455481485/">Visitar nuestra página de Facebook</a>
    </div>
    <form method="post" action="guardar_cotizacion_gorra.php">
        <h2>Cotizador de Gorras</h2>
        <P>Playera:$50
        <p>Promociones:</p>
        <p>Por cada 10 productos, obtiene un 20% de descuento.</p>
        <p>Por cada color, son $20 adicionales.</p>
        <label for="cantidad">Cantidad de playeras:</label>
        <input type="number" id="cantidad" name="cantidad" min="0" required><br>
        <label for="colores">Seleccione cantidad de colores:</label>
        <input type="number" id="colores" name="colores" min="0" required><br>
        <button type="submit">Hacer cotización</button>
    </form>
    <div class="button-container" id="Galerias">
        <a href="index.php" class="animated-button">INICIO</a>
    </div>
    <footer>&copy;2023 Taller de Artes Gráficas Tekuani | Todos Los Derechos Reservados</footer>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
