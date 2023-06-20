<?php
include '../db/conexion.php';

if (isset($_POST['inicio'])) {
    if (!empty($_POST['correo']) && !empty($_POST['contra'])) {
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        $contra_enc = base64_encode($contra);

        $consulta = mysqli_query($conexion, "SELECT * FROM usuarios 
        WHERE correo = '$correo' AND clave = '$contra_enc'");

        $cant = mysqli_num_rows($consulta);

        if ($cant == 1) {
            $captura = mysqli_fetch_array($consulta);
            session_start();
            $_SESSION['usuario'] = $captura['nombre'];
            $_SESSION['rol'] = $captura['rol'];
            $_SESSION['correo'] = $captura['correo'];
            $_SESSION['time'] = time();

            $rol = $captura['rol'];

            if ($rol == null || $rol == 1) {
                header('Location: ./rol_cliente.php');
                exit();
            } elseif ($rol == 2) {
                header('Location: ./rol_admin.php');
                exit();
            } else {
                header('Location: ./inicio_sesion.php');
                exit();
            }
        } else {
            header('Location: ./inicio_sesion.php');
            exit();
        }
    } else {
        header('Location: ./inicio_sesion.php');
        exit();
    }
}
?>

