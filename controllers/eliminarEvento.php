<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/eventos.php");

    // CAPTURAMOS EL ID ATARAVEZ DEL METODO GET
    $id_e = $_GET['idEvento'];

    // PROGRAMACION ORIENTADA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoEvento = new Eventos();
    $objetoEvento -> eliminarEvento($id_e)

?>