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
      <div class="footer-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 width-25 mb-30">
              <h4 class="mb-30 color-gray-1000">Contact</h4>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Address:</strong> 502 New Design Str, Melbourne, San Francisco, CA 94110, United States</div>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Phone:</strong> (+01) 123-456-789</div>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">E-mail:</strong> contact@ecom-market.com</div>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Hours:</strong> 8:00 - 17:00, Mon - Sat</div>
              <div class="mt-30"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
            </div>
            <div class="col-lg-3 width-20 mb-30">
              <h4 class="mb-30 color-gray-1000">Make Money with Us</h4>
              <ul class="menu-footer">
                <li><a href="page-about-us.php">Mission &amp; Vision</a></li>
                <li><a href="page-about-us.php">Our Team</a></li>
                <li><a href="page-careers.html">Careers</a></li>
                <li><a href="#">Press &amp; Media</a></li>
                <li><a href="#">Advertising</a></li>
                <li><a href="#">Testimonials</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-16 mb-30">
              <h4 class="mb-30 color-gray-1000">Company</h4>
              <ul class="menu-footer">
                <li><a href="blog-2.html">Our Blog</a></li>
                <li><a href="#">Plans &amp; Pricing</a></li>
                <li><a href="#">Knowledge Base</a></li>
                <li><a href="#">Cookie Policy</a></li>
                <li><a href="#">Office Center</a></li>
                <li><a href="blog.html">News &amp; Events</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-16 mb-30">
              <h4 class="mb-30 color-gray-1000">My account</h4>
              <ul class="menu-footer">
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Editor Help</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Live Chatting</a></li>
                <li><a href="page-contact.php">Contact Us</a></li>
                <li><a href="#">Support Center</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-23">
              <h4 class="mb-30 color-gray-1000">App &amp; Payment</h4>
              <div>
                <p class="font-md color-gray-900">Download our Apps and get extra 15% Discount on your first Order&mldr;!</p>
                <div class="mt-20"><a class="mr-10" href="#"><img src="assets/imgs/template/appstore.png" alt="Ecom"></a><a href="#"><img src="assets/imgs/template/google-play.png" alt="Ecom"></a></div>
                <p class="font-md color-gray-900 mt-20 mb-10">Secured Payment Gateways</p><img src="assets/imgs/template/payment-method.png" alt="Ecom">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-2">
        <div class="footer-bottom-1">
          <div class="container">
            <div class="footer-2-top mb-20"><a href="index.html"><img alt="Ecom" src="assets/imgs/template/logo-2.svg"></a><a class="font-xs color-gray-1000" href="#">EcomMarket.com</a><a class="font-xs color-gray-1000" href="#">Ecom Partners</a><a class="font-xs color-gray-1000" href="#">Ecom Bussiness</a><a class="font-xs color-gray-1000" href="#">Ecom Factory</a></div>
            <div class="footer-2-bottom">
              <div class="head-left-footer">
                <h6 class="color-gray-1000">Electronic:</h6>
              </div>
              <div class="tags-footer"><a href="shop-fullwidth.html">Cell Phones</a><a href="shop-grid.php">Headphones</a><a href="shop-grid-2.html">Television &amp; Video</a><a href="shop-list.html">Game Controller</a><a href="shop-list-2.html">Apple Watch</a><a href="shop-grid.php">HTC</a><a href="shop-grid.php">Ipad</a><a href="shop-grid.php">Keyboard</a><a href="shop-grid.php">Samsung</a><a href="shop-grid.php">Wireless Speaker</a><a href="shop-grid.php">Samsung Galaxy</a><a href="shop-grid.php">Gaming Mouse</a><a href="shop-grid.php">eBook Readers</a><a href="shop-grid.php">Service Plans</a><a href="shop-grid.php">Home Audio</a><a href="shop-grid.php">Office Electronics</a><a href="shop-grid.php">Lenovo</a><a href="shop-grid.php">Mackbook Pro M1</a><a href="shop-grid.php">HD Videos Player</a></div>
            </div>
            <div class="footer-2-bottom">
              <div class="head-left-footer">
                <h6 class="color-gray-1000">Furniture:</h6>
              </div>
              <div class="tags-footer"><a href="shop-grid.php">Sofa</a><a href="shop-grid.php">Chair</a><a href="shop-grid.php">Dining Table</a><a href="shop-grid.php">Living Room</a><a href="shop-grid.php">Table Lamp</a><a href="shop-grid.php">Night Stand</a><a href="shop-grid.php">Computer Desk</a><a href="shop-grid.php">Bar Table</a><a href="shop-grid.php">Pillow</a><a href="shop-grid.php">Radio</a><a href="shop-grid.php">Clock</a><a href="shop-grid.php">Bad Room</a><a href="shop-grid.php">Stool</a><a href="shop-grid.php">Television</a><a href="shop-grid.php">wardrobe</a><a href="shop-grid.php">Living Room Tables</a><a href="shop-grid.php">Dressers</a><a href="shop-grid.php">Patio Sofas</a><a href="shop-grid.php">Nursery</a><a href="shop-grid.php">Kitchen</a><a href="shop-grid.php">Accent Furniture</a><a href="shop-grid.php">Replacement Parts</a></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-bottom mt-20">
            <div class="row">
              <div class="col-lg-6 col-md-12 text-center text-lg-start"><span class="color-gray-900 font-sm">Copyright &copy; 2022 Ecom Market. All rights reserved.</span></div>
              <div class="col-lg-6 col-md-12 text-center text-lg-end">
                <ul class="menu-bottom">
                  <li><a class="font-sm color-gray-900" href="page-term.php">Conditions of Use</a></li>
                  <li><a class="font-sm color-gray-900" href="page-term.php">Privacy Notice</a></li>
                  <li><a class="font-sm color-gray-900" href="page-careers.html">Interest-Based Ads</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
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