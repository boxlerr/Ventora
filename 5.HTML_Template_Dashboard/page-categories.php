<?php
session_start();

// Incluir archivo de funciones y establecer conexión
include('funciones_admin.php');

// Verificar y mostrar mensajes de sesión
if (isset($_SESSION['message'])) {
  echo '<div class="alert alert-success centrado">' . $_SESSION['message'] . '</div>';
  unset($_SESSION['message']); // Limpiar el mensaje para evitar mostrarlo más de una vez
}

if (isset($_SESSION['error'])) {
  echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
  unset($_SESSION['error']); // Limpiar el error para evitar mostrarlo más de una vez
}
$categorias = getCategorias();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>Ecom - Marketplace Dashboard Template</title>
</head>

<body>
  <?php
  include_once("header_admin.php")
  ?>
  <main class="main-wrap-categories">
    <section class="content-main">
      <div class="content-header">
        <div>
          <h2 class="content-title card-title">Categories</h2>
          <p>Add, edit or delete a category</p>
        </div>
        <div>
          <input class="form-control bg-white" type="text" placeholder="Search Categories">
        </div>
      </div>

      <!-- Formulario para agregar categorías -->
      <div class="row">
        <div class="col-md-3">
          <form action="add_categoria.php" method="post">
            <div class="mb-4">
              <label class="form-label" for="product_name">Name</label>
              <input class="form-control" id="product_name" name="product_name" type="text" placeholder="Type here">
            </div>
            <div class="mb-4">
              <label class="form-label">Description</label>
              <textarea class="form-control" name="product_description" placeholder="Type here"></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label" for="product_slug">Slug</label>
              <input class="form-control" id="product_slug" name="product_slug" type="text" placeholder="Type here">
            </div>
            <div class="d-grid">
              <button class="btn btn-primary" name="submit" type="submit">Create category</button>
            </div>
          </form>
        </div>

        <!-- Tabla para mostrar las categorías -->
        <div class="card col-md-9">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Slug</th>
                    <th class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($categorias)) {
                    foreach ($categorias as $categoria) {
                      echo '<tr>';
                      echo '<td>' . htmlspecialchars($categoria['categoria_id']) . '</td>';
                      echo '<td><b>' . htmlspecialchars($categoria['nombre']) . '</b></td>';
                      echo '<td>' . htmlspecialchars($categoria['descripcion']) . '</td>';
                      echo '<td>' . htmlspecialchars($categoria['slug']) . '</td>';
                      echo '<td class="text-end">';
                      echo '<div class="dropdown">';
                      echo '<a class="btn btn-light rounded btn-sm font-sm" href="#" data-bs-toggle="dropdown"><i class="material-icons md-more_horiz"></i></a>';
                      echo '<div class="dropdown-menu">';
                      echo '<a class="dropdown-item" href="modificar_categoria.php?categoria_id=' . htmlspecialchars($categoria['categoria_id']) . '">Edit info</a>';
                      echo '<a class="dropdown-item text-danger" href="delete_categoria.php?categoria_id=' . htmlspecialchars($categoria['categoria_id']) . '">Delete</a>';
                      echo '</div>';
                      echo '</div>';
                      echo '</td>';
                      echo '</tr>';
                    }
                  } else {
                    echo "<tr><td colspan='5'>No hay categorías cargadas</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="main-footer font-xs">
    <?php
    include_once("footer_admin.php")
    ?>
  </footer>
  <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
  <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendors/select2.min.js"></script>
  <script src="assets/js/vendors/perfect-scrollbar.js"></script>
  <script src="assets/js/vendors/jquery.fullscreen.min.js"></script>
  <script src="assets/js/vendors/chart.js"></script>
  <script src="assets/js/main.js?v=1.0.0"></script>
  <script src="assets/js/custom-chart.js" type="text/javascript"></script>
</body>

</html>