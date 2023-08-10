

<?php
    
    
    include("../admin/layout/header.php");
    require_once("c:/xampp/htdocs/programacion/Biblioteca/controller/Author/authorController.php");
   
    $obj = new AuthorController();

    
    $rows = $obj->read();
    var_dump($rows);
?>


<div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
   
  </div>
  <div class="offcanvas-body col-1"> 
    </div>
  </div>
</div>


<div class="container py-3">
    <h2 class="text-center"> Autores</h2>
    
    <div class="col-auto">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-bag-plus-fill">Nuevo Registro</i></button>
    </div>
    <table class="table table-sm table-striped table-hover mt-2">
        <thead class="table-dark">
            <tr>
                <th>#ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Imagen</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $row) { ?>
        <tr>
            <th> <?=$row['id_autor'] ?></th>
            <th> <?=$row['nombre'] ?></th>
            <th> <?=$row['apellidoP'] ?></th>
            <th></th>
            <th>
                <button class="btn btn-success" data-bs-id="<?= $row['id_autor'] ?>" data-bs-toggle="modal" data-bs-target="#actualizarModal">Editar</button>
                <button class="btn btn-danger"  data-bs-id="<?= $row['id_autor'] ?>" data-bs-toggle="modal" data-bs-target="#eliminarModal">Eliminar</button>
                
            </th>
          
        </tr>
        <?php } ?>
        </tbody>
    </table>


</div>



<?php
 include ("modal/Author/registroAuthor.php");
 include("modal/Author/deleteAuthor.php");
 include ('modal/Author/actualizarAuthor.php');
include("../admin/layout/footer.php");
   
   
?>

<script src="../../public/js/getDatos.js"></script>