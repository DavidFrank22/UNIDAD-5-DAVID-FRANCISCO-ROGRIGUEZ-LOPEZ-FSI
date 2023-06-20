<?php

    $server = "localhost";
    $username= "root";
    $password= "";
    $database= "mi_proyecto";

    $conexion_proyecto = new mysqli($server,$username,$password,$database);

    if ($conexion_proyecto->connect_error) {
    echo "fallos en conexión";
    exit();
    }

?>