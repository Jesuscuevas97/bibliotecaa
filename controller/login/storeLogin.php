<?php


    if(isset($_POST['btnLogin'])){
        require("loginController.php");

        $email = $_POST['email'];
        $pass = $_POST['contraseña'];


        $obj = new LoginController;
        
        $obj->getUser($email,$pass);

        
        
    }
    

   
    
  
?>