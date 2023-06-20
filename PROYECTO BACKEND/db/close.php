<?php

    session_start();
    session_destroy();

    header("location: ../php/inicio_sesion.php");

?>