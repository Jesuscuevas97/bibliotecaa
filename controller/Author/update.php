<?php

 require_once ("c:/xampp/htdocs/programacion/Biblioteca/controller/Author/authorController.php");

 $obj = new AuthorController();
 $obj->update($_POST['id_autor'],$_POST['nombre'],$_POST['apellidoP'],$_POST['apellidoM'],);
?>