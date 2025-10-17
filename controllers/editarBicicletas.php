<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/bicicletas.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TRAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $estado = $_POST['estado'];
    $precio = $_POST['precio'];
    $color = $_POST['color'];

    // PROGRAMACION ORIENTADA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoBicicleta = new Bicicletas();
    $objetoBicicleta -> actualizarBicicleta($id,$marca,$estado,$precio,$color);

?>