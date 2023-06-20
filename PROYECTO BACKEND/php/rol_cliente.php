<?php
session_start();
include '../db/conexion.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: ./inicio_sesion.php');
    exit();
} else {
    // Código para inactividad de página web
        
    if ((time() - $_SESSION['time']) > (20 * 60)) { 
        header('Location: ../db/logout.php');
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name_car = $_POST['name_car'];
    $sold_car = $_POST['sold_car'];

    // Enviar los datos a la tabla del administrador
    $insert_query = "INSERT INTO carros (marca, ventas) VALUES ('$name_car', $sold_car)";
    mysqli_query($conexion, $insert_query);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rol_cliente.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Llamado a librerias -->
    <script src="https://cdn.plot.ly/plotly-2.20.0.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js'></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>
    <title>Proyecto de gráficas</title>
</head>
<body>
    <section id="content-main">
        <div class="sidebar">
            <img src="../img/icono/icon-128x128.png" alt="Logo">
            <nav>
                <ul>
                    <li><span class="material-symbols-outlined">account_circle</span></li>
                    <li><a href=""><i class="fa-solid fa-wallet"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-comments"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-gift"></i></a></li>
                </ul>
            </nav>
            <div class="icon-logout">
                <a href="./inicio_sesion.php"
                    <span class="material-symbols-outlined">logout</span>
                </a>
                <h3>SALIDA<h3>
            </div>
        </div>
        <div class="product-visualization">
            <h3>Visualización 3D</h3>
            <div class="sketchfab-embed-wrapper"> <iframe title="" frameborder="0" allowfullscreen="" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="" execution-while-out-of-viewport="" execution-while-not-rendered="" web-share="" src="https://sketchfab.com/models/aebd65bb0f124e1ea7bf8f1ba5a888c2/embed"> </iframe> </div>
            <div class="sketchfab-embed-wrapper"> <iframe title="" frameborder="0" allowfullscreen="" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="" execution-while-out-of-viewport="" execution-while-not-rendered="" web-share="" src="https://sketchfab.com/models/109b2e8c73a84ed6a54f0a31d7037156/embed"> </iframe> </div>
            <div class="sketchfab-embed-wrapper"> <iframe title="" frameborder="0" allowfullscreen="" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="" execution-while-out-of-viewport="" execution-while-not-rendered="" web-share="" src="https://sketchfab.com/models/02eab418b1354e2b908c81bf343b9ffe/embed"> </iframe> </div>
        </div>
        <div class="data-table">
            <h3>DETALLES Y PRECIOS</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Silla</td>
                        <td>Silla de madera</td>
                        <td>$79.900</td>
                    </tr>
                    <tr>
                        <td>Sillon</td>
                        <td>Sillon sala</td>
                        <td>$189.900</td>
                    </tr>
                    <tr>
                        <td>Cesta</td>
                        <td>Cesta picnic</td>
                        <td>$49.900</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>

