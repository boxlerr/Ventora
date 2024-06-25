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
    <title>Importar - Vestore</title>
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
              <h2 class="item-cat">Importa con Vestore</h2>
              <div class="row mt-20">
                <div class="row">
                  <p class="font-sm font-medium color-white mb-15 col texto-importar">En Vestore, nos especializamos en ofrecer soluciones integrales de importación que facilitan el acceso a mercados internacionales. Nuestro objetivo es simplificar el proceso de importación, brindándote la tranquilidad de saber que tus productos llegarán a tiempo y en perfectas condiciones.</p>
                  <p class="font-sm font-medium color-white mb-15 col texto-importar">Nos diferenciamos por nuestra dedicación y experiencia, utilizando tecnología avanzada y estrategias personalizadas para cada cliente. Ya sea que necesites asesoría para navegar las complejidades de las regulaciones internacionales o soluciones logísticas para optimizar tus envíos, estamos aquí para ayudarte en cada paso del camino.</p>
                  <p class="font-sm font-medium color-white mb-15 col texto-importar">Confía en Vestore para gestionar todas tus necesidades de importación. Con un equipo de expertos y una red global de socios, garantizamos que tu negocio se mantenga competitivo y eficiente en el dinámico mercado global.</p>
                </div>
              </div>

              <div class="contact-form">
                  <h3 class="color-brand-3 mt-60">Importar</h3>
                  <p class="font-sm color-gray-700 mb-30">Te traemos lo que quieras a la puerta de tu casa!</p>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Nombre">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Apellido">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input class="form-control" type="tel" placeholder="Numero de telefono">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Cuentanos sobre lo que quieras importar y nosotros te contactamos!" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input class="btn btn-buy w-auto" type="submit" value="Enviar mensaje">
                      </div>
                    </div>
                </div>
              </div>

              <div class="container importar">
                <div class="row">
                  <div class="container-faq">
                    <div class="title-faq">
                      <h3>Preguntas Frecuentes</h3>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>Nunca importe, no sé cómo hacerlo<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>Contáctanos para una consulta gratuita. Nos cuentas qué productos deseas importar y desde dónde. Nosotros te ayudamos a encontrar proveedores confiables en el extranjero. Tenemos una red de contactos y herramientas para verificar la calidad y reputación de los proveedores.<span>A</span></p>
                        </div>
                    </div>
                  
                    <div class="item-faq">
                        <div class="question">
                            <h4>¿Cuanto me va a salir importar, existen costes extras?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>Solicitamos cotizaciones a los proveedores seleccionados y te las presentamos para que elijas la que mejor se adapte a tus necesidades y presupuesto.<span>A</span></p>
                        </div>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>¿Qué se detallará en la cotización que me enviarán?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>1.Descripción del Producto:<br>
                              - Detalles del producto que deseas importar (nombre, cantidad, especificaciones técnicas, etc.).<br>
                              - Información del proveedor (nombre, ubicación, contacto).<br>
                              2.Costo del Producto:<br>
                              - Precio unitario y total del producto según la cantidad solicitada.<br>
                              - Moneda en la que se realiza la transacción (dólares, euros, etc.).<br>
                              3.Flete Internacional:<br>
                              - Método de envío (aéreo, marítimo o terrestre).<br>
                              - Costo del transporte desde el país de origen hasta Argentina.<br>
                              - Tiempo estimado de tránsito.<br>
                              4.Seguro de Carga:<br>
                              - Costo del seguro para proteger la mercancía durante el transporte.<br>
                              - Cobertura y términos del seguro.<br>
                              5.Derechos de Aduana e Impuestos:<br>
                              - Estimación de los aranceles e impuestos que deberán pagarse al ingresar la mercancía a Argentina.<br>
                              - Cálculo basado en la clasificación arancelaria del producto y su valor.<br>
                              6.Trámites Aduaneros:<br>
                              - Costos asociados a la gestión y liberación de la mercancía en la aduana.<br>
                              - Servicios incluidos (despacho aduanero, documentación, etc.).<br>
                              7.Costos de Almacenamiento (si aplican):<br>
                              - Detalle de los costos de almacenamiento en caso de que la mercancía necesite ser almacenada temporalmente.<br>
                              - Duración y condiciones del almacenamiento.<br>
                              8.Transporte Local:<br>
                              - Costo del transporte desde el puerto o aeropuerto en Argentina hasta tu ubicación final.<br>
                              - Método de transporte (camión, mensajería, etc.).<br>
                              9.Honorarios del Servicio de Importación:<br>
                              - Nuestros honorarios por la gestión completa del proceso de importación.<br>
                              - Servicios incluidos (búsqueda de proveedores, negociación, coordinación logística, etc.).<br>
                              10.Costos Extras (si aplican):<br>
                              - Detalle de cualquier costo adicional que pueda surgir (inspecciones, certificaciones, tarifas bancarias, etc.).<br>
                              - Justificación y explicación de estos costos.<br>
                              11.Términos y Condiciones:<br>
                              - Plazos de pago y métodos aceptados.<br>
                              - Tiempos estimados de entrega.<br>
                              - Políticas de cambios, cancelaciones y devoluciones.<span>A</span></p>
                        </div>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>¿Cuál es el monto minimo para poder importar?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>En Argentina, no existe un monto mínimo legalmente establecido para realizar importaciones. Sin embargo, desde nuestra experiencia y para optimizar los costos y la eficiencia del proceso, recomendamos que las importaciones se realicen a partir de un valor mínimo de 1.000 USD. Este monto permite cubrir de manera efectiva los costos asociados y maximizar la rentabilidad de tu operación.<span>A</span></p>
                        </div>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>¿Necesito tener una empresa para importar mercaderías?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>No, no necesitas tener una empresa para importar mercaderías. Nuestro servicio integral se encarga de todo el proceso de importación, permitiéndote recibir tu mercancía en Argentina sin la necesidad de abrir una empresa.<span>A</span></p>
                        </div>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>¿Cómo se paga la mercadería?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>Pagar la mercadería importada es un proceso sencillo y flexible. Ofrecemos varias opciones de pago para adaptarnos a tus necesidades y preferencias.<span>A</span></p>
                        </div>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>¿Cómo se controla la calidad de la mercadería?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>Garantizar la calidad de la mercadería es una de nuestras prioridades.<br>
                            Trabajamos contigo para seleccionar proveedores confiables y de buena reputación, realizando una evaluación exhaustiva considerando su historial, capacidad de producción y cumplimiento de normas de calidad, verificamos la calidad solicitando fotografías, videos, muestras físicas y pesaje, y pedimos todos los certificados de calidad disponibles que respalden la conformidad del producto con las normas internacionales y especificaciones acordadas, como certificados ISO e informes de pruebas de laboratorio.<span>A</span></p>
                        </div>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>¿Necesito hacer algún trámite?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>Para poder importar mercaderías, es necesario cumplir con algunos trámites básicos. En particular, necesitas:<br>
                            1.Ser Responsable Inscripto:<br>
                            - Debes estar registrado como Responsable Inscripto en la Administración Federal de Ingresos Públicos (AFIP) de Argentina. Esto te permitirá realizar operaciones comerciales de importación y cumplir con las obligaciones fiscales correspondientes.<br>
                            2.Domicilio Fiscal Declarado:<br>
                            - Es necesario tener un domicilio fiscal declarado ante la AFIP. Este es el lugar donde recibirás todas las notificaciones y comunicaciones oficiales relacionadas con tus operaciones de importación.<span>A</span></p>
                        </div>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>¿Cuánto tiempo demora una importación?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>El tiempo que demora una importación puede variar dependiendo de varios factores, pero en general, el proceso completo puede tardar entre 6 y 15 días hábiles.<span>A</span></p>
                        </div>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>¿La mercadería tiene seguro?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>Es recomendable contratar un seguro de carga para proteger tu mercancía contra daños o pérdidas durante el transporte. Te ofrecemos opciones de seguro y te ayudamos a seleccionar la cobertura adecuada.<span>A</span></p>
                        </div>
                    </div>

                    <div class="item-faq">
                        <div class="question">
                            <h4>¿Tengo otras consultas antes de cotizar, como las puedo evacuar?<span>Q</span></h4>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>Numero telefonico, Instagram, mail. (despues ingresar)<span>A</span></p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              
            <h5 class="color-gray-500 mb-10">Nuestros socios</h5>
            <h2 class="mb-40">Ellos exportan e importan con nosotros</h2>
            <!--cambiar el color del background-about-us-100 en el css por un mejor color y ordenar mejor
            los logos de las marcas -->
            <div class="box-images-logo background-about-us-100"><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/microsoft.svg" alt="Ecom"></a><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/sony.svg" alt="Ecom"></a><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/acer.svg" alt="Ecom"></a><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/nokia.svg" alt="Ecom"></a><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/asus.svg" alt="Ecom"></a><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/casio.svg" alt="Ecom"></a><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/dell.svg" alt="Ecom"></a><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/panasonic.svg" alt="Ecom"></a><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/vaio.svg" alt="Ecom"></a><a class="hover-up" href="shop-vendor-single.php"><img src="assets/imgs/page/about/sharp.svg" alt="Ecom"></a></div>
            <div class="border-1 mb-80 mt-50"></div>
            </div>
        </div>
        </div>
        <div class="box-contact-support pt-80 pb-50 background-gray-50">
        <div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
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
    <script src="assets/js/javaS.js"></script>
  </body>
</html>