<?php 

    class LoginController{
    private $model;

    public function __construct() {
        require_once ("c:/xampp/htdocs/programacion/Biblioteca/model/login.php");
           $this->model = new LoginUser();
            }

    public function getUser($email,$password){
        return $this->model->getUser($email,$password);
    }

    }

?>