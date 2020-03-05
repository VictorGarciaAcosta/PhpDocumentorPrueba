<?php
    class Conexion extends PDO {
      private $datos = "mysql:host=localhost;dbname=ventas_comerciales;charset=utf8mb4";
      private $usuario = "exud6";
      private $pass = "exud6"; 
      public function __construct(){
         try{
            parent::__construct($this->datos, $this->usuario, $this->pass);
            echo "ok";
         }catch(PDOException $e){
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
         } 
      }      
  }