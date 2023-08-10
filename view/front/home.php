<?php
    
   
    include("../admin/layout/header.php");
    
?>




<div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
   
    
  </div>
  <div class="offcanvas-body col-1">
    
    </div>
  </div>
</div>


<div class="container py-3">
    <h2 class="text-center"> Directorio</h2>
    
    <div class="col-auto">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registroBook">
        <i class="bi bi-bag-plus-fill"> Nuevo Registro</i></button>
    </div>
    <table class="table table-sm table-striped table-hover mt-2">
        <thead class="table-dark">
            <tr>
                <th>#ID</th>
                <th>TÍTULO</th>
                <th>AUTOR</th>
                <th>EDITORIAL</th>
                <th>GÉNERO</th>
                <th>PAÍS</th>
                <th>NÚMERO DE PÁGINAS</th>
                <th>CANTIDAD</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
    </table>


</div>
<?php
    include("../admin/layout/footer.php");
    include ("modal/Book/registroBook.php");

?>