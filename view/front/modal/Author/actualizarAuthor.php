
<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" aria-labelledby="actualizarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="actualizarModalLabel">Actualizar Autor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        <form action="../../controller/Author/update.php" method="POST" enctype="multipart/form-data">
       
          <input type="hidden" id="id_autor" name="id_autor" >
          
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
          </div>
          
          <div class="mb-3">
            <label for="apellidoP" class="form-label">Apellido </label>
            <input type="text" name="apellidoP" id="apellidoP" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="apellidoP" class="form-label">Apellido Ma</label>
            <input type="text" name="apellidoM" id="apellidoM" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" accept="image/jpeg">
          </div>

          <div class="">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

