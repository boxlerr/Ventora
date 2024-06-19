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
      <div>
        <h2 class="content-title card-title">Products grid</h2>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>
      <div><a class="btn btn-light rounded font-md" href="#">Export</a><a class="btn btn-light rounded font-md" href="#">Import</a><a class="btn btn-primary btn-sm rounded" href="#">Create new</a></div>
    </div>
    <div class="card mb-4">
      <header class="card-header">
        <div class="row gx-3">
          <div class="col-lg-4 col-md-6 me-auto">
            <input class="form-control" type="text" placeholder="Search...">
          </div>
          <div class="col-lg-2 col-6 col-md-3">
            <select class="form-select">
              <option>All category</option>
              <option>Electronics</option>
              <option>Clothings</option>
              <option>Something else</option>
            </select>
          </div>
          <div class="col-lg-2 col-6 col-md-3">
            <select class="form-select">
              <option>Latest added</option>
              <option>Cheap first</option>
              <option>Most viewed</option>
            </select>
          </div>
        </div>
      </header>
      <!-- card-header end//-->
      <div class="card-body">
        <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5">
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/1.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Just another product name</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
          </div>
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/2.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Brown Winter Jacket for Men</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
          </div>
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/3.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Jeans short new model</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
          </div>
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/4.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Travel Bag XL</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
          </div>
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/5.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Just another product name</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
          </div>
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/6.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Just another product name</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
          </div>
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/7.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Just another product name</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
          </div>
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/8.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Apple Airpods CB-133</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
          </div>
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/9.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Apple Airpods CB-133</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
          </div>
          <div class="col">
            <div class="card card-product-grid"><a class="img-wrap" href="#"><img src="assets/imgs/items/10.jpg" alt="Product"></a>
              <div class="info-wrap"><a class="title text-truncate" href="#">Apple Airpods CB-133</a>
                <div class="price mb-2">$179.00</div>
                <!-- price.//--><a class="btn btn-sm font-sm rounded btn-brand" href="#"><i class="material-icons md-edit"></i> Edit</a><a class="btn btn-sm font-sm btn-light rounded" href="#"><i class="material-icons md-delete_forever"></i> Delete</a>
              </div>
            </div>
            <!-- card-product  end//-->
            <!-- col.//-->
            <!-- row.//-->
            <!-- card-body end//-->
          </div>
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
    <div class="row pb-30 pt-15">
      <div class="col-sm-6">
        <script>
          document.write(new Date().getFullYear())
        </script> &copy;, Ecom - HTML Ecommerce Template .
      </div>
      <div class="col-sm-6">
        <div class="text-sm-end">All rights reserved</div>
      </div>
    </div>
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