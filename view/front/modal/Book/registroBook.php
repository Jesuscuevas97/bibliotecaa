<?php


?>
<!-- Ventana Modal que registra un nuevo libro-->
<div class="modal fade " id="registroBook" tabindex="-1" aria-labelledby="registroBookLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-m">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registroBookLabel">Registrar Libro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form action="" class="row">
          
          <div class="mb-3">
            <label for="tittle" class="form-label">Título</label>
            <input type="text" name="tittle" id="tittle" class="form-control" required>
          </div>
          <div class="col-6 mt-1">
            <label for="author" class="form-label">Autor</label>
            <select name="genero" id="genero" class="form-select">
              <option value="">Seleccionar...</option>
              
            </select>
          </div>
          <div class="col-6 mt-1">
            <label for="tittle" class="form-label">Editorial</label>
            <select name="genero" id="genero" class="form-select">
              <option value="">Seleccionar...</option>
            </select>
          </div>
          <div class="col-6 mt-1">
            <label for="genero" class="form-label">Género:</label>
            
            <select name="genero" id="genero" class="form-select">
              <option value="">Seleccionar...</option>
            </select>
          </div>
          <div class="col-6 mt-1">
            <label for="tittle" class="form-label">País</label>
            <select name="genero" id="genero" class="form-select">
              <option value="">Seleccionar...</option>
            </select>
          </div>
          <div class="col-6 mt-1">
            <label for="tittle" class="form-label">Número de páginas</label>
            <input type="text" name="tittle" id="tittle" class="form-control" required>
          </div>
          <div class="col-6 mt-1">
            <label for="tittle" class="form-label">Cantidad</label>
            <input type="number" name="tittle" id="tittle" class="form-control" required>
          </div>

          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
