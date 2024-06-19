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
  <section class="content-main">
    <div class="content-header">
      <h2 class="content-title">Sellers cards</h2>
      <div><a class="btn btn-primary" href="#"><i class="material-icons md-plus"></i> Create new</a></div>
    </div>
    <div class="card mb-4">
      <header class="card-header">
        <div class="row gx-3">
          <div class="col-lg-4 col-md-6 me-auto">
            <input class="form-control" type="text" placeholder="Search...">
          </div>
          <div class="col-lg-2 col-6 col-md-3">
            <select class="form-select">
              <option>Show 20</option>
              <option>Show 30</option>
              <option>Show 40</option>
              <option>Show all</option>
            </select>
          </div>
          <div class="col-lg-2 col-6 col-md-3">
            <select class="form-select">
              <option>Status: all</option>
              <option>Active only</option>
              <option>Disabled</option>
            </select>
          </div>
        </div>
      </header>
      <!-- card-header end//-->
      <div class="card-body">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
          <div class="col">
            <div class="card card-user">
              <div class="card-header"><img class="img-md img-avatar" src="assets/imgs/people/avatar1.jpg" alt="User pic"></div>
              <div class="card-body">
                <h5 class="card-title mt-50">Mary Sandra</h5>
                <div class="card-text text-muted">
                  <p class="m-0">Seller ID: #409</p>
                  <p>mary90@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- col.//-->
          <div class="col">
            <div class="card card-user">
              <div class="card-header"><img class="img-md img-avatar" src="assets/imgs/people/avatar2.jpg" alt="User pic"></div>
              <div class="card-body">
                <h5 class="card-title mt-50">Leslie Alexander</h5>
                <div class="card-text text-muted">
                  <p class="m-0">Seller ID: #478</p>
                  <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- col.//-->
          <div class="col">
            <div class="card card-user">
              <div class="card-header"><img class="img-md img-avatar" src="assets/imgs/people/avatar3.jpg" alt="User pic"></div>
              <div class="card-body">
                <h5 class="card-title mt-50">Leslie Alexander</h5>
                <div class="card-text text-muted">
                  <p class="m-0">Seller ID: #478</p>
                  <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- col.//-->
          <div class="col">
            <div class="card card-user">
              <div class="card-header"><img class="img-md img-avatar" src="assets/imgs/people/avatar4.jpg" alt="User pic"></div>
              <div class="card-body">
                <h5 class="card-title mt-50">Floyd Miles</h5>
                <div class="card-text text-muted">
                  <p class="m-0">Seller ID: #171</p>
                  <p>fedor12@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- col.//-->
          <div class="col">
            <div class="card card-user">
              <div class="card-header"><img class="img-md img-avatar" src="assets/imgs/people/avatar1.jpg" alt="User pic"></div>
              <div class="card-body">
                <h5 class="card-title mt-50">John Alexander</h5>
                <div class="card-text text-muted">
                  <p class="m-0">Seller ID: #987</p>
                  <p>john@mymail.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- col.//-->
          <div class="col">
            <div class="card card-user">
              <div class="card-header"><img class="img-md img-avatar" src="assets/imgs/people/avatar3.jpg" alt="User pic"></div>
              <div class="card-body">
                <h5 class="card-title mt-50">Albert Flores</h5>
                <div class="card-text text-muted">
                  <p class="m-0">Seller ID: #478</p>
                  <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- col.//-->
          <div class="col">
            <div class="card card-user">
              <div class="card-header"><img class="img-md img-avatar" src="assets/imgs/people/avatar4.jpg" alt="User pic"></div>
              <div class="card-body">
                <h5 class="card-title mt-50">Leslie Alexander</h5>
                <div class="card-text text-muted">
                  <p class="m-0">Seller ID: #478</p>
                  <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- col.//-->
          <div class="col">
            <div class="card card-user">
              <div class="card-header"><img class="img-md img-avatar" src="assets/imgs/people/avatar1.jpg" alt="User pic"></div>
              <div class="card-body">
                <h5 class="card-title mt-50">Marx Alberto</h5>
                <div class="card-text text-muted">
                  <p class="m-0">Seller ID: #478</p>
                  <p>leslie@example.com</p><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- col.//-->
          <!-- row.//-->
          <!-- card-body end//-->
        </div>
      </div>
    </div>
    <!-- card end//-->
    <div class="pagination-area mt-15 mb-50">
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
</body>

</html>