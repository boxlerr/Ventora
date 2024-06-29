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
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/img/logovestoreventana.png">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>Ecom - Marketplace Dashboard Template</title>
</head>

<body class="dark"> 
  <?php
  include_once("header_admin.php")
  ?>
  <section class="content-main">
    <div class="content-header">
      <h2 class="content-title">Sellers list</h2>
      <div><a class="btn btn-primary" href="#"><i class="material-icons md-plus"></i> Create new</a></div>
    </div>
    <div class="card mb-4">
      <header class="card-header">
        <div class="row gx-3">
          <div class="col-lg-4 col-md-6 me-auto">
            <input class="form-control" type="text" placeholder="Search...">
          </div>
          <div class="col-lg-2 col-md-3 col-6">
            <select class="form-select">
              <option>Status</option>
              <option>Active</option>
              <option>Disabled</option>
              <option>Show all</option>
            </select>
          </div>
          <div class="col-lg-2 col-md-3 col-6">
            <select class="form-select">
              <option>Show 20</option>
              <option>Show 30</option>
              <option>Show 40</option>
            </select>
          </div>
        </div>
      </header>
      <!-- card-header end//-->
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Seller</th>
                <th>Email</th>
                <th>Status</th>
                <th>Registered</th>
                <th class="text-end"> Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar1.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller ID: #439</small>
                    </div>
                  </a></td>
                <td>eleanor2022@example.com</td>
                <td><span class="badge rounded-pill alert-success">Active</span></td>
                <td>08.07.2022</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar2.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Mary Monasa</h6><small class="text-muted">Seller ID: #129</small>
                    </div>
                  </a></td>
                <td>monalisa@example.com</td>
                <td><span class="badge rounded-pill alert-success">Active</span></td>
                <td>11.07.2022</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar3.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Jonatan Ive</h6><small class="text-muted">Seller ID: #400</small>
                    </div>
                  </a></td>
                <td>mrjohn@example.com</td>
                <td><span class="badge rounded-pill alert-success">Active</span></td>
                <td>08.07.2022</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar4.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller ID: #439</small>
                    </div>
                  </a></td>
                <td>eleanor2022@example.com</td>
                <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                <td>08.07.2022</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar1.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Albert Pushkin</h6><small class="text-muted">Seller ID: #439</small>
                    </div>
                  </a></td>
                <td>someone@mymail.com</td>
                <td><span class="badge rounded-pill alert-success">Active</span></td>
                <td>20.11.2019</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar2.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Alexandra Pena</h6><small class="text-muted">Seller ID: #439</small>
                    </div>
                  </a></td>
                <td>eleanor2022@example.com</td>
                <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                <td>08.07.2022</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar3.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller ID: #439</small>
                    </div>
                  </a></td>
                <td>eleanor2022@example.com</td>
                <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                <td>08.07.2022</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar4.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Alex Pushkina</h6><small class="text-muted">Seller ID: #439</small>
                    </div>
                  </a></td>
                <td>alex@gmail.org</td>
                <td><span class="badge rounded-pill alert-success">Active</span></td>
                <td>08.07.2022</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar1.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller ID: #439</small>
                    </div>
                  </a></td>
                <td>eleanor2022@example.com</td>
                <td><span class="badge rounded-pill alert-success">Active</span></td>
                <td>08.07.2022</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
              <tr>
                <td width="40%"><a class="itemside" href="#">
                    <div class="left"><img class="img-sm img-avatar" src="assets/imgs/people/avatar2.jpg" alt="Userpic"></div>
                    <div class="info pl-3">
                      <h6 class="mb-0 title">Eleanor Pena</h6><small class="text-muted">Seller ID: #439</small>
                    </div>
                  </a></td>
                <td>eleanor2022@example.com</td>
                <td><span class="badge rounded-pill alert-success">Active</span></td>
                <td>08.07.2022</td>
                <td class="text-end"><a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a></td>
              </tr>
            </tbody>
          </table>
          <!-- table-responsive.//-->
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