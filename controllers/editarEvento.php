<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/eventos.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $lugar = $_POST['lugar'];

    // PROGRAMACION ORIENTADA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoEvento = new Eventos();
    $objetoEvento -> actualizarEvento($id,$nombre,$descripcion,$fecha,$hora,$lugar);

?>