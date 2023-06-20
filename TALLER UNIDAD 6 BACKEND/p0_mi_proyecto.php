<?php
include 'db/conexion_proyecto_backend.php';

$query = mysqli_query($conexion_proyecto,"SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_proyecto.css">
    

    <title>Document</title>
</head>
<body>
    <div>
        <a href="index.html#section-respuestas">   
        <img class="home" src="img/hogar.png" alt="">
        </a>
    </div>    

    <h2>Proyecto ATENEA - Universidad Distrital Francisco Jóse de Caldas</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="back_mi_proyecto/register.php" method="POST">
                <h1>Crear Cuenta</h1>
                <div class="social-container">
                    <img src="http://idexud.udistrital.edu.co/wp-content/uploads/2023/02/logo_universidad_acreditacion.png" alt="">
                </div>
                <span>Use el siguiente formulario para realziar el registro</span>
                <input type="text" name="nombre" placeholder="Digite Nombre" />
                <input type="email" name="correo" placeholder="Digite Email" />
                <input type="password" name="contra" placeholder="Contraseña" />
                <button type="submit" name="registro">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="back_mi_proyecto/validar.php" method="POST">
                <h1>Iniciar Sesión</h1>
                <div class="social-container">
                    <img src="http://idexud.udistrital.edu.co/wp-content/uploads/2023/02/logo_universidad_acreditacion.png" alt="">
                </div>
                <span>Ingrese su cuenta</span>
                <input type="email" name="correo" placeholder="Email" />
                <input type="password" name="contra" placeholder="Password" />
                <button type="submit" name="inicio">Ingresar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido de nuevo</h1>
                    <p>Si ya cuenta con un registro, ingrese al apartado de inicio de sesion</p>
                    <button class="ghost" id="signIn">Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Bienvenidos</h1>
                    <p>Ingrese sus datos personales para el registro</p>
                    <button class="ghost" id="signUp">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script_proyecto.js"></script>
</body>
</html>