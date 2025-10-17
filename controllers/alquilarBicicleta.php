<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/bicicletas.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $id_cliente = $_SESSION['id'];
    $id_b = $_GET['idBicicleta'];
    $estrato = $_SESSION['estrato'];
    $precio = $_GET['precio'];

    // IDENTIFICAMOS EL TOTAL A PAGAR
    switch($estrato){
        case '1':
        case '2':
            $total_pagar = $precio - ($precio * 10)/100;
        break;

        case '3':
        case '4':
            $total_pagar = $precio - ($precio * 5)/100;
        break;

        case '5':
        case '6':
            $total_pagar = $precio - ($precio * 0)/100;
    }

    // PROGRAMACION ORIENTADA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoAlquilar = new Bicicletas();
    $objetoAlquilar -> alquilarBicicletas($id_b,$id_cliente,$total_pagar);
?>