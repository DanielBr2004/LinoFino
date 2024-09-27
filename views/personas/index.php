<?php require_once '../header.php'; ?>
<main>
  <div class="container-fluid px-4">
    <h1>personas</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Datos de la persona
          </div>
          <div class="card-body">
            <table class="table table-stripped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>DNI</th>
                  <th>Apellidos</th>
                  <th>Nombres</th>
                  <th>Dirección</th>
                  <th>Telefono</th>
                  <th>Operaciones</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
          <div class="card-footer">
            <a href="registrar.php" class="btn btn-sm btn-primary">Registrar Persona</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contenido -->
</main>
<?php require_once '../footer.php'; ?>

<script src="../../js/usuario.js"></script>