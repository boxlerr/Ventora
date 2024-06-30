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


    <title data-section="faqs" data-value="faqs">Preguntas Frecuentes - Vestore</title>
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
              <h2 class="text-center mb-20" data-section="faqs" data-value="faqs">Preguntas Frecuentes - Vestore</h2>

            <div class="container mt-5">
              <div class="row justify-content-center align-items-center">
                <div class="col-auto">
                </div>
              </div>
            </div>
            <div class="box-contact-support pt-80 pb-50 pl-50 pr-50 background-gray-50 mt-50 mb-90">  
            <div class="row">
    <div class="col-lg-3 mb-30 text-center text-lg-start">
        <img src="assets/imgs/img/faqs-icon.webp" alt="Icono general" class="imagen-pequena">
    </div>
    <div class="col-lg-9 mb-30 text-lg-start">
        <h4 class="mb-5 center-texto-nos" data-section="faqs" data-value="text1">Preguntas Frecuentes</h4>
        <p class="font-md color-gray-700 mb-5" data-section="faqs" data-value="descripcion1">¡Encuentra respuestas rápidas a tus preguntas! Aquí reunimos las consultas más comunes sobre nuestros productos y servicios. Explora esta sección para resolver tus dudas de manera sencilla y directa.</p>
    </div>
