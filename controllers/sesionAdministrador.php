<?php

    // INVOCAMOS LA CONEXION
    require_once("../../models/conexion.php");

    if(!isset($_SESSION['autenticado'])|| $_SESSION['rol']!='Administrador'){
        echo"<script>alert('No tiene permisos')</script>";
        echo"<script>location.href='../../views/extras/login.php'</script>";
    }

?>