<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/usuario.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TRAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $identificacion = $_POST['identificacion'];
    $email = $_POST['email'];

    // PROGRAMACION ORIENTADA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoUsuario = new Usuario();
    $objetoUsuario -> recuperarClave($identificacion,$email);

?>