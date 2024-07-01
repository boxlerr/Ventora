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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css?v=3.0.0" rel="stylesheet">
    <title>Exportar - Vestore</title>
  </head>
  <body>
    <?php
      include_once("consultas_bd.php");
      include_once("main.php");
    ?>    
    <main class="main">
      <section class="section-box shop-template mt-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto">
            <h2 class="item-cat text-center mt-30 mb-50">Exporta con Vestore</h2>
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner img-carousel">
                                <div class="carousel-item active">
                                    <img src="assets/imgs/img/exportar-1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Innovación en cada entrega</h5>
                                        <p>Descubre cómo Vestore transforma la exportación de auriculares con tecnología avanzada y procesos eficientes.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgs/img/exportar-2.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Calidad garantizada</h5>
                                        <p>Conecta con los mejores auriculares del mercado, asegurando una experiencia auditiva incomparable con cada envío de Vestore.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgs/img/exportar-3.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Soporte global personalizado</h5>
                                        <p>Desde consultas iniciales hasta la entrega final, Vestore está a tu lado en cada paso del proceso de exportación.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="box-contact-support pt-80 pb-50 pl-50 pr-50 background-gray-50 mt-50 mb-90">
                          <div class="container">
                            <div class="row">
                             <div class="col-lg-3 mb-30">
                                <div class="support-item text-center text-lg-start">
                                  <h4 class="mb-3">Amplia experiencia en el mercado</h4>
                                  <div class="item-content">
                                    <p class="font-md color-gray-700 mb-4">Con más de 10 años en el sector, tenemos la experiencia necesaria para gestionar tus exportaciones de manera eficiente y segura.</p>
                                  </div>
                                  </div>
                              </div>
                              <div class="col-lg-3 mb-30">
                                <div class="support-item text-center text-lg-start">
                                  <h4 class="mb-3">Optimización de costos</h4>
                                  <div class="item-content">
                                    <p class="font-md color-gray-700 mb-4">Utilizamos estrategias avanzadas para reducir costos en cada etapa del proceso de exportación, maximizando tu rentabilidad.</p>
                                  </div>
                               </div>
                              </div>
                              <div class="col-lg-3 mb-30">
                                <div class="support-item text-center text-lg-start">
                                  <h4 class="mb-3">Asistencia personalizada</h4>
                                  <div class="item-content">
                                    <p class="font-md color-gray-700 mb-4">Nuestro equipo de expertos te brinda soporte personalizado en todo momento, asegurando que tus necesidades específicas sean atendidas.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3 mb-30">
                                <div class="support-item text-center text-lg-start">
                                  <h4 class="mb-3">Gestión de riesgos</h4>
                                  <div class="item-content">
                                    <p class="font-md color-gray-700 mb-4">Implementamos medidas rigurosas de gestión de riesgos para proteger tus bienes y asegurar que tus exportaciones lleguen a destino sin contratiempos.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

              
              <div class="animado">     <!--Cambiar por un correo de exportar-->
              <form action="https://formsubmit.co/usuario@gmail.com" method="POST">
                <h3 class="color-brand-3 mt-60" data-section="exportar" data-value="exportar">Exportar</h3>
                <p class="font-sm color-gray-700 mb-30" data-section="exportar" data-value="el_mundo_te_espera">El mundo te espera!</p>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group" data-section="placeholder" data-value="nombre">
                      <input class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre" required>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group" data-section="placeholder" data-value="apellido">
                        <input class="form-control" type="text" placeholder="Apellido" name="apellido" id="apellido" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group" data-section="placeholder" data-value="mail">
                        <input class="form-control" type="email" placeholder="Email" name="mail" id="mail" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group" data-section="placeholder" data-value="telefono">
                        <input class="form-control" type="tel" placeholder="Numero de telefono" name="telefono" id="telefono" required>
                      </div>
                    </div>
                    <section id="dudas"></section>
                    <div class="col-lg-12">
                      <div class="form-group" data-section="placeholder" data-value="cuentanos">
                        <textarea class="form-control" placeholder="Cuentanos sobre lo que quieras exportar y nosotros te contactamos!" rows="5" name="comentario" id="comentario" required></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group" data-section="placeholder" data-value="enviar_mensaje">
                        <input class="btn btn-buy w-auto" type="submit" value="Enviar mensaje">
                      </div>
                    </div>

                    <input type="hidden" name="_next" value="http://localhost/ventora/1.HTML_Template_Frontend_LTR/exportar.php">
                    <input type="hidden" name="_captcha" value="false">

                  </div>
              </form>
              </div>
            </div>
          </div>
        </div>

        <section class="section-image-text">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="image-container">
                <img src="assets/imgs/img/banner-exportar.jpg" alt="Banner Exportar" class="img-fluid">
              <div class="overlay"></div> <!-- Capa de superposición -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="text-container">
              <h3 class="text-effect texto-izquierda">¡Gracias por confiar en Vestore!</h3>
              <p class="font-md color-white texto-izquierda">En Vestore, nos enorgullecemos de ofrecer servicios de importación y exportación de alta calidad, facilitando el crecimiento y éxito de tu negocio en el mercado global. Nuestra dedicación a la excelencia y nuestro compromiso con la satisfacción del cliente nos distinguen como tu socio ideal en el comercio internacional.</p>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>