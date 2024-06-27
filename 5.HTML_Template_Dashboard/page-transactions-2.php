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

<body class="dark">
  <?php
  include_once("header_admin.php")
  ?>
  <section class="content-main">
    <div class="content-header">
      <h2 class="content-title">Transactions</h2>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-9">
            <header class="border-bottom mb-4 pb-4">
              <div class="row">
                <div class="col-lg-5 col-6 me-auto">
                  <input class="form-control" type="text" placeholder="Search...">
                </div>
                <div class="col-lg-2 col-6">
                  <select class="form-select">
                    <option>Method</option>
                    <option>Master card</option>
                    <option>Visa card</option>
                    <option>Paypal</option>
                  </select>
                </div>
              </div>
            </header>
            <!-- card-header end//-->
            <?php
            include '../conexion/connect.php';
            ?>

            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Transaction ID</th>
                    <th>Paid</th>
                    <th>Method</th>
                    <th>Date</th>
                    <th class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include '../conexion/connect.php';

                  $sql = "SELECT dp.pago_id, v.venta_id, dp.metodo_pago, dp.estado_pago, dp.fecha_pago, dp.total_pago 
        FROM detalle_pago dp
        JOIN venta v ON dp.venta_id = v.venta_id";

                  $result = $con->query($sql);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo '<tr>';
                      echo '<td><b>#' . htmlspecialchars($row['pago_id']) . '</b></td>';
                      echo '<td>$' . htmlspecialchars(number_format($row['total_pago'], 2)) . '</td>';
                      echo '<td>';
                      echo '<div class="icontext"><img class="icon border" src="assets/imgs/card-brands/1.png" alt="Payment"><span class="text text-muted">' . htmlspecialchars($row['metodo_pago']) . '</span></div>';
                      echo '</td>';
                      echo '<td>' . htmlspecialchars($row['fecha_pago']) . '</td>';
                      echo '<td class="text-end"><a class="btn btn-sm btn-light font-sm rounded" href="#" onclick="showDetails(' . htmlspecialchars($row['pago_id']) . ')">Details</a></td>';
                      echo '</tr>';
                    }
                  } else {
                    echo '<tr><td colspan="5">No hay transacciones disponibles</td></tr>';
                  }

                  $con->close();
                  ?>

                </tbody>
              </table>
            </div>
            <!-- table-responsive.//-->
            <!-- col end//-->
          </div>
          <aside class="col-lg-3">
            <div class="box bg-light" style="min-height:80%">
              <div id="venta-details">
                <!-- Aquí se mostrarán los detalles de la venta -->
                <h6 class="mt-15">Transaction Details</h6>
                <hr>
                <!-- Los detalles de la venta se cargarán aquí mediante JavaScript -->
              </div>
            </div>
          </aside>

          <!-- col end//-->
          <!-- row end//-->
          <!-- card-body //-->
        </div>
      </div>
    </div>
    <!-- card end//-->
    <div class="pagination-area mt-30 mb-50">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-start">
          <li class="page-item active"><a class="page-link" href="#">01</a></li>
          <li class="page-item"><a class="page-link" href="#">02</a></li>
          <li class="page-item"><a class="page-link" href="#">03</a></li>
          <li class="page-item"><a class="page-link dot" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">16</a></li>
          <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
        </ul>
      </nav>
    </div>
  </section>
  <footer class="main-footer font-xs">
    <?php
    include_once("footer_admin.php")
    ?>
  </footer>
  </main>
  <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
  <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendors/select2.min.js"></script>
  <script src="assets/js/vendors/perfect-scrollbar.js"></script>
  <script src="assets/js/vendors/jquery.fullscreen.min.js"></script>
  <script src="assets/js/vendors/chart.js"></script>
  <script src="assets/js/main.js?v=1.0.0"></script>
  <script src="assets/js/custom-chart.js" type="text/javascript"></script>
  <script>
    function showDetails(pago_id) {
      $.ajax({
        url: 'detalle_venta.php',
        type: 'GET',
        data: {
          pago_id: pago_id
        },
        dataType: 'json',
        success: function(venta) {
          $('#venta-details').html(`
                <h6 class="mt-15">Transaction Details</h6>
                <hr>
                <h6 class="mb-0">Cliente:</h6>
                <p>${venta.nombre_cliente}</p><br>
                <h6 class="mb-0">Fecha:</h6>
                <p>${venta.fecha_venta}</p><br>
                <h6 class="mb-0">Dirección de Envío:</h6>
                <p>${venta.direccion}, ${venta.ciudad}, ${venta.estado}, ${venta.codigo_postal}, ${venta.pais}</p><br>
                <h6 class="mb-0">Correo:</h6>
                <p>${venta.correo}</p><br>
                <h6 class="mb-0">Productos Comprados:</h6>
                <ul>
                    ${venta.productos.split(', ').map(producto => `<li>${producto}</li>`).join('')}
                </ul>
                <p class="h4">Subtotal: $${venta.subtotal}</p>
                <p class="h4">Total: $${venta.total}</p>
                <hr>
                <a class="btn btn-light" href="#">Download receipt</a>
            `);
        },
        error: function() {
          $('#venta-details').html('<p>Error al cargar los detalles de la venta.</p>');
        }
      });
    }
  </script>




</body>

</html>