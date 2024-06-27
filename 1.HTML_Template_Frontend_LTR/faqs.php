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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css?v=3.0.0" rel="stylesheet">


    <title>Preguntas Frecuentes - Vestore</title>
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
            <div class="col-lg-10 mx-auto page-content">
              <h2 class="text-center mb-20">Preguntas Frecuentes</h2>
              <img class="mb-30" src="assets/imgs/page/about/team.jpg" alt="Ecom">
            <div class="container mt-5">
              <div class="row justify-content-center align-items-center">
                <div class="col-auto">
                <img src="assets/imgs/img/faqs-icon.webp" alt="Icono devolucion vestore" class="imagen-faqs-icon">
                </div>
              </div>
            </div>
              <div class="container-fluid">
                <div class="title-faq">
                <h3 class="faq-centrado">Preguntas Generales</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Qué tipo de productos venden?</div>
                  <div class="faq-answer">Vendemos una amplia variedad de productos electrónicos, ropa y accesorios para el hogar.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Ofrecen productos al por mayor y al por menor?</div>
                  <div class="faq-answer">Sí, ofrecemos productos tanto al por mayor como al por menor. Para compras al por mayor, te recomendamos visitar nuestra sección de precios mayoristas.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo puedo ponerme en contacto con su servicio de atención al cliente?</div>
                  <div class="faq-answer">Puedes contactar con nuestro servicio de atención al cliente a través de nuestro formulario de contacto en línea o llamando al 123-456-7890.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cuál es su horario de atención al cliente?</div>
                  <div class="faq-answer">Nuestro horario de atención al cliente es de lunes a viernes de 9:00 a.m. a 6:00 p.m. Hora local.</div>
                </div>
              </div>
              
              <div class="faq-topic">
                <h3 class="faq-centrado">Registro y Cuenta</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Necesito crear una cuenta para realizar una compra?</div>
                  <div class="faq-answer">Sí, es necesario crear una cuenta para realizar una compra en nuestro sitio web. Esto nos ayuda a proporcionarte un mejor servicio y seguimiento de tu pedido.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo creo una cuenta en su sitio web?</div>
                  <div class="faq-answer">Puedes crear una cuenta haciendo clic en el enlace "Registro" en la parte superior derecha de nuestra página de inicio y siguiendo las instrucciones proporcionadas.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">He olvidado mi contraseña, ¿cómo puedo recuperarla?</div>
                  <div class="faq-answer">Puedes recuperar tu contraseña haciendo clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión y siguiendo los pasos para restablecerla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo actualizar la información de mi cuenta?</div>
                  <div class="faq-answer">Sí, puedes actualizar la información de tu cuenta en cualquier momento accediendo a la sección "Mi cuenta" después de iniciar sesión.</div>
                </div>
              </div>
              
              <div class="faq-topic">
                <h3 class="faq-centrado">Pedidos y Compras</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo realizo un pedido?</div>
                  <div class="faq-answer">Para realizar un pedido, simplemente selecciona los productos que deseas comprar, añádelos al carrito y procede al pago siguiendo las instrucciones en pantalla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo modificar o cancelar mi pedido después de haberlo realizado?</div>
                  <div class="faq-answer">Una vez confirmado, los pedidos no pueden modificarse directamente en línea. Para cancelaciones o modificaciones, por favor contáctanos lo antes posible.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Hay un monto mínimo de compra para pedidos al por mayor?</div>
                  <div class="faq-answer">Sí, existe un monto mínimo de compra para pedidos al por mayor. Visita nuestra sección de precios mayoristas para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo hacer pedidos especiales o personalizados?</div>
                  <div class="faq-answer">
                  Sí, ofrecemos la posibilidad de hacer pedidos especiales o personalizados. 
                  Por favor contáctanos directamente para discutir tus necesidades específicas. 
                  <a href="importar.php">importar</a> / <a href="exportar.php">exportar</a>
                  </div>
                </div>



                <div class="faq-topic">
                <h3 class="faq-centrado">Pagos</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo realizo un pedido?</div>
                  <div class="faq-answer">Para realizar un pedido, simplemente selecciona los productos que deseas comprar, añádelos al carrito y procede al pago siguiendo las instrucciones en pantalla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo modificar o cancelar mi pedido después de haberlo realizado?</div>
                  <div class="faq-answer">Una vez confirmado, los pedidos no pueden modificarse directamente en línea. Para cancelaciones o modificaciones, por favor contáctanos lo antes posible.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Hay un monto mínimo de compra para pedidos al por mayor?</div>
                  <div class="faq-answer">Sí, existe un monto mínimo de compra para pedidos al por mayor. Visita nuestra sección de precios mayoristas para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo hacer pedidos especiales o personalizados?</div>
                  <div class="faq-answer">Sí, ofrecemos la posibilidad de hacer pedidos especiales o personalizados. Por favor contáctanos directamente para discutir tus necesidades específicas.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado">Envios y Entrega</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo realizo un pedido?</div>
                  <div class="faq-answer">Para realizar un pedido, simplemente selecciona los productos que deseas comprar, añádelos al carrito y procede al pago siguiendo las instrucciones en pantalla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo modificar o cancelar mi pedido después de haberlo realizado?</div>
                  <div class="faq-answer">Una vez confirmado, los pedidos no pueden modificarse directamente en línea. Para cancelaciones o modificaciones, por favor contáctanos lo antes posible.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Hay un monto mínimo de compra para pedidos al por mayor?</div>
                  <div class="faq-answer">Sí, existe un monto mínimo de compra para pedidos al por mayor. Visita nuestra sección de precios mayoristas para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo hacer pedidos especiales o personalizados?</div>
                  <div class="faq-answer">Sí, ofrecemos la posibilidad de hacer pedidos especiales o personalizados. Por favor contáctanos directamente para discutir tus necesidades específicas.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado">Devoluciones y <a href="politicas-reembolso.php"> Reembolsos</a></h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo realizo un pedido?</div>
                  <div class="faq-answer">Para realizar un pedido, simplemente selecciona los productos que deseas comprar, añádelos al carrito y procede al pago siguiendo las instrucciones en pantalla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo modificar o cancelar mi pedido después de haberlo realizado?</div>
                  <div class="faq-answer">Una vez confirmado, los pedidos no pueden modificarse directamente en línea. Para cancelaciones o modificaciones, por favor contáctanos lo antes posible.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Hay un monto mínimo de compra para pedidos al por mayor?</div>
                  <div class="faq-answer">Sí, existe un monto mínimo de compra para pedidos al por mayor. Visita nuestra sección de precios mayoristas para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo hacer pedidos especiales o personalizados?</div>
                  <div class="faq-answer">Sí, ofrecemos la posibilidad de hacer pedidos especiales o personalizados. Por favor contáctanos directamente para discutir tus necesidades específicas.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado">Productos y Stock</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo realizo un pedido?</div>
                  <div class="faq-answer">Para realizar un pedido, simplemente selecciona los productos que deseas comprar, añádelos al carrito y procede al pago siguiendo las instrucciones en pantalla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo modificar o cancelar mi pedido después de haberlo realizado?</div>
                  <div class="faq-answer">Una vez confirmado, los pedidos no pueden modificarse directamente en línea. Para cancelaciones o modificaciones, por favor contáctanos lo antes posible.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Hay un monto mínimo de compra para pedidos al por mayor?</div>
                  <div class="faq-answer">Sí, existe un monto mínimo de compra para pedidos al por mayor. Visita nuestra sección de precios mayoristas para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo hacer pedidos especiales o personalizados?</div>
                  <div class="faq-answer">Sí, ofrecemos la posibilidad de hacer pedidos especiales o personalizados. Por favor contáctanos directamente para discutir tus necesidades específicas.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado"><a href="importar.php">Importación</a> y <a href="exportar.php">Exportación</a></h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo realizo un pedido?</div>
                  <div class="faq-answer">Para realizar un pedido, simplemente selecciona los productos que deseas comprar, añádelos al carrito y procede al pago siguiendo las instrucciones en pantalla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo modificar o cancelar mi pedido después de haberlo realizado?</div>
                  <div class="faq-answer">Una vez confirmado, los pedidos no pueden modificarse directamente en línea. Para cancelaciones o modificaciones, por favor contáctanos lo antes posible.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Hay un monto mínimo de compra para pedidos al por mayor?</div>
                  <div class="faq-answer">Sí, existe un monto mínimo de compra para pedidos al por mayor. Visita nuestra sección de precios mayoristas para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo hacer pedidos especiales o personalizados?</div>
                  <div class="faq-answer">Sí, ofrecemos la posibilidad de hacer pedidos especiales o personalizados. Por favor contáctanos directamente para discutir tus necesidades específicas.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado">Seguridad y <a href="politicas.php">Privacidad</a></h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo realizo un pedido?</div>
                  <div class="faq-answer">Para realizar un pedido, simplemente selecciona los productos que deseas comprar, añádelos al carrito y procede al pago siguiendo las instrucciones en pantalla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo modificar o cancelar mi pedido después de haberlo realizado?</div>
                  <div class="faq-answer">Una vez confirmado, los pedidos no pueden modificarse directamente en línea. Para cancelaciones o modificaciones, por favor contáctanos lo antes posible.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Hay un monto mínimo de compra para pedidos al por mayor?</div>
                  <div class="faq-answer">Sí, existe un monto mínimo de compra para pedidos al por mayor. Visita nuestra sección de precios mayoristas para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo hacer pedidos especiales o personalizados?</div>
                  <div class="faq-answer">Sí, ofrecemos la posibilidad de hacer pedidos especiales o personalizados. Por favor contáctanos directamente para discutir tus necesidades específicas.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado">Programas y Descuentos</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Cómo realizo un pedido?</div>
                  <div class="faq-answer">Para realizar un pedido, simplemente selecciona los productos que deseas comprar, añádelos al carrito y procede al pago siguiendo las instrucciones en pantalla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo modificar o cancelar mi pedido después de haberlo realizado?</div>
                  <div class="faq-answer">Una vez confirmado, los pedidos no pueden modificarse directamente en línea. Para cancelaciones o modificaciones, por favor contáctanos lo antes posible.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Hay un monto mínimo de compra para pedidos al por mayor?</div>
                  <div class="faq-answer">Sí, existe un monto mínimo de compra para pedidos al por mayor. Visita nuestra sección de precios mayoristas para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)">¿Puedo hacer pedidos especiales o personalizados?</div>
                  <div class="faq-answer">Sí, ofrecemos la posibilidad de hacer pedidos especiales o personalizados. Por favor contáctanos directamente para discutir tus necesidades específicas.</div>
                </div>
                </div>
                <!-- Añade más preguntas y respuestas aquí -->
              </div>
            </div>
          </div>
        </div>
      </section>
      
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
                  <h5 class="font-lg-bold color-gray-100">Return & Refund</h5>
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
        -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Añade el JavaScript para las preguntas frecuentes al final del cuerpo -->
    <script>
      function toggleAnswer(element) {
          const answer = element.nextElementSibling;
          answer.classList.toggle('open');
      }
    </script>
  </body>
</html>
