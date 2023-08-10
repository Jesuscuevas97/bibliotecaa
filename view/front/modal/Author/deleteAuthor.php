
<!-- Modal -->
<div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="eliminarModalLabel">Eliminar autor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el Registro?
      

      <div class="modal-footer">
       <form action="../../controller/Author/delete.php" method="post">
        <input type="hidden" name="id_autor"  id="id_autor">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      
       </form>
       </div>
      </div>
    </div>
  </div>
</div>