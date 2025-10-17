<?php

    // IMPORTAMOS LAS DEPENDECIAS NECESARIAS
    require_once("../models/correos.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TAREVZ DEL METOD POST Y LOS NAME DE LOS CAMPOS
    $nombres = $_POST['nombres'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // PROGRAMACION ORIENTADA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoCorreo = new EnviarCorreo();
    $objetoCorreo -> enviarCorreo($nombres,$email,$telefono,$asunto,$mensaje);

?>