<?php 
 session_start();
 if(!isset($_SESSION['usuario'])){
     header("Location: ../../index.php");
 }else{
     print_r($_SESSION['usuario']);
     


     
 }
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema siu</title>
    
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary border">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
    <i class="bi bi-list-task"></i>
    </a>

   

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav col-10 ">

       
      </ul>
      <ul class="navbar-nav  d-flex">
       

       <li class="nav-item dropdown ">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <?php ?>
         </a>
         <ul class="dropdown-menu">
           <li><a class="dropdown-item" href="#">Action</a></li>
           <li><a class="dropdown-item" href="#">Another action</a></li>
           <li><hr class="dropdown-divider"></li>
           <li><a class="dropdown-item" href="#">Something else here</a></li>
         </ul>
       </li>
      
     </ul>
    </div>
  </div>
</nav>