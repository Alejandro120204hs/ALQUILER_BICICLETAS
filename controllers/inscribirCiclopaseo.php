<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/eventos.php");

    // CAPTURAMOS LAS VARIABLES
    $id_usuario = $_SESSION['id'];
    $id_ciclopaseo = $_GET['idCiclopaseo'];

    // PROGRAMACION ORIENTADA A OBJETOS
    $objetoEvento = new Eventos();
    $objetoEvento -> inscribirEvento($id_usuario,$id_ciclopaseo);

?>