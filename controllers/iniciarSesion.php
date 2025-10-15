<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/usuario.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $email = $_POST['email'];
    $clave = md5($_POST['clave']);
    $rol = $_POST['rol'];

    if($rol==1){
        // PROGRAMACION ORIENTADA A OBJETOS
        // ACCEDEMOS A LA FUNCION
        $objetoUsuario = new Usuario();
        $objetoUsuario -> iniciarCliente($email,$clave);
    }else{
        // PROGRAMACION ORIENTADA A OBJETOS
        // ACCEDEMOS A LA FUNCION
        $objetoUsuario = new Usuario();
        $objetoUsuario -> iniciarAdministrador($email,$clave);
    }

?>