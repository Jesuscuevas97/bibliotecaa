<?php

        require_once("authorController.php");
        $obj = new AuthorController();
        $obj ->delete($_POST['id_autor']);

?>