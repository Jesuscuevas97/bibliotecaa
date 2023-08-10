<?php
  

    class LoginUser {

        private $PDO;
    
        public function __construct(){
            require_once ("c://xampp/htdocs/programacion/Biblioteca/config/config.php");
    
            $conn = new db();
            $this->PDO = $conn ->conexion();
       }
       public function getUser($email,$password){
        $statement=$this->PDO->prepare("SELECT * FROM usuario 
        WHERE email = :email AND pass = :pass");
        $statement->bindParam(":email",$email);
        $statement->bindParam(":pass",$password);
        $statement->execute();
        $registro=$statement->fetchAll(PDO::FETCH_ASSOC);

        
        session_start();
        $_SESSION['usuario']=$registro;
        

        $numRegistro = $statement->rowCount();

        if($numRegistro>=1){
            echo "Bienvenido";
            header("Location: ../../view/front/home.php");
        }else{
            
            
            header("Location: ../../index.php");
        }
        
        
       }
       
       }

  
?>
