<?php
   
   include_once ("../config.php");

   $conexion = mysqli_connect($host,$user,$password,$dbname);

  
   class Conexion{
      private $host = "localhost";
      private $user ="root";
      private $password = "";
      private $dbname = "biblioteca";

      private $conect;

      public function __construct(){
         $conectionString ="mysql:host=".$this->host.";dbname=". $this->dbname.";charset=utf8";
         try{
            $this->conect = new PDO($conectionString,$this->user,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "conectado0:";
         }catch(Exception $e){
            $this->conect = 'Error conexion';
            echo "ERROR: ". $e->getMessage();
         }
      }
      
   }
  
   $conect = new Conexion();
?>