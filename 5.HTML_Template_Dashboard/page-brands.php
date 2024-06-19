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
        <h2 class="content-title card-title">Brand</h2>
        <p>Brand and vendor management</p>
      </div>
      <div><a class="btn btn-primary" href="#"><i class="text-muted material-icons md-post_add"></i>Add New Brand</a></div>
    </div>
    <div class="card mb-4">
      <header class="card-header">
        <div class="row gx-3">
          <div class="col-lg-4 mb-lg-0 mb-15 me-auto">
            <input class="form-control" type="text" placeholder="Search...">
          </div>
          <div class="col-lg-2 col-6">
            <div class="custom_select">
              <select class="form-select select-nice">
                <option selected="">Categories</option>
                <option>Technology</option>
                <option>Fashion</option>
                <option>Home Decor</option>
                <option>Healthy</option>
                <option>Travel</option>
                <option>Auto-car</option>
              </select>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <input class="form-control" type="date" name="">
          </div>
        </div>
      </header>
      <div class="card-body">
        <div class="row gx-3">
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-1.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Cardinal</h6><a href="#"> 398 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-2.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">BirdFly</h6><a href="#"> 13 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-3.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Cocorico</h6><a href="#"> 13 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-4.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Yogilist</h6><a href="#"> 87 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-5.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Acerie</h6><a href="#"> 10 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-6.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Shivakin</h6><a href="#"> 398 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-7.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Acera</h6><a href="#"> 398 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-8.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Lion electronics</h6><a href="#"> 398 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-9.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">TwoHand</h6><a href="#"> 398 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-10.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Kiaomin</h6><a href="#"> 398 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-11.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Nokine</h6><a href="#"> 398 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-12.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Company name</h6><a href="#"> 13 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-13.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Company name</h6><a href="#"> 398 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-14.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Company name</h6><a href="#"> 13 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-15.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Company name</h6><a href="#"> 398 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-16.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Company name</h6><a href="#"> 13 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-17.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Company name</h6><a href="#"> 13 items</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <figure class="card border-1">
              <div class="card-header bg-white text-center"><img class="img-fluid" height="76" src="assets/imgs/brands/brand-18.jpg" alt="Logo"></div>
              <figcaption class="card-body text-center">
                <h6 class="card-title m-0">Company name</h6><a href="#"> 13 items</a>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="main-footer font-xs">
    <?php
    include_once("header_admin.php")
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