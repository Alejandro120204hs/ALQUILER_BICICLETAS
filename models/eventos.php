<?php

    class Eventos{
        public function insertarEvento($nombre,$descripcion,$fecha,$hora,$lugar){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $registrar = "INSERT INTO ciclo_paseo(nombre,descripcion,fecha,hora,lugar) VALUES('$nombre','$descripcion','$fecha','$hora','$lugar')";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($registrar);
            $resultado -> execute();

            echo"<script>alert('Evento registrado con exito')</script>";
            echo"<script>location.href='../views/admin/dashboardAdminEvento.php'</script>";
        }

        public function visualizarEventos(){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM ciclo_paseo ORDER BY id DESC";
            
            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($consultar);
            $resultado -> execute();
            $f = $resultado -> fetchAll();
            return $f;
        }

        public function eliminarEvento($id_e){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $eliminar = "DELETE FROM ciclo_paseo WHERE id=$id_e";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($eliminar);
            $resultado -> execute();

            echo"<script>alert('Evento eliminado con exito')</script>";
            echo"<script>location.href='../views/admin/dashboardAdmin.php'</script>";
        }

        public function visualizarEventosId($id_e){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN NA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM ciclo_paseo WHERE id = $id_e";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($consultar);
            $resultado -> execute();
            $f = $resultado -> fetch();
            return $f;
        }

        public function actualizarEvento($id,$nombre,$descripcion,$fecha,$hora,$lugar){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $actualizar = "UPDATE ciclo_paseo SET nombre='$nombre', descripcion='$descripcion', fecha='$fecha', hora='$hora', lugar='$lugar' WHERE id=$id";
            
            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOSD
            $resultado = $conexion -> prepare($actualizar);
            $resultado -> execute();

            echo"<script>alert('Evento actualizado con exito')</script>";
            echo"<script>location.href='../views/admin/dashboardAdminEvento.php'</script>";
        }

        public function inscribirEvento($id_usuario,$id_ciclopaseo){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIBALE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $registrar = "INSERT INTO participacion_ciclopaseo(id_usuario,id_ciclopaseo) VALUES('$id_usuario','$id_ciclopaseo')";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($registrar);
            $resultado -> execute();

            echo"<script>alert('Inscrito con exito')</script>";
            echo"<script>location.href='../views/cliente/dashboardClienteEvento.php'</script>";
        }
    }

?>