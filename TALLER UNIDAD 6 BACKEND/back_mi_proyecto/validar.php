<?php

session_start();

    include '../db/conexion_proyecto_backend.php';
    if (isset($_POST['inicio'])) {
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        $contra_enc = base64_encode($contra);
        echo $contra_enc;
        $consulta = mysqli_query($conexion_proyecto,"SELECT correo, clave from clientes
        where correo = '$correo' AND clave = '$contra_enc'");
    
        $cant = mysqli_num_rows($consulta);
    
        if ($cant == 1) {
            while ($captura = mysqli_fetch_array($consulta)) {
                $_SESSION['clientes'] = $captura['nombre']
                $_SESSION['clientes'] = $captura['correo']
                $_SESSION['clientes'] = $captura['contra']
            }

            $_SESSION ['clientes'] =
            
            header('location:../aplicativo/home.php');
        }else{
            echo "No se encontró una cuenta con ese correo y contraseña.";
        }
    
    }
    
?>