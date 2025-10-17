<?php

    class Bicicletas{
        public function insertarBicicletas($marca,$estado,$precio,$ruta_foto,$color){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $registrar = "INSERT INTO bicicletas(marca,estado,precio_alquiler,foto,color) VALUES('$marca','$estado','$precio','$ruta_foto','$color')";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($registrar);
            $resultado -> execute();

            echo"<script>alert('Bicicleta registrada con exito')</script>";
            echo"<script>location.href='../views/admin/dashboardAdmin.php'</script>";
        }

        public function mostrarBicicletasCliente(){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIBALE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM bicicletas ORDER BY id DESC";
            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($consultar);
            $resultado -> execute();
            $f = $resultado -> fetchAll();
            return $f;
        }

        public function mostrarBicicletasAdmin(){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM bicicletas ORDER BY id DESC";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($consultar);
            $resultado -> execute();
            $f = $resultado -> fetchAll();
            return $f;
        }

        public function eliminarBicicleta($id_b){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIBALE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $eliminar = "DELETE FROM bicicletas WHERE id=$id_b";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($eliminar);
            $resultado -> execute();

            echo"<script>alert('Bicicleta eliminada con exito')</script>";
            echo"<script>location.href='../views/admin/dashboardAdmin.php'</script>";
        }

        public function consultarBicicleta($id_b){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM bicicletas WHERE id = $id_b";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($consultar);
            $resultado -> execute();
            $f = $resultado -> fetch();
            return $f;
        }

        public function actualizarBicicleta($id,$marca,$estado,$precio,$color){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $actualizar = "UPDATE bicicletas SET marca='$marca', estado='$estado', precio_alquiler='$precio', color='$color' WHERE id=$id";

            // PREPARAMOS LA ACCION A AEJCUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($actualizar);
            $resultado -> execute();

            echo"<script>alert('Bicicleta actualizada con exito')</script>";
            echo"<script>location.href='../views/admin/dashboardAdmin.php'</Script>";
        }

        public function alquilarBicicletas($id_b,$id_cliente,$total_pagar){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $registrar = "INSERT INTO alquiler(id_bicicleta,id_usuario,total_a_pagar) VALUES('$id_b','$id_cliente','$total_pagar')";

            // PREPARAMOS LA ACCION A E EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($registrar);
            $resultado -> execute();

            echo"<script>alert('Alquiler realizado con exito')</script>";
            echo"<script>location.href='../views/cliente/dashboardCliente.php'</script>";
        }
    }

?>