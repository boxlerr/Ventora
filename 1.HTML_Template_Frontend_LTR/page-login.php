<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/img/logovestoreventana.png">
    <link href="assets/css/style.css?v=3.0.0" rel="stylesheet">
    <title>Login</title>
  </head>
  <body>
    <?php
    include_once("consultas_bd.php");
    include_once("main.php");
    ?>
    <main class="main">
      <section class="section-box shop-template mt-60">
        <div class="container">
          <div class="row mb-100">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
              <h3>Login</h3>
              <p class="font-md color-gray-500">¡Bienvenido de nuevo!</p>
              <form class="form-register mt-30 mb-30" action="verificarUsuario.php" method="post">
                <div class="form-group">  
                  <label class="mb-5 font-sm color-gray-700" for="email">Email</label>
                  <input class="form-control" type="text" placeholder="example@hotmail.com" name="email">
                </div>
                <div class="form-group">
                  <label class="mb-5 font-sm color-gray-700" for="clave">Password</label>
                  <input class="form-control" type="password" placeholder="******************" name="clave">
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mt-20"><span class="font-xs color-gray-500 font-medium">¿No tienes cuenta?</span><a class="font-xs color-brand-3 font-medium" href="page-register.php"> Crear cuenta</a></div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mt-20"><a class="font-xs color-gray-500" href="#">¿Olvidaste tu contraseña?</a></div>
                  </div>
                </div>
                <div class="form-group">
                  <?php
                  if(isset($_GET["error"])){
                    echo "<div class='error'><p>$_GET[error]</p></div>";
                  }
                  ?>
                  <input name="iniciarSesion" class="font-md-bold btn btn-buy" type="submit" value="Iniciar Sesion">
                </div>
              </form>
            </div>
            <div class="col-lg-5"></div>
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