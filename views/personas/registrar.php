<?php require_once '../header.php'; ?>
<main>
  <div class="container-fluid px-4">
    <h1>personas</h1>
    <div class="row">
      <div class="col-md-12">
        <form action="" id="formPersonas" autocomplete="off">
          <div class="card">
            <div class="card-header">
              Datos de la persona
            </div>
            <div class="card-body">
              <div class="row g-3 mb-3">
                <div class="col-md-2">
                  <div class="input-group">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="dni" placeholder="DNI" pattern="[0-9]+" title="Solo se permiten números" maxlength="8" require autofocus>
                      <label for="" class="form-label">DNI</label>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-success" id="buscarDni"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="apellidos" maxlength="40" placeholder="Apellidos" required disabled>
                    <label for="apellidos" class="form-label">Apellidos</label>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="nombres" maxlength="40" placeholder="Nombres" required disabled>
                    <label for="nombres" class="form-label">Nombres</label>
                  </div>
                </div>
              </div>
              <div class="row g-3 mb-3">
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" title="Solo se permite numeros" id="telefono" pattern="[0-9]+" minlength="9" maxlength="9" placeholder="Teléfono" required>
                    <label for="telefono" class="form-label">Teléfono</label>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="direccion" placeholder="direccion" required>
                    <label for="direccion">direccion</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-sm btn-primary" id="registarPersona">Registrar</button>
              <button type="submit" class="btn btn-sm btn-secondary" id="registarPersona">Cancelar</button>
              <a href="index.php" class="btn btn-sm btn-outline-secondary">Mostrar lista</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- contenido -->
</main>
<?php require_once '../footer.php'; ?>
<script src="../../js/personaregistrar.js"></script>
</body>

</html>