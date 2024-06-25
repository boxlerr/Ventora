<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="assets/css/style.css?v=3.0.0" rel="stylesheet">
    <title>Register - Ecom Marketplace Template</title>
  </head>
  <body>
    <?php
    include_once("consultas_bd.php");
    include_once("main.php");
    ?>
    <main class="main">
      <section class="section-box shop-template mt-60">
        <div class="container">
          <div>
            <form action="verificarUsuario.php" method="post" class="row mb-100">
              <!-- <div class="col-lg-1"></div> -->
              <h3>Create an account</h3>
              <!-- <p class="font-md color-gray-500">Access to all features. No credit card required.</p> -->
              <div class="mt-10"><span class="font-xs color-gray-500 font-medium">Already have an account?</span><a class="font-xs color-brand-3 font-medium" href="page-login.php"> Sign In</a></div>
              <div class="mt-15 mb-15"></div>
              <div class="col-lg-6">
                <div class="form-register">
                  <div class="form-group">
                    <label class="mb-5 font-sm color-gray-700">Nombre completo *</label>
                    <input class="form-control" type="text" placeholder="Steven job" name="nombre">
                  </div>
                  <div class="form-group">
                    <label class="mb-5 font-sm color-gray-700">Email *</label>
                    <input class="form-control" type="text" placeholder="stevenjob@gmail.com" name="email">
                  </div>
                  <div class="form-group">
                    <label class="mb-5 font-sm color-gray-700">Telefono</label>
                    <input class="form-control" type="text" placeholder="stevenjob" name="telefono">
                  </div>
                  <div class="form-group">
                    <label class="mb-5 font-sm color-gray-700">Fecha de nacimiento *</label>
                    <input class="form-control" type="date" placeholder="stevenjob" name="fecha_nacimiento">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-register">
                  <div class="form-group">
                    <label class="mb-5 font-sm color-gray-700">Nacionalidad *</label>
                    <input class="form-control" type="text" placeholder="stevenjob" name="nacionalidad">
                  </div>
                  <div class="form-group">
                    <label class="mb-5 font-sm color-gray-700">Password *</label>
                    <input class="form-control" type="password" placeholder="******************" name="contrasena">
                  </div>
                  <div class="form-group">
                    <label class="mb-5 font-sm color-gray-700">Re-Password *</label>
                    <input class="form-control" type="password" placeholder="******************" name="contrasena2">
                  </div>
                  <!-- <div class="form-group"> -->
                    <!-- </div> -->
                    <div class="form-group">
                    <label class="mb-5 font-sm"><input class="checkagree" type="checkbox">By clicking Register button, you agree our terms and policy,</label>
                    <input class="font-md-bold btn btn-buy" type="submit" value="Sign Up" name="crear">
                    <?php
                    if(isset($_GET["error"])){
                      echo "<div class='error'><p>$_GET[error]</p></div>";
                    }
                    ?>
                  </div>
                </div>
              </div>
            </form>
            <!-- <div class="col-lg-5">
              <div class="box-login-social pt-65 pl-50">
                <h5 class="text-center">Use Social Network Account</h5>
                <div class="box-button-login mt-25"><a class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<img src="assets/imgs/page/account/google.svg" alt="Ecom"></a><a class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<span class="color-blue font-md-bold">Facebook</span></a><a class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<img src="assets/imgs/page/account/amazon.svg" alt="Ecom"></a></div>
                <div class="mt-10 text-center"><span class="font-xs color-gray-900">Buying for work?</span><a class="color-brand-1 font-xs" href="#">Create a free business account</a></div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      <section class="section-box box-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12">
              <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
              <p class="font-lg color-white">Get E-mail updates about our latest shop and <span class="font-lg-bold">special offers.</span></p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12">
              <div class="box-form-newsletter mt-15">
                <form class="form-newsletter">
                  <input class="input-newsletter font-xs" value="" placeholder="Your email Address">
                  <button class="btn btn-brand-2">Sign Up</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
    <?php
      include_once("footer.php")
      ?>
    </footer>
    <script src="assets/js/vendors/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/waypoints.js"></script>
    <script src="assets/js/vendors/wow.js"></script>
    <script src="assets/js/vendors/magnific-popup.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/isotope.js"></script>
    <script src="assets/js/vendors/scrollup.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/noUISlider.js"></script>
    <script src="assets/js/vendors/slider.js"></script>
    <!-- Count down-->
    <script src="assets/js/vendors/counterup.js"></script>
    <script src="assets/js/vendors/jquery.countdown.min.js"></script>
    <!-- Count down--><script src="assets/js/vendors/jquery.elevatezoom.js"></script>
<script src="assets/js/vendors/slick.js"></script>
    <script src="assets/js/main.js?v=3.0.0"></script>
    <script src="assets/js/shop.js?v=1.2.1"></script>
  </body>
</html>