<?php
$baseUrl = 'http://localhost/paypal-pdt-php/buy_now_button';
?>

<h1>Ejemplo <small>Formulario de pago</small></h1>

<!-- Para cambiar al entorno de producción usar: https://www.paypal.com/cgi-bin/webscr -->
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="form_pay">

    <!-- Valores requeridos -->
    <!--  -->
    <input type="hidden" name="business" value="vendedor@business.example.com">
    <input type="hidden" name="cmd" value="_xclick">

    <!-- nombre producto de la tabla  -->
    <label for="item_name" class="form-label">item_name</label> n
    <input type="text" name="item_name" id="" value="Lampara de escritorio" required=""><br>

    <!--  -->
    <label for="amount" class="form-label">amount</label>
    <input type="text" name="amount" id="" value="13.00" required=""><br>

    <!--  -->
    <input type="hidden" name="currency_code" value="EUR"> 

    <!--  -->
    <label for="quantity" class="form-label">quantity</label>
    <input type="text" name="quantity" id="" value="2" required=""><br>

    <!-- Valores opcionales -->
    <!-- En el siguiente enlace puedes encontrar una lista completa de Variables HTML para pagos estándar de PayPal. -->
    <!-- https://developer.paypal.com/docs/paypal-payments-standard/integration-guide/Appx-websitestandard-htmlvariables/ -->

    <input type="hidden" name="item_number" value="1">
    <!-- <input type="hidden" name="invoice" value="0012"> -->

    <input type="hidden" name="lc" value="es_ES">  
    <!--  idioma para que traduzca  -->
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="image_url" value="https://picsum.photos/150/150">
    <input type="hidden" name="return" value="<?= $baseUrl ?>/receptor.php"> //
    <input type="hidden" name="cancel_return" value="<?= $baseUrl ?>/pago_cancelado.php">

    <hr>

    <button type="submit">Pagar ahora con Paypal!</button>

</form>





<!-- respuesta del chad gpt para cargar los elementos del carrito -->


<?php
// Supongamos que $cartItems es un array con los datos del carrito obtenido de la base de datos
$cartItems = [
    [
        "item_name" => "Gateway 23.8\" All-in-one Desktop",
        "amount" => 2.51,
        "quantity" => 1
    ],
    [
        "item_name" => "HP 24 All-in-One PC",
        "amount" => 1.51,
        "quantity" => 1
    ],
    [
        "item_name" => "Dell Optiplex 9020",
        "amount" => 3.51,
        "quantity" => 1
    ]
];
?>

<h1>Ejemplo <small>Formulario de pago</small></h1>

<!-- Para cambiar al entorno de producción usar: https://www.paypal.com/cgi-bin/webscr -->
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="form_pay">

    <!-- Valores requeridos -->
    <input type="hidden" name="business" value="vendedor@business.example.com">
    <input type="hidden" name="cmd" value="_xclick">

    <div id="paypal-items"></div>

    <!-- Valores opcionales -->
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="lc" value="es_ES">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="image_url" value="https://picsum.photos/150/150">
    <input type="hidden" name="return" value="<?= $baseUrl ?>/receptor.php">
    <input type="hidden" name="cancel_return" value="<?= $baseUrl ?>/pago_cancelado.php">

    <hr>

    <button type="submit">Pagar ahora con Paypal!</button>
</form>

<script>
// Datos del carrito obtenidos desde PHP
const cartItems = <?php echo json_encode($cartItems); ?>;
const paypalItemsContainer = document.getElementById('paypal-items');

// Generar inputs dinámicamente
cartItems.forEach((item, index) => {
    const itemNameInput = document.createElement('input');
    itemNameInput.type = 'hidden';
    itemNameInput.name = `item_name_${index + 1}`;
    itemNameInput.value = item.item_name;

    const amountInput = document.createElement('input');
    amountInput.type = 'hidden';
    amountInput.name = `amount_${index + 1}`;
    amountInput.value = item.amount;

    const quantityInput = document.createElement('input');
    quantityInput.type = 'hidden';
    quantityInput.name = `quantity_${index + 1}`;
    quantityInput.value = item.quantity;

    paypalItemsContainer.appendChild(itemNameInput);
    paypalItemsContainer.appendChild(amountInput);
    paypalItemsContainer.appendChild(quantityInput);
});
</script>