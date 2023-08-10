
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro Autor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../../controller/Author/store.php" method="POST" enctype="multipart/form-data">
          
      
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
            <input type="text" name="apellidoM" id="apellidoP" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" accept="image/jpeg">
          </div>

          <div class="">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="btnEnviar">Save changes</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>