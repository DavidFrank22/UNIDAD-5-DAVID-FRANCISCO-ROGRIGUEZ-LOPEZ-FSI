<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/sesion.css">

        <title>Document</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="../index.html" class="logo">
                            <img src="../img/iconos/door_back.png" alt="Logo inicial" class="initial-logo">
                            <img src="../img/iconos/door_back_open.png" alt="Logo reemplazado" class="replacement-logo">
                            <span class="text">REGRESAR</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="contenido">
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form action="./register.php" method="POST">
                    <h1>Crear Cuenta</h1>
                        <div class="social-container">
                            <img src="../img/logo/logosin.png" alt="">
                        </div>
                        <span>Use el siguiente formulario para realziar el registro</span>
                        <input type="text" name="nombre" placeholder="Digite Nombre" />
                        <input type="email" name="correo" placeholder="Digite Email" />
                        <input type="password" name="contra" placeholder="Contraseña" />
                        <button type="submit" name="registro">Registrarse</button>
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form action="./validar.php" method="POST">
                        <h1>Iniciar Sesión</h1>
                        <div class="social-container">
                        <img src="../img/logo/logosin.png" alt="">
                        </div>
                        <span>Ingrese a su cuenta</span>
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
        </section>

        <script src="../js/script.js"></script>
    </body>
</html>