</div>
</div>
              <div class="container-fluid">
                <div class="title-faq">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo1">Preguntas Generales</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta1" >¿Qué tipo de productos venden?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta1">Vendemos una amplia variedad de productos electrónicos, accesorios para el hogar y proximamente mucho más.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta12">¿Ofrecen productos al por mayor y al por menor?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta12">Sí, ofrecemos productos tanto al por mayor como al por menor. Para compras al por mayor, te recomendamos visitar nuestra sección de precios <a href="shop-grid-mayorista.php">mayoristas.</a></div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta13">¿Cómo puedo ponerme en contacto con su servicio de atención al cliente?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta13">Puedes contactar con nuestro servicio de atención al cliente a través de nuestro formulario de contacto en línea o enviando un mail a <a href="mailto:contacto@vestore.com.ar" data-section="politicas-reembolso" data-value="contacto@vestore.com.ar">contacto@vestore.com.ar</a>.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta14">¿Cuál es su horario de atención al cliente?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta14">Nuestro horario de atención al cliente es de lunes a viernes de 8:00 a.m. a 5:00 p.m. Hora Arg.</div>
                </div>
              </div>
              
              <div class="faq-topic">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo2">Registro y Cuenta</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta2">¿Necesito crear una cuenta para realizar una compra?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta2">Sí, es necesario crear una cuenta para realizar una compra en nuestro sitio web. Esto nos ayuda a proporcionarte un mejor servicio y seguimiento de tu pedido.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta21">¿Cómo creo una cuenta en su sitio web?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta21">Puedes crear una cuenta haciendo clic en el enlace <a href="page-register.php"> Crear Cuenta </a>en la parte superior derecha "Cuenta" y siguiendo las instrucciones proporcionadas.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta22">He olvidado mi contraseña, ¿cómo puedo recuperarla?</div> <!--FALTA SECCION OLVIDAR CONTRASEÑA-->
                  <div class="faq-answer" data-section="faqs" data-value="respuesta22">Puedes recuperar tu contraseña haciendo clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión y siguiendo los pasos para restablecerla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta23">¿Puedo actualizar la información de mi cuenta?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta23">Sí, puedes actualizar la información de tu cuenta en cualquier momento accediendo a la sección <a href="page-account.php"> "Mi cuenta" </a>después de iniciar sesión.</div>
                </div>
              </div>
              
              <div class="faq-topic">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo3">Pedidos y Compras</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta3">¿Cómo realizo un pedido?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta3">Para realizar un pedido, simplemente selecciona los productos que deseas comprar, añádelos al carrito y procede al pago siguiendo las instrucciones en pantalla.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta31">¿Puedo modificar o cancelar mi pedido después de haberlo realizado?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta31">Una vez confirmado, los pedidos no pueden modificarse directamente en línea. Para cancelaciones o modificaciones, por favor contáctanos lo antes posible con la seccion <a href="page-contact.php"> Contacto </a> o enviando un mail a <a href="mailto:contacto@vestore.com.ar" data-section="politicas-reembolso" data-value="contacto@vestore.com.ar">contacto@vestore.com.ar</a>.</a></div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta32">¿Hay un monto mínimo de compra para pedidos al por mayor?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta32">Sí, existe un monto mínimo de compra para pedidos al por mayor. Visita nuestra sección de precios <a href="shop-grid-mayorista.php">mayoristas.</a> para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta33">¿Puedo hacer pedidos especiales o personalizados?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta33">
                  Sí, ofrecemos la posibilidad de hacer pedidos especiales o personalizados. 
                  Por favor contáctanos directamente para discutir tus necesidades específicas. 
                  <a href="importar.php">importar</a> / <a href="exportar.php">exportar</a>
                  </div>
                </div>



                <div class="faq-topic">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo4">Pagos</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta4">¿Qué métodos de pago aceptan?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta4">Aceptamos una variedad de métodos de pago para tu conveniencia, incluyendo tarjetas de crédito (Visa, MasterCard, American Express), PayPal, Mercado Pago. También ofrecemos la opción de pago mediante transferencia bancaria.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta41">¿Es seguro realizar pagos en su sitio web?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta41">Sí, la seguridad de tus datos es nuestra máxima prioridad. Nuestro sitio web utiliza tecnología de cifrado SSL (Secure Socket Layer) para proteger tu información personal y de pago. Además, colaboramos con procesadores de pagos confiables para garantizar transacciones seguras.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta42">¿Puedo cambiar el método de pago después de haber realizado un pedido?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta42">Una vez que el pedido ha sido confirmado y el pago procesado, no es posible cambiar el método de pago. Sin embargo, puedes contactar a nuestro equipo de atención al cliente para ver si existe alguna alternativa viable según el estado de tu pedido.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta43">¿Qué debo hacer si mi pago ha sido rechazado?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta43">Si tu pago ha sido rechazado, primero verifica que los detalles de pago ingresados sean correctos y que tu tarjeta tenga fondos suficientes. Si el problema persiste, te recomendamos contactar a tu banco para obtener más información. También puedes intentar utilizar un método de pago diferente o ponerte en contacto con nuestro servicio de atención al cliente para asistencia adiciona</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo5">Envios y Entrega</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta5">¿Cuáles son los tiempos de entrega estimados?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta5">Los tiempos de entrega pueden variar según la ubicación y el método de envío seleccionado. En general, los pedidos nacionales se entregan en un plazo de 3 a 7 días hábiles, mientras que los envíos internacionales pueden tardar entre 10 y 15 días hábiles. Te proporcionaremos un número de seguimiento para que puedas monitorear el progreso de tu pedido.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta51">¿Ofrecen envío gratuito?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta51">Sí, ofrecemos envío gratuito en pedidos que superen una determinada cantidad. Las condiciones específicas para el envío gratuito pueden variar según las promociones actuales y la ubicación del destinatario. Consulta nuestras políticas de envío o la página del producto para más detalles.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta52">¿Cómo puedo rastrear mi pedido?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta52">Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con un número de seguimiento y un enlace para rastrear tu paquete. También puedes ingresar este número de seguimiento en la sección "Rastreo de Pedido" en nuestro sitio web para obtener actualizaciones en tiempo real sobre el estado de tu entrega.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta53">¿Qué debo hacer si mi pedido llega dañado o incorrecto?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta53">Lamentamos cualquier inconveniente que esto pueda causar. Si tu pedido llega dañado o incorrecto, por favor contacta a nuestro equipo de atención al cliente dentro de los 7 días posteriores a la recepción del paquete. Proporciónanos fotos del daño o del artículo incorrecto, y trabajaremos rápidamente para resolver el problema, ya sea enviándote un reemplazo o procesando un reembolso.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo6">Devoluciones y <a href="politicas-reembolso.php">Reembolsos</a></h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta6">¿Cuál es el proceso para devolver un artículo?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta6">Para devolver un artículo, sigue estos pasos:
                      <br>Contacta a nuestro equipo de atención al cliente dentro de los 7 días posteriores a la recepción del producto para iniciar la devolución.
                      Empaca el artículo en su empaque original y asegúrate de incluir todos los accesorios y etiquetas.<
                      Te proporcionaremos una etiqueta de devolución y las instrucciones necesarias para enviar el artículo de vuelta.
                      Una vez que recibamos el artículo y verifiquemos su estado, procesaremos tu reembolso o cambio según lo acordado.
                  </div>
                  </div>
                </div>
              </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta61">¿Puedo devolver un artículo si no estoy satisfecho con mi compra?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta61">Sí, aceptamos devoluciones de productos no utilizados y en su estado original dentro de los 7 días posteriores a la recepción. Ten en cuenta que algunos artículos, como productos personalizados o en oferta, pueden no ser elegibles para devolución. Por favor, revisa nuestras políticas de devolución para más detalles específicos.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta62">¿Cuánto tiempo tarda en procesarse un reembolso?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta62">Una vez que hayamos recibido y verificado el artículo devuelto, el proceso de reembolso puede tardar hasta 30 dias hábiles en completarse. El tiempo exacto puede variar dependiendo de tu banco o proveedor de pagos. Te notificaremos por correo electrónico una vez que el reembolso haya sido procesado.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta63">¿Quién cubre los costos de envío de la devolución?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta63">Si la devolución se debe a un error nuestro, como un artículo defectuoso o incorrecto, cubriremos los costos de envío de la devolución. Sin embargo, si deseas devolver un artículo por razones personales, como un cambio de opinión, los costos de envío de la devolución serán tu responsabilidad. Te proporcionaremos una etiqueta de devolución y deduciremos el costo del envío del monto total del reembolso.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo7">Productos y Stock</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta7">¿Cómo puedo verificar la disponibilidad de un producto?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta7">Puedes verificar la disponibilidad de un producto en nuestra tienda en línea. Cada producto tiene un indicador de stock que te mostrará si está disponible para su compra.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta71">¿Qué debo hacer si un producto que deseo comprar está agotado?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta71">Si un producto está agotado, puedes suscribirte para recibir notificaciones cuando vuelva a estar disponible. También puedes consultar con nuestro servicio de atención al cliente para obtener información sobre la reposición de stock.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta72">¿Cuál es la política de devolución para productos agotados?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta72">Para productos agotados, aplican las mismas políticas de devolución que para productos disponibles. Puedes devolver el producto dentro del período especificado y recibir un reembolso o cambio según nuestras políticas de devolución y reembolso.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta73">¿Ofrecen descuentos por compras al por mayor?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta73">Sí, ofrecemos descuentos por compras al por mayor en determinados productos. Por favor, contacta a nuestro equipo de ventas para obtener más detalles sobre los descuentos disponibles y los requisitos para compras al por mayor.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo8"><a href="importar.php">Importación</a> y <a href="exportar.php">Exportación</a></h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta8">¿Como puedo importar?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta8">Te recomendamos que vayas a la seccion <a href="importar.php">Importar</a> para resolver tus dudas!</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta81">¿Como puedo exportar?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta81">Te recomendamos entrar a la seccion <a href="exportar.php">Exportar</a> para resolver tus dudas!</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo9">Seguridad y <a href="politicas.php">Privacidad</a></h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta9">¿Qué medidas de seguridad tienen implementadas para proteger la información de los clientes?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta9">Nos tomamos muy en serio la seguridad de la información de nuestros clientes. Utilizamos tecnologías de cifrado avanzadas y mantenemos políticas estrictas de acceso para proteger los datos personales y financieros.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta91">¿Qué información personal recopilan y cómo la utilizan?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta91">Recopilamos información personal como nombre, dirección y detalles de contacto para procesar tus pedidos y proporcionarte un servicio personalizado. Esta información se utiliza según nuestras políticas de privacidad para mejorar tu experiencia de compra y cumplir con nuestras obligaciones legales.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta92">¿Comparten mi información personal con terceros?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta92">No vendemos ni compartimos tu información personal con terceros no autorizados. Solo compartimos información cuando es necesario para procesar tus pedidos, cumplir con la ley o proteger nuestros derechos.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta93">¿Qué debo hacer si creo que mi cuenta ha sido comprometida?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta93">Si sospechas que tu cuenta ha sido comprometida, te recomendamos que cambies tu contraseña inmediatamente y que contactes a nuestro equipo de soporte para investigar en la seccion <a href="page-contact.php">Contacto</a> o enviando un mail a <a href="mailto:contacto@vestore.com.ar" data-section="politicas-reembolso" data-value="contacto@vestore.com.ar">contacto@vestore.com.ar</a> y poder tomar medidas adicionales para proteger tu cuenta.</div>
                </div>
                </div>

                <div class="faq-topic">
                <h3 class="faq-centrado" data-section="faqs" data-value="titulo10">Programas y Descuentos</h3>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta10">¿Qué programas de referidos ofrecen?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta10">Puedes unirte a nuestro programa de referidos <a href="page-contact.php">contactándonos</a> directamente. Al unirte, podrás obtener beneficios especiales al referir a amigos y familiares para que compren en nuestra tienda. Además, tendrás acceso a promociones exclusivas y descuentos adicionales.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta101">¿Cómo puedo aplicar un código de descuento?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta101">Puedes aplicar un código de descuento durante el proceso de pago en nuestra tienda en línea. Hay un campo específico donde puedes ingresar el código de descuento antes de finalizar tu compra. Asegúrate de verificar la validez y las condiciones del código antes de usarlo.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta102">¿Tienen descuentos para estudiantes?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta102">Por el momento no.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-question" onclick="toggleAnswer(this)" data-section="faqs" data-value="pregunta103">¿Hay descuentos disponibles para compras al por mayor?</div>
                  <div class="faq-answer" data-section="faqs" data-value="respuesta103">Sí, ofrecemos descuentos por compras al por mayor en ciertos productos. Para obtener más detalles sobre los descuentos disponibles y los requisitos para compras al por mayor, te recomendamos visitar nuestra seccion <a href="shop-grid-mayorista.php">Mayorista</a></div>
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
    <script src="assets/js/javaS.js"></script>
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
