<?php
  
  class AuthorController{

   private $model;

   public function __construct()
   {
      require_once ("c:/xampp/htdocs/programacion/Biblioteca/model/authorModel.php");
      $this->model = new AuthorModel();
   }

   public function guardar($nombre,$apellidoP,$apellidoM){
     $id= $this->model->insertar($nombre,$apellidoP,$apellidoM);

      return ($id!=false) ? header("Location:../../view/front/authorView.php") : header("Location:autorView") ;
   }
   public function read(){
    return($this->model->read())?$this->model->read() :false;
   }
   public function update($id,$nombre,$apellidoP,$apellidoM){
    return ($this->model->update($id,$nombre,$apellidoP,$apellidoM)!=false) 
      ? header("Location:../../view/front/authorView.php") 
        : header("Location:autorView") ;
   }
   public function show($id){
       return ($this->model->show($id) !=false) ? $this->model->show($id):header("Location:autorView");
   }
   public function delete ($id){
    return ($this->model->delete($id))
      ?header("Location:../../view/front/authorView.php") 
        : header("Location:autorView") ;
   }
  }
 
  
  
?>