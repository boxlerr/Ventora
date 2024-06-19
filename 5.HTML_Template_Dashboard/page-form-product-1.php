<?php
require_once("../conexion/connect.php");
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
  <section class="content-main">
    <div class="row">
      <div class="col-9">
        <div class="content-header">
          <h2 class="content-title">Add New Product</h2>
          <div>
            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
            <button class="btn btn-md rounded font-sm hover-up">Publich</button>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header">
            <h4>Basic</h4>
          </div>
          <div class="card-body">
            <form action="add_product.php" method="POST" enctype="multipart/form-data">
              <div class="mb-4">
                <label class="form-label" for="product_name">Product title</label>
                <input class="form-control" id="product_name" name="product_name" type="text" placeholder="Type here" required>
              </div>
              <div class="mb-4">
                <label class="form-label">Full description</label>
                <textarea class="form-control" name="description" placeholder="Type here" rows="4" required></textarea>
              </div>
              <div class="row">

                <div class="mb-4">
                  <label class="form-label">Regular price</label>
                  <div class="row gx-2"></div>
                  <input class="form-control" name="price" placeholder="$" type="text" required>
                </div>

                <!-- <div class="col-lg-4">
          <label class="form-label">Currency</label>
          <select class="form-select" name="currency">
            <option> USD</option>
            <option> EUR</option>
            <option> RUBL</option>
          </select>
        </div> -->
              </div>
              <div class="mb-4">
                <label class="form-label">Category</label>
                <select class="form-select" name="category">
                  <?php
                  $sql = "SELECT nombre FROM categoria";
                  $result = $con->query($sql);
                  //soy un dios supremo que pone sql aca porque remil pinto
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo "<option value='"  . "'>" . $row['nombre'] . "</option>";
                    }
                  } else {
                    echo "<option value=''>No hay categorías disponibles</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label">Image</label>
                <input class="form-control" type="file" name="image" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <!-- <div class="card mb-4">
              <div class="card-header">
                <h4>Basic</h4>
              </div>
              <div class="card-body">
                <form>
                  <div class="mb-4">
                    <label class="form-label" for="product_name">Product title</label>
                    <input class="form-control" id="product_name" type="text" placeholder="Type here">
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Full description</label>
                    <textarea class="form-control" placeholder="Type here" rows="4"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-4">
                        <label class="form-label">Regular price</label>
                        <div class="row gx-2"></div>
                        <input class="form-control" placeholder="$" type="text">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-4">
                        <label class="form-label">Promotional price</label>
                        <input class="form-control" placeholder="$" type="text">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <label class="form-label">Currency</label>
                      <select class="form-select">
                        <option> USD</option>
                        <option> EUR</option>
                        <option> RUBL</option>
                      </select>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Tax rate</label>
                    <input class="form-control" id="product_name" type="text" placeholder="%">
                  </div>
                  <label class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value=""><span class="form-check-label"> Make a template</span>
                  </label>
                </form>
              </div>
            </div> -->
        <div class="card mb-4">
          <div class="card-header">
            <h4>Shipping</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label class="form-label" for="product_name">Width</label>
                    <input class="form-control" id="product_name" type="text" placeholder="inch">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label class="form-label" for="product_name">Height</label>
                    <input class="form-control" id="product_name" type="text" placeholder="inch">
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="product_name">Weight</label>
                  <input class="form-control" id="product_name" type="text" placeholder="gam">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="product_name">Shipping fees</label>
                  <input class="form-control" id="product_name" type="text" placeholder="$">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <!-- <div class="card mb-4">
              <div class="card-header">
                <h4>Media</h4>
              </div>
              <div class="card-body">
                <div class="input-upload"><img src="assets/imgs/theme/upload.svg" alt="">
                  <input class="form-control" type="file">
                </div>
              </div>
            </div> -->
        <div class="card mb-4">
          <div class="card-header">
            <h4>Organization</h4>
          </div>
          <div class="card-body">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label">Category</label>
                <select class="form-select">
                  <option> Automobiles</option>
                  <option> Home items</option>
                  <option> Electronics</option>
                  <option> Smartphones</option>
                  <option> Sport items</option>
                  <option> Baby and Tous</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label">Sub-category</label>
                <select class="form-select">
                  <option> Nissan</option>
                  <option> Honda</option>
                  <option> Mercedes</option>
                  <option> Chevrolet</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label" for="product_name">Tags</label>
                <input class="form-control" type="text">
              </div>
            </div>
          </div>
        </div>
      </div>
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