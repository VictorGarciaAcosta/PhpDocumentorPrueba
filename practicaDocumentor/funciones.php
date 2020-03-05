<?php
    require_once 'conexion.php';
    class funciones{ 
        /**
        * @return array
        */
        public function getComerciales() {
            $sql = "SELECT nombre,codigo FROM `Comerciales`";
            $conn = new Conexion();
            $result = $conn->prepare($sql); 
            $result->execute();
            $conn=null;
            while ($registro = $result->fetchObject()) {    
                $array[] = $registro->nombre;
                $array[] = $registro->codigo;
            }
            return  $array;
        }
        /**
        * @return array
        */
        public function getProducto(){
            $sql = "SELECT * FROM `Productos`";
            $conn = new Conexion();
            $result = $conn->prepare($sql); 
            $result->execute();
            $conn=null;
            while ($registro = $result->fetchObject()) {    
                $array[] = $registro;
            }
            return  $array;
        }
        /**
        * @param string $cod
        * @return array
        */
        public function getConsultaVentasComercial($cod){
            $sql = "SELECT * FROM `Ventas` WHERE `codComercial` = \"".$cod."\"";
            $conn = new Conexion();
            $result = $conn->prepare($sql); 
            $result->execute();
            $conn=null;
            while ($registro = $result->fetchObject()) {    
                $array[] = $registro;
            }
            return  $array;
        }
    }
?>