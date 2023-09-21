<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TALLER DE ARTES GRAFICAS TEKUANI</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1A1C22;
            color: #F7F7F7;
        }      
        nav {
            background-color: #191970;
            padding: 10px;
        }
        footer {
        text-align: center;
        background-color:#191970;
        padding: 20px;
        color: #f0f0f0;
        }
        #hero {
            background-image: linear-gradient(rgba(26, 28, 34, 0.8), rgba(26, 28, 34, 0.8)), url('Imagenes/Inicio.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            color: #ffffff;
            text-align: center;
            padding: 10rem 0;
        }
        .hero-content {
            max-width: 500px;
            margin: 0 auto;
            color: #ffffff;
        }
        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .cta-button {
            display: inline-block;
            background-color: #000000;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .cta-button:hover {
            background-color: #3D3A50;
        }
        section {
            padding: 3rem 0;
            text-align: center;
        }
        .servicio {
            margin: 2rem;
        }
        .servicio img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .navbar-top {
        background-color: #191970;
        padding: 8px;
        color: white;
        text-align: start;
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
                        <button class="nav-btn"><a href="Disenos.php">Diseños</a></button>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-top">
                            <button class="nav-btn"><a href="Nosotros.php">Nosotros</a></button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <button onclick="scrollToTop()" class="scroll-to-top">↑</button>
    <section>
        <h1 class="gradient-text">ARTES GRÁFICA Y DISEÑO GRÁFICO</h1>
        <div class="animated-title">
            <h2>TEKUANI</h2>
        </div>
    </section>
    <section id="hero">
        <div class="hero-content">
            <h1>Transformando Ideas en Arte</h1>
            <h2>Servicios de:</h2>
            <h6>Serigrafía > Vasos, Carpetas, Bolsas, Playeras Servilletas</h6>
            <h6>Diseño Gráfico > Tarjetas, Etiquetas, Invitaciones, Diseño e impresión de lonas</h6>
            <h6>Vinil Textil > Playeras, Nombre y números para playeras</h6>
            <h6>Subliminado > Gorras, Carpetas, LLaveros, Tazas, Servilletas</h6>
        </div>
    </section> 
    <section id="servicios">
        <h2>Nuestros Servicios</h2>
        <div class="servicio">
            <img src="Productos/Playeras/Playera5.jpg" alt="Subliminado">
            <h3>Subliminado</h3>
            <p>Transformamos tus diseños en prendas únicas y creativas.</p>
        </div>
        <div class="servicio">
            <img src="Productos/Lonas/Lona2.jpg" alt="Invitaciones">
            <h3>Invitaciones</h3>
            <p>Diseñamos invitaciones personalizadas para tus eventos especiales.</p>
        </div>
        <div class="servicio">
            <img src="Productos/Tazas/Taza3.jpg" alt="Estampado">
            <h3>Estampado</h3>
            <p>Estampamos tus diseños en diferentes superficies con alta calidad.</p>
        </div>
    </section>
    <section>
        <h2>Local 58 planta alta</h2>
        <p>¡Estamos emocionados por trabajar contigo! Contáctanos para más información.</p>
    </section>
    <div class="button-container" id="Galerias">
        <a href="Disenos.php" class="animated-button">Diseños</a>
    </div>
    <footer><p>&copy;2023 Taller de Artes Gráficas Tekuani | Todos Los Derechos Reservados</p></footer>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>