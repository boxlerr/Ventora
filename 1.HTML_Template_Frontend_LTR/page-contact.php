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
    <title>Contacto</title>
  </head>
  <body>
    <?php
      include_once("consultas_bd.php");
      include_once("main.php");
    ?>
    <main class="main">
      <div class="section-box">
      </div>
      <section class="section-box shop-template mt-0">
        <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="contact-form">
                  <h3 class="color-brand-3 mt-60">Contact Us</h3>
                  <p class="font-sm color-gray-700 mb-30">Our team would love to hear from you!</p>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="First name">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Last name">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input class="form-control" type="tel" placeholder="Phone number">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input class="btn btn-buy w-auto" type="submit" value="Send message">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325467.51371614134!2d-58.481592!3d-34.603722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1ses!2s!4v1664373110059!5m2!1ses!2s&hl=es" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          <div class="box-contact-address pt-80 pb-50">
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
        </div>
        <div class="box-contact-support pt-80 pb-50 background-gray-50">
          <div class="container">
          <div class="row">
                  <div class="col-lg-4 mb-30 text-center text-lg-start">
                    <h3 class="mb-5">We‘d love to hear from you</h3>
                    <p class="font-sm color-gray-700">Chat with our friendly team</p>
                  </div>
                  <div class="col-lg-4 text-center mb-30">
                    <div class="box-image mb-20"><img src="assets/imgs/page/contact/chat.svg" alt="Ecom"></div>
                    <h4 class="mb-5">Chat to sales</h4>
                    <p class="font-sm color-gray-700 mb-5">Speak to our team.</p><a class="font-sm color-gray-900" href="mailto:sales@ecom.com">ventasvestore@gmail.com</a>
                  </div>
                  <div class="col-lg-4 text-center mb-30">
                    <div class="box-image mb-20"><img src="assets/imgs/page/contact/call.svg" alt="Ecom"></div>
                    <h4 class="mb-5">Call us</h4>
                    <p class="font-sm color-gray-700 mb-5">Mon-Fri from 8am to 5pm</p><a class="font-sm color-gray-900" href="tel:+1(555)000-0000">+1(555)000-0000</a>
                  </div>
                </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-90 mb-50">
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