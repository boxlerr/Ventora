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
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/img/logovestoreventana.png">
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
          <form action="verificarUsuario.php" method="post" class="row mb-100" id="registrationForm">
              <h3>Crear una cuenta</h3>
              <div class="mt-10"><span class="font-xs color-gray-500 font-medium">¿Ya tenes una cuenta?</span><a class="font-xs color-brand-3 font-medium" href="page-login.php"> Iniciar Sesion</a></div>
              <div class="mt-15 mb-15"></div>
              <div class="col-lg-6">
                  <div class="form-register">
                      <div class="form-group">
                          <label class="mb-5 font-sm color-gray-700">Nombre completo *</label>
                          <input class="form-control" type="text" placeholder="" name="nombre">
                      </div>
                      <div class="form-group">
                          <label class="mb-5 font-sm color-gray-700">Email *</label>
                          <input class="form-control" type="text" placeholder="" name="email">
                      </div>
                      <div class="form-group">
                          <label class="mb-5 font-sm color-gray-700">Telefono</label>
                          <input class="form-control" type="text" placeholder="" name="telefono">
                      </div>
                      <div class="form-group">
                          <label class="mb-5 font-sm color-gray-700">Fecha de nacimiento *</label>
                          <input class="form-control" type="date" placeholder="" name="fecha_nacimiento">
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="form-register">
                      <div class="form-group">
                          <label class="mb-5 font-sm color-gray-700">Nacionalidad *</label>
                          <input class="form-control" type="text" placeholder="" name="nacionalidad">
                      </div>
                      <div class="form-group">
                          <label class="mb-5 font-sm color-gray-700">Password *</label>
                          <input class="form-control" type="password" placeholder="" name="contrasena">
                      </div>
                      <div class="form-group">
                          <label class="mb-5 font-sm color-gray-700">Re-Password *</label>
                          <input class="form-control" type="password" placeholder="" name="contrasena2">
                      </div>
                        <div class="form-group">
                          <label class="mb-5 font-sm"><input class="checkagree" type="checkbox" name="agree">Acepto los terminos y condiciones</label>
                          <input type="hidden" name="crear">
                          <input class="font-md-bold btn btn-buy" type="submit" value="Crear cuenta" name="crear">
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
            <h3 class="color-white" data-section="index" data-value="suscripcion">Suscribete y consigue 10% de Descuento</h3>
            <p class="font-lg color-white" data-section="index" data-value="suscripcion_descripcion">Recibe actualizaciones por correo electrónico sobre nuestra tienda y ofertas especiales</span></p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="box-form-newsletter mt-15">
              <form class="form-newsletter">
              <div data-section="placeholder" data-value="ingresa_mail"> 
                <input class="input-newsletter font-xs" value="" placeholder="Ingresa tu mail">
                </div>
                <button class="btn btn-brand-2" data-section="index" data-value="ingresar">Ingresar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
      <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modalMessage"></p>
        </div>
      </div>
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
    <script src="assets/js/javaS.js"></script>
  </body>
</html>