<?php
    
    class AuthorModel{

        private $PDO;

        public function __construct(){
            require_once ("c://xampp/htdocs/programacion/Biblioteca/config/config.php");

            $conn = new db();
            $this->PDO = $conn ->conexion();
       }

       public function insertar($nombre,$apellidoP,$apellidoM){
            $statement = $this->PDO->prepare("INSERT INTO autor VALUES(null, :nombre,:apellidoP,:apellidoM)");

            $statement->bindParam(":nombre",$nombre);
            $statement->bindParam(":apellidoP",$apellidoP);
            $statement->bindParam(":apellidoM",$apellidoM);

            return ($statement->execute())
                ? $this->PDO->lastInsertId() 
                    : false;
       }
       public function show($id)
       {
        $statement=$this->PDO->prepare("SELECT * FROM autor WHERE id_autor = :id_autor limit 1");
        $statement->bindParam(":id_autor",$id);
        return ($statement->execute()) ? $statement->fetchAll(PDO::FETCH_ASSOC) : false;
       }
       public function read(){
        $statement = $this->PDO->prepare("SELECT * FROM autor");
        return ($statement->execute())
            ? $statement->fetchAll(PDO::FETCH_ASSOC)
                : false;
       }
       public function update($id,$nombre,$apellidoP,$apellidoM){
            $statement = $this->PDO->prepare("UPDATE autor 
            SET nombre= :nombre, apellidoP = :apellidoP, apellidoM =:apellidoM WHERE id_autor = :id_autor");
             $statement->bindParam(":nombre",$nombre);
             $statement->bindParam(":apellidoP",$apellidoP);
             $statement->bindParam(":apellidoM",$apellidoM);
             $statement->bindParam(":id_autor",$id);
             return ($statement->execute()) ?$id : false;
       }

       public function delete($id){
        $statement = $this->PDO->prepare("DELETE FROM autor WHERE id_autor = :id_autor");
        $statement->bindParam(":id_autor",$id);
        return ($statement->execute()) ? true : false;
       }
    }

?>