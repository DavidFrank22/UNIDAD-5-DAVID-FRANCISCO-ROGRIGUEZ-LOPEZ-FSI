<?php

include '../db/conexion_proyecto_backend.php'; 

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];

    $contra_en = base64_encode($contra);

    $sql = mysqli_query($conexion_proyecto,"INSERT INTO clientes (nombre, correo, clave) VALUES
    ('$nombre', '$correo', '$contra_en')");

     header ('location:../p0_mi_proyecto.php');
}



?>