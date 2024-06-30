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
    <title>Contacto</title>
  </head>
  <body>
    <?php
      include_once("consultas_bd.php");
      include_once("main.php");
    ?>
    <main class="main">
    <main class="main">
    <div class="section-box"></div>
    <section class="section-bax shop-templata mt-0">
  <div class="container form-container">
    <div class="row justify-content-center">
      <div class="col-lg-8 form-wrapper">
        <form action="https://formsubmit.co/contacto@vestore.com.ar" method="POST">
          <h3 class="color-brand-3 mt-60 form-title" data-section="exportar" data-value="exportar">Contactanos</h3>
          <p class="font-sm color-gray-700 mb-30 form-description" data-section="exportar" data-value="el_mundo_te_espera">¡A nuestro equipo le encantaría saber de usted!</p>
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="form-group" data-section="placeholder" data-value="nombre">
                <input class="form-control form-input" type="text" placeholder="Nombre" name="nombre" id="nombre" required>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="form-group" data-section="placeholder" data-value="apellido">
                <input class="form-control form-input" type="text" placeholder="Apellido" name="apellido" id="apellido" required>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group" data-section="placeholder" data-value="mail">
                <input class="form-control form-input" type="email" placeholder="Email" name="mail" id="mail" required>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group" data-section="placeholder" data-value="telefono">
                <input class="form-control form-input" type="tel" placeholder="Numero de telefono" name="telefono" id="telefono" required>
              </div>
            </div>
            <section id="dudas"></section>
            <div class="col-lg-12">
              <div class="form-group" data-section="placeholder" data-value="cuentanos">
                <textarea class="form-control form-input" placeholder="Mensaje" rows="5" name="comentario" id="comentario" required></textarea>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group" data-section="placeholder" data-value="enviar_mensaje">
                <input class="btn btn-buy w-auto form-submit" type="submit" value="Enviar mensaje">
              </div>
            </div>

            <input type="hidden" name="_next" value="http://localhost/ventora/1.HTML_Template_Frontend_LTR/page-contact.php">
            <input type="hidden" name="_captcha" value="false">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


    <section class="box-contact-support pt-80 pb-50 background-gray-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-4 mb-30 text-center text-lg-start">
            <h3 class="mb-5">Nos encantaría saber de ti</h3>
            <p class="font-sm color-gray-700">Contactate con nuestro amable equipo</p>
            <ul class="list-services mt-20">
              <li class="hover-up"><a href="importar.php">Importar</a></li>
              <li class="hover-up"><a href="exportar.php">Exportar</a></li>
              <li class="hover-up"><a href="page-contact.php">Contacto</a></li>
              <li class="hover-up"><a href="faqs.php">Faqs</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 text-center mb-30">
            <div class="box-image mb-20"><img src="assets/imgs/img/chat-icon.webp" alt="Chat de ventas" class="imagen-pequena"></div>
            <h4 class="mb-5">Chat de ventas</h4>
            <p class="font-sm color-gray-700 mb-5">Habla con nuestro equipo.</p>
            <a class="font-sm color-gray-900" href="mailto:sales@ecom.com">contacto@vestore.com</a>
          </div>
          <div class="col-lg-4 col-md-6 text-center mb-30">
            <div class="box-image mb-20"><img src="assets/imgs/img/llamar-icon.webp" alt="Call us" class="imagen-pequena"></div>
            <h4 class="mb-5">Llamanos</h4>
            <p class="font-sm color-gray-700 mb-5">Lun-Vie de 8am a 5pm</p>
            <a class="font-sm color-gray-900" href="tel:+1(555)000-0000">+1(555)000-0000</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            <!-- <div class="box-contact-address pt-80 pb-50">
              <div class="row">
              <div class="col-lg-3 mb-30">
                <h3 class="mb-5">Visit our stores</h3>
                <p class="font-sm color-gray-700 mb-30">Find us at these locations</p><a class="btn btn-buy w-auto">View map</a>
              </div>
                <div class="col-lg-3">
                  <div class="mb-30">
                  <h4>Casa Ale</h4>
                  <p class="font-sm color-gray-700">742 Evergreen Terrace<br>BSAS, 60601, ARG</p>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="mb-30">
                  <h4>Casa Bauti</h4>
                  <p class="font-sm color-gray-700">Adolfo Alsina 2260<br>BSAS, 60601, ARG</p>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="mb-30">
                  <h4>Casa Juli</h4>
                  <p class="font-sm color-gray-700">Thames 2439, Piso X<br>BSAS, 60601, ARG</p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
      <!-- <section class="section-box mt-90 mb-50">
        <div class="container">
          <ul class="list-col-5">
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/delivery.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Free Delivery</h5>
                  <p class="font-sm color-gray-500">From all orders over $10</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/support.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                  <p class="font-sm color-gray-500">Shop with an expert</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/voucher.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Gift voucher</h5>
                  <p class="font-sm color-gray-500">Refer a friend</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/return.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Return &amp; Refund</h5>
                  <p class="font-sm color-gray-500">Free return over $200</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/secure.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Secure payment</h5>
                  <p class="font-sm color-gray-500">100% Protected</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section> -->
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
    <script src="assets/js/javaS.js"></script>
  </body>
</html>