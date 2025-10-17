<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/bicicletas.php");

    // CAPTURAMSO EL ID ATRAVEZ DEL METODO GET
    $id_b = $_GET['idBicicleta'];

    // PROGRAMACION ORIEMNTADA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoBicicleta = new Bicicletas();
    $objetoBicicleta -> eliminarBicicleta($id_b);

?>