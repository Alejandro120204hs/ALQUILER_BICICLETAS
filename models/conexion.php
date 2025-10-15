<?php

    class Conexion{
        public function get_conexion(){
            $user = "root";
            $pass = "";
            $host = "loaclhots";
            $dbname = "alquiler_bicicletas";

            $conexion = new PDO("mysql: host=$host; dbname=$dbname",$user,$pass);
            return $conexion;

        }
    }

?>