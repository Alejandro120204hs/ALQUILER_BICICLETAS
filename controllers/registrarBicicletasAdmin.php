<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/bicicletas.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $marca = $_POST['marca'];
    $estado = "Disponible";
    $precio = $_POST['precio'];
    $color = $_POST['color'];
    
    $ruta_foto = "../public/uploads/bicicletas/".$_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'],$ruta_foto);

    // PROGRAMACION ORIENTADA A OBJETOS
    // ACCEDEMOS A LA FUNCON
    $objetoBicicletas = new Bicicletas();
    $objetoBicicletas -> insertarBicicletas($marca,$estado,$precio,$ruta_foto,$color);

?>