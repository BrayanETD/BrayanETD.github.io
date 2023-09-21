<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseños</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        margin: 0;
        padding: 0;
        background-color: #483D8B;
        color: #F7F7F7;
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
                                <a onclick="scrollToSection('G1')" href="Tazas.php">Tazas</a>
                                <a onclick="scrollToSection('G2')" href="Playeras.php">Playeras</a>
                                <a onclick="scrollToSection('G3')" href="Gorras.php">Gorras</a>
                                <a onclick="scrollToSection('G4')" href="Lonas.php">Lonas</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-top">
                        <button class="nav-btn" onclick="scrollToSection('historia')"><a href="Nosotros.php">Nosotros</a></button>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-top">
                            <button class="nav-btn"><a href="consultas.php">Consultas</a></button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <button onclick="scrollToTop()" class="scroll-to-top">↑</button>
    <!-- Seccion de productos -->
    <div class="producttos" id="Diseños">
        <br>
        <div class="image-container">
            <img src="Productos/Gorras/Gorra1.jpg" alt="Imagen 1" width="300" height="200">
        <div class="info-box">
            <p>Gorras con sublimado</p>
            <p>Totalmente personalizado el diseño</p>
        </div>
        </div>
        <div class="image-container">
            <img src="Productos/Lonas/Lona3.jpg" alt="Imagen 2" width="300" height="200">
        <div class="info-box">
            <p>Lonas de medidas deseadas</p>
            <p>Diseño personalizado</p>
        </div>
        </div>
        <div class="image-container">
            <img src="Productos/Playeras/Playera3.jpg" alt="Imagen 2" width="300" height="200">
        <div class="info-box">
            <p>Playeras de todas las tallas</p>
            <p>Diseños unicos y personalizados</p>
        </div>
        </div>
        <div class="image-container">
            <img src="Productos/Tazas/Taza12.jpg" alt="Imagen 2" width="300" height="200">
        <div class="info-box">
            <p>Tazas personalizadas</p>
            <p>Personalizado para esos eventos especiales</p>
        </div>
        </div>
    </div>
    <h1 style="font-size: 32px;
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 60px;
    align-items: center;
    text-align: center;
    margin-bottom: 10px;">Querido cliente, tu opinión es fundamental para nosotros</h1>
    <h2 style=" font-size: 24px;
    font-family: 'Times New Roman', Times, serif;
    padding: 20px;
    text-align: center;
    align-items: center;">En nombre del Taller Tekuani, valoramos profundamente tu experiencia y<br>
    queremos asegurarnos de que cada aspecto de nuestros productos y servicios esté a la altura de tus expectativas.<br>
    Tu voz es esencial para ayudarnos a mejorar y crecer.
    </h2>
    <!-- Comentarios -->
    <div class="comentario">
    <form method="post" action="guardar_comentario.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" required>
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" rows="4" required></textarea>
        <input type="submit" value="Enviar Comentario">
    </form>
    <div class="comments" style="color: #000000;">
        <h2>Comentarios:</h2>
        <div id="comentariosContainer">
            <?php
            $conexion = new mysqli("localhost", "root", "", "tekuani");
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }
            $consulta = "SELECT nombre, comentario, fecha FROM comentarios ORDER BY fecha DESC LIMIT 5";
            $resultado = $conexion->query($consulta);
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $fechaHora = new DateTime($fila["fecha"]);
                    $fechaHoraFormato12 = $fechaHora->format("n/j/Y g:i A");
                    $fechaHoraFormato12 = date_create($fechaHoraFormato12, new DateTimeZone('America/Mexico_City'));
                    
                    echo "<p><strong>" . $fila["nombre"] . "</strong> (" . $fechaHoraFormato12->format("n/j/Y g:i A") . "):<br>";
                    echo $fila["comentario"] . "</p>";
                }
            } else {
                echo "No hay comentarios aún.";
            }
            $conexion->close();
            ?>
        </div>
        <button id="mostrarMasComentarios" class="btn btn-primary">Mostrar Más</button>
    </div>
    </div>
    <footer>&copy;2023 Taller de Artes Gráficas Tekuani | Todos Los Derechos Reservados</footer>
    <script>
    let offset = 0;
    // Función para cargar más comentarios
    function cargarMasComentarios() {
        const comentariosContainer = document.getElementById("comentariosContainer");
        const botonMostrarMas = document.getElementById("mostrarMasComentarios");
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "obtener_comentarios.php?offset=" + offset, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) 
            {
                comentariosContainer.innerHTML += xhr.responseText;
                offset += 5;
                if (xhr.responseText.trim() === "") {
                    botonMostrarMas.style.display = "none";
                }
            }
        };
        xhr.send();
    }
    document.getElementById("mostrarMasComentarios").addEventListener("click", cargarMasComentarios);
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>