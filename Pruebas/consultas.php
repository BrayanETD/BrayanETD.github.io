<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Consultas</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
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
                        <button class="nav-btn"><a href="index.php">Inicio</a></button>
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
    <!-- Consultas -->
    <div class="container">
        <h1>Consultas Realizadas</h1>
        <label for="filtroProducto">Filtrar por producto:</label>
        <select id="filtroProducto">
            <option value="">Todos los productos</option>
            <option value="Taza">Tazas</option>
            <option value="Playera">Playeras</option>
            <option value="Gorras">Gorras</option>
            <option value="Lonas">Lonas</option>
        </select>
        <table id="consultasTable" class="display">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Tamaño o Material</th>
                    <th>Colores</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexion = new mysqli("localhost", "root", "", "tekuani");
                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }
                $consulta = "SELECT producto, tamanio, colores, cantidad, total FROM consultaPlayera";
                $resultado = $conexion->query($consulta);
                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila["producto"] . "</td>";
                        echo "<td>" . $fila["tamanio"] . "</td>";
                        echo "<td>" . $fila["colores"] . "</td>";
                        echo "<td>" . $fila["cantidad"] . "</td>";
                        echo "<td>" . $fila["total"] . "</td>";
                        echo "</tr>";
                    }
                }
                $consulta = "SELECT producto, material, colores, cantidad, total FROM consultaTaza";
                $resultado = $conexion->query($consulta);
                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila["producto"] . "</td>";
                        echo "<td>" . $fila["material"] . "</td>";
                        echo "<td>" . $fila["colores"] . "</td>";
                        echo "<td>" . $fila["cantidad"] . "</td>";
                        echo "<td>" . $fila["total"] . "</td>";
                        echo "</tr>";
                    }
                }
                $consulta = "SELECT producto, tamanio, colores, cantidad, total FROM consultaLona";
                $resultado = $conexion->query($consulta);
                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila["producto"] . "</td>";
                        echo "<td>" . $fila["tamanio"] . "</td>";
                        echo "<td>" . $fila["colores"] . "</td>";
                        echo "<td>" . $fila["cantidad"] . "</td>";
                        echo "<td>" . $fila["total"] . "</td>";
                        echo "</tr>";
                    }
                }
                $conexion->close();
                $consulta = "SELECT producto, colores, cantidad, total FROM consultaLona";
                $resultado = $conexion->query($consulta);
                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila["producto"] . "</td>";
                        echo "<td>" . $fila["colores"] . "</td>";
                        echo "<td>" . $fila["cantidad"] . "</td>";
                        echo "<td>" . $fila["total"] . "</td>";
                        echo "</tr>";
                    }
                }
                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>
    <footer>&copy;2023 Taller de Artes Gráficas Tekuani | Todos Los Derechos Reservados</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#consultasTable').DataTable();
            $('#filtroProducto').on('change', function() {
                var selectedProducto = $(this).val();
                table.column(0).search(selectedProducto).draw();
            });
        });
    </script>

</body>
</html>
