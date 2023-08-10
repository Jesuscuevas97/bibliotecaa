<?php

   class db{

    private $host = "localhost";
    private $user ="root";
    private $password = "";
    private $dbname = "biblioteca";
    protected $query;
    protected $rows = array();
    protected $PDO;
    
    public function conexion(){
        try{
        $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
        return $PDO;
    }catch(PDOException $e){
        return $e ->getMessage();
        }
   }

   protected function db_close(){
    $this->PDO ->close();
    }

 

}


?>