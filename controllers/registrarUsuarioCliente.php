<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/usuario.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $identificacion = $_POST['identificacion'];
    $clave = md5($_POST['clave']);
    $rol = "aprendiz";
    $estrato = $_POST['estrato'];

    // PRPGRAMACION ORIENTADA A OBJETOS
    // ACCDEMOS A LA FUNCION
    $objetoUsuario = new Usuario();
    $objetoUsuario -> insertarUsuario($nombres,$apellidos,$email,$telefono,$identificacion,$clave,$rol,$estrato);

?>