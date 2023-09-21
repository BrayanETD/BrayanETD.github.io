<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    nav {
        background-color: #000000;
        padding: 10px;
    }
    .navbar-top {
        background-color: #000000;
        padding: 8px;
        color: white;
        text-align: start;
    }
    .nav-dropdown-content {
        display: none;
        position: absolute;
        background-color:#000000;
        box-shadow: 0px 8px 18px 0px rgba(234, 0, 255, 0.426);
        z-index: 1;
        opacity: 0;
        transition: opacity 2s ease;
        cursor: default;
    }footer {
        text-align: center;
        background-color:#000000;
        padding: 20px;
        color: #f0f0f0;
    }
    .navbar-top .nav-btn:hover {
        background-color:#4c4c4c;
    }
    .nav-dropdown-content a:hover {
        background-color: #4c4c4c;
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
                                <a onclick="scrollToSection('Diseños')" href="Disenos.php">Diseños</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-top">
                        <button class="nav-btn" onclick="scrollToSection('cotizador')"><a href="index.php">Inicio</a></button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <button onclick="scrollToTop()" class="scroll-to-top">↑</button>
    <!--Historia-->
    <div class="historia" id="historia">
        <div class="separador">
            <div class="logo-container">
                <img id="logo" src="Imagenes/Inicio.jpg" alt="" class="logo">
            </div>
            <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, est veniam ullam incidunt officiis aut magnam. Molestias dolorem laboriosam laborum, nostrum blanditiis labore nesciunt dolor perspiciatis, iure consequatur animi possimus!</h2>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla fugiat laborum aliquid aspernatur sunt. Excepturi laborum, distinctio incidunt id fugiat voluptas dicta eaque deserunt eligendi voluptate temporibus quod quae accusantium.</h2>
        </div>
    </div>
    <!-- Carrusel Automatico -->
    <section class="autoC">
        <h1 id="textEffect">Zitlala Guerrero</h1>
        <div class="carousell-container">
            <div class="carousell-slide">
                <div class="carousell-item">
                    <div class="carousell-image">
                        <img src="Productos/Lonas/Lona5.jpg" alt="Imagen 1">
                    </div>
                </div>
                <div class="carousell-item">
                    <div class="carousell-image">
                        <img src="Productos/Gorras/Gorra11.jpg" alt="Imagen 2">
                    </div>
                </div>
                <div class="carousell-item">
                    <div class="carousell-image">
                        <img src="Productos/Lonas/Lona5.jpg" alt="Imagen 3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>&copy;2023 Taller de Artes Gráficas Tekuani | Todos Los Derechos Reservados</footer>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>