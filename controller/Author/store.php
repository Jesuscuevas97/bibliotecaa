<?php
     require ("authorController.php");

    /* $obj = new AuthorController();
     

     $nombre = $_POST['nombre'];
     $apellidoP = $_POST['apellidoP'];
     $apellidoM = $_POST['apellidoM'];
     
     $obj ->guardar($nombre,$apellidoP,$apellidoM);*/

     if(isset($_POST['btnEnviar'])){
          $obj = new AuthorController();
     

          $nombre = $_POST['nombre'];
          $apellidoP = $_POST['apellidoP'];
          $apellidoM = $_POST['apellidoM'];
          
          $obj ->guardar($nombre,$apellidoP,$apellidoM);
     }
    
     
    

?>