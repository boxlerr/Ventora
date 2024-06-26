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
    <title>Importar - Vestore</title>
  </head>
  <body>
    <?php
      include_once("consultas_bd.php");
      include_once("main.php");
    ?>
    <main class="main">
      <section class="section-box shop-template mt-30">
        
        <div class="fondo-importar">
          <h1 class="texto-fondo">Aprende como importar con Vestore</h1>
          <p class="subtexto-fondo">Te ofrecemos la mejor ayuda y servicio a la hora de importar o exportar</p>
          <div class="container">
          <div class="row justify-content-center Power-Contenedor">
              <div class="col">
                <a href="#contacto" class="boton-importar texto-boton">Contacto</a>
                <a href="#dudas" class="boton-importar texto-boton">Dudas</a>
              </div>
          </div>
          </div>
        </div>
        
        <div class="container">
            <div class="col-lg-10 mx-auto">
              <h2 class="item-cat titulo-importar" data-section="importar" data-value="importa_con_vestore">Importa con Vestore</h2>

              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col img-importar">
                  <div class="card-container card-border">
                    <img src="assets/imgs/img/importar-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" data-section="importar" data-value="honestidad">Honestidad</h5>
                      <p class="card-text"><span class="subtitulo-card-importar" data-section="importar" data-value="con_cada_compra">Con cada compra</span><br>
                      <div class="linea-importar" id="contacto"></div>
                      <span data-section="importar" data-value="importar_text_1">En Vestore, nos especializamos en ofrecer soluciones integrales de importación que facilitan el acceso a mercados internacionales. Nuestro objetivo es simplificar el proceso de importación, brindándote la tranquilidad de saber que tus productos llegarán a tiempo y en perfectas condiciones.</span></p>
                    </div>
                  </div>
                </div>
                <div class="col img-importar">
                  <div class="card-container card-border">
                    <img src="assets/imgs/img/importar-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" data-section="importar" data-value="compromiso">Compromiso</h5>
                      <p class="card-text"><span class="subtitulo-card-importar" data-section="importar" data-value="con_los_clientes">Con los clientes y compañeros</span><br>
                      <div class="linea-importar"></div>
                      <span data-section="importar" data-value="importar_text_2">Nos diferenciamos por nuestra dedicación y experiencia, utilizando tecnología avanzada y estrategias personalizadas para cada cliente. Ya sea que necesites asesoría para navegar las complejidades de las regulaciones internacionales o soluciones logísticas para optimizar tus envíos, estamos aquí para ayudarte en cada paso del camino.</span></p>
                    </div>
                  </div>
                </div>
                <div class="col img-importar">
                  <div class="card-container card-border">
                    <img src="assets/imgs/img/importar-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" data-section="importar" data-value="confiables">Confiables</h5>
                      <p class="card-text"><span class="subtitulo-card-importar" data-section="importar" data-value="garantizando">Garantizando el mejor servicio</span><br>
                      <div class="linea-importar"></div>
                      <span data-section="importar" data-value="importar_text_3">Confía en Vestore para gestionar todas tus necesidades de importación. Con un equipo de expertos y una red global de socios, garantizamos que tu negocio se mantenga competitivo y eficiente en el dinámico mercado global.</span></p>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="animado">      <!--Cambiar por un correo de importar-->
              <form action="https://formsubmit.co/usuario@gmail.com" method="POST">
                <h3 class="color-brand-3 mt-60" data-section="importar" data-value="importar">Importar</h3>
                <p class="font-sm color-gray-700 mb-30" data-section="importar" data-value="te_traemos">Te traemos lo que quieras a la puerta de tu casa!</p>
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
                        <textarea class="form-control" placeholder="Cuentanos sobre lo que quieras importar y nosotros te contactamos!" rows="5" name="comentario" id="comentario" required></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group" data-section="placeholder" data-value="enviar_mensaje">
                        <input class="btn btn-buy w-auto" type="submit" value="Enviar mensaje">
                      </div>
                    </div>

                    <input type="hidden" name="_next" value="http://localhost/ventora/1.HTML_Template_Frontend_LTR/importar.php">
                    <input type="hidden" name="_captcha" value="false">

                  </div>
              </form>
              </div>

              
              <div class="container importar animado">
                <div class="row">
                  <div class="container-fluid">
                    <div class="faq-centrado">
                      <h3 data-section="importar" data-value="faq">Resolvemos tus dudas!</h3>
                    </div>
                    
                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-1">Nunca importe, no sé cómo hacerlo</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-1">Contáctanos para una consulta gratuita. Nos cuentas qué productos deseas importar y desde dónde. Nosotros te ayudamos a encontrar proveedores confiables en el extranjero. Tenemos una red de contactos y herramientas para verificar la calidad y reputación de los proveedores.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-2">¿Cuanto me va a salir importar, existen costes extras?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-2">Solicitamos cotizaciones a los proveedores seleccionados y te las presentamos para que elijas la que mejor se adapte a tus necesidades y presupuesto.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-3">¿Qué se detallará en la cotización que me enviarán?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-3">1. Descripción del Producto:<br>
                              - Detalles del producto que deseas importar (nombre, cantidad, especificaciones técnicas, etc.).<br>
                              - Información del proveedor (nombre, ubicación, contacto).<br><br>
                              2. Costo del Producto:<br>
                              - Precio unitario y total del producto según la cantidad solicitada.<br>
                              - Moneda en la que se realiza la transacción (dólares, euros, etc.).<br><br>
                              3. Flete Internacional:<br>
                              - Método de envío (aéreo, marítimo o terrestre).<br>
                              - Costo del transporte desde el país de origen hasta Argentina.<br>
                              - Tiempo estimado de tránsito.<br><br>
                              4. Seguro de Carga:<br>
                              - Costo del seguro para proteger la mercancía durante el transporte.<br>
                              - Cobertura y términos del seguro.<br><br>
                              5. Derechos de Aduana e Impuestos:<br>
                              - Estimación de los aranceles e impuestos que deberán pagarse al ingresar la mercancía a Argentina.<br>
                              - Cálculo basado en la clasificación arancelaria del producto y su valor.<br><br>
                              6. Trámites Aduaneros:<br>
                              - Costos asociados a la gestión y liberación de la mercancía en la aduana.<br>
                              - Servicios incluidos (despacho aduanero, documentación, etc.).<br><br>
                              7. Costos de Almacenamiento (si aplican):<br>
                              - Detalle de los costos de almacenamiento en caso de que la mercancía necesite ser almacenada temporalmente.<br>
                              - Duración y condiciones del almacenamiento.<br><br>
                              8. Transporte Local:<br>
                              - Costo del transporte desde el puerto o aeropuerto en Argentina hasta tu ubicación final.<br>
                              - Método de transporte (camión, mensajería, etc.).<br><br>
                              9. Honorarios del Servicio de Importación:<br>
                              - Nuestros honorarios por la gestión completa del proceso de importación.<br>
                              - Servicios incluidos (búsqueda de proveedores, negociación, coordinación logística, etc.).<br><br>
                              10. Costos Extras (si aplican):<br>
                              - Detalle de cualquier costo adicional que pueda surgir (inspecciones, certificaciones, tarifas bancarias, etc.).<br>
                              - Justificación y explicación de estos costos.<br><br>
                              11. Términos y Condiciones:<br>
                              - Plazos de pago y métodos aceptados.<br>
                              - Tiempos estimados de entrega.<br>
                              - Políticas de cambios, cancelaciones y devoluciones.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-4">¿Cuál es el monto minimo para poder importar?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-4">En Argentina, no existe un monto mínimo legalmente establecido para realizar importaciones. Sin embargo, desde nuestra experiencia y para optimizar los costos y la eficiencia del proceso, recomendamos que las importaciones se realicen a partir de un valor mínimo de 1.000 USD. Este monto permite cubrir de manera efectiva los costos asociados y maximizar la rentabilidad de tu operación.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-5">¿Necesito tener una empresa para importar mercaderías?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-5">No, no necesitas tener una empresa para importar mercaderías. Nuestro servicio integral se encarga de todo el proceso de importación, permitiéndote recibir tu mercancía en Argentina sin la necesidad de abrir una empresa.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-6">¿Cómo se paga la mercadería?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-6">Pagar la mercadería importada es un proceso sencillo y flexible. Ofrecemos varias opciones de pago para adaptarnos a tus necesidades y preferencias.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-7">¿Cómo se controla la calidad de la mercadería?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-7">Garantizar la calidad de la mercadería es una de nuestras prioridades.<br>
                      Trabajamos contigo para seleccionar proveedores confiables y de buena reputación, realizando una evaluación exhaustiva considerando su historial, capacidad de producción y cumplimiento de normas de calidad, verificamos la calidad solicitando fotografías, videos, muestras físicas y pesaje, y pedimos todos los certificados de calidad disponibles que respalden la conformidad del producto con las normas internacionales y especificaciones acordadas, como certificados ISO e informes de pruebas de laboratorio.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-8">¿Necesito hacer algún trámite?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-8">Para poder importar mercaderías, es necesario cumplir con algunos trámites básicos. En particular, necesitas:<br><br>
                            1. Ser Responsable Inscripto:<br>
                            - Debes estar registrado como Responsable Inscripto en la Administración Federal de Ingresos Públicos (AFIP) de Argentina. Esto te permitirá realizar operaciones comerciales de importación y cumplir con las obligaciones fiscales correspondientes.<br><br>
                            2. Domicilio Fiscal Declarado:<br>
                            - Es necesario tener un domicilio fiscal declarado ante la AFIP. Este es el lugar donde recibirás todas las notificaciones y comunicaciones oficiales relacionadas con tus operaciones de importación.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-9">¿Cuánto tiempo demora una importación?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-9">El tiempo que demora una importación puede variar dependiendo de varios factores, pero en general, el proceso completo puede tardar entre 6 y 15 días hábiles.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-10">¿La mercadería tiene seguro?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-10">Es recomendable contratar un seguro de carga para proteger tu mercancía contra daños o pérdidas durante el transporte. Te ofrecemos opciones de seguro y te ayudamos a seleccionar la cobertura adecuada.</div>
                    </div>

                    <div class="faq-item">
                      <div class="faq-question" onclick="toggleAnswer(this)" data-section="importar" data-value="faq-preg-11">Tengo otras consultas antes de cotizar, como las puedo evacuar?</div>
                      <div class="faq-answer" data-section="importar" data-value="faq-resp-11">Por nuestro numero telefonico, Instagram, mail. (despues ingresar)</div>
                    </div>
                  </div>
                </div>
              </div>
        </div>   
      </div>
      
        <div class="container-fluid mt-2">
            <div class="row">
              <div class="col-lg-7">
                <div class="custom-box bg-dark text-white d-flex align-items-center h-100 animado">
                  <div>
                    <h2 class="custom-title mb-4">¡Descubre las maravillas de nuestros auriculares!</h2>
                    <ul class="custom-list">
                        <li>Calidad excepcional en cada par de auriculares.</li>
                        <li>Variedad de modelos para satisfacer todos los gustos.</li>
                        <li>Atención personalizada a cada cliente.</li>
                        <li>Precios competitivos y justos.</li>
                        <li>Compromiso con la satisfacción total del cliente.</li>
                    </ul>
                    <p class="mt-4">¡En nuestra importadora, nos esforzamos por ofrecer lo mejor en calidad y servicio!</p>
                  </div>
                </div>
              </div>
            <div class="col-lg-5 borde-imagen animado">
              <img src="assets/imgs/img/companeros-importadora.jpg" class="img-fluid h-100" alt="">
        </div>
    </div>
</div>





            <!--
            <div class="logos_marcas">
              <h5 class="color-gray-500 mb-10">Nuestros socios</h5>
              <h2>Ellos exportan e importan con nosotros</h2>
            </div>

            cambiar el color del background-about-us-100 en el css por un mejor color y ordenar mejor
            los logos de las marcas

            <div class="box-images-logo background-about-us-100">
              <div class="row">
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/microsoft.svg" alt="Ecom"></a>
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/sony.svg" alt="Ecom"></a>
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/acer.svg" alt="Ecom"></a>
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/nokia.svg" alt="Ecom"></a>
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/asus.svg" alt="Ecom"></a>
              </div>
              <div class="row">
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/casio.svg" alt="Ecom"></a>
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/dell.svg" alt="Ecom"></a>
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/panasonic.svg" alt="Ecom"></a>
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/vaio.svg" alt="Ecom"></a>
                <a class="hover-up col" href="shop-vendor-single.php"><img src="assets/imgs/page/about/sharp.svg" alt="Ecom"></a>
              </div>
            </div>
            -->
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

    <script>
      function toggleAnswer(element) {
          const answer = element.nextElementSibling;
          answer.classList.toggle('open');
      }
    </script>
  </body>
</html>