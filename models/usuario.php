<?php

    class Usuario{
        public function insertarUsuario($nombres,$apellidos,$email,$telefono,$identificacion,$clave,$rol){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // VERIFICAMOS QUE EL USUARIO NO ESTE REGISTRADO
            $consultar = "SELECT * FROM usuario WHERE correo='$email'";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultdo = $conexion -> prepare($consultar);
            $resultdo -> execute();
            $f = $resultdo -> fetch();

            if($f){
                echo"<script>alert('El usuario ya se encunegtra registrado, porfavor registre un correo nuevo')</script>";
                echo"<script>location.href='../views/extras/login.php'</script>";
            }else{
                // DEFINIMOS EN UNA VARIBALE LA CONSULTA DE SQL SEGUN SEA EL CASO
                $registrar = "INSERT INTO usuario(nombres,apellidos,correo,telefono,identificacion,password,rol) VALUES('$nombres','$apellidos','$email','$telefono','$identificacion','$clave','$rol')";

                // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
                $resultdo = $conexion -> prepare($registrar);
                $resultdo -> execute();

                echo"<script>alert('Cliente registrado con exito')</script>";
                echo"<script>location.href='../views/extras/login.php'</script>";
            }
        }

        public function iniciarCliente($email,$clave){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM usuario WHERE correo='$email'";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultdo = $conexion -> prepare($consultar);
            $resultdo -> execute();
            $f = $resultdo -> fetch();

            if($f){
                if($clave==$f['password']){
                    echo"<script>alert('Bienvenido cliente ".$f['nombres']."')</script>";
                    echo"<script>location.href='../views/cliente/dashboardCliente.html'</script>";
                }else{
                    echo"<script>alert('Contraseña incorrecta')</script>";
                    echo"<script>location.href='../views/extras/login.php'</script>";
                }
            }else{
                echo"<script>alert('Usuario no encontrado, porfavor ingrese un correo valido')</script>";
                echo"<script>location.href='../views/extras/login.php'</script>";
            }
        }

        public function iniciarAdministrador($email,$clave){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM usuario WHERE correo='$email' AND rol='Administrador'";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultdo = $conexion -> prepare($consultar);
            $resultdo -> execute();
            $f = $resultdo -> fetch();
            if($f){
                if($clave==$f['password']){
                    echo"<script>alert('Bienvenid@ adminstrad@r ".$f['nombres']."')</script>";
                    echo"<script>location.href='../views/admin/dashboardAdmin.html'</script>";
                }else{
                    echo"<script>alert('Contraseña incorrecta')</script>";
                    echo"<script>location.href='../views/extras/login.php'</script>";
                }
            }else{
                echo"<script>alert('Usuario no encontrado, porfavor ingrese un correo valido')</script>";
                echo"<script>location.href='../views/extras/login.php'</script>";
            }
        }
    }

?>