<?php
require_once("../conexion/connect.php");

function getProductos() {
    global $con;
    $sql = "SELECT * FROM producto";
    $result = $con->query($sql);
    return $result;
}

function getProductosLimitados($cant) {
    global $con;
    $sql = "SELECT * FROM producto LIMIT $cant";
    $result = $con->query($sql);
    return $result;
}

function getProducto($id) {
    global $con;
    $sql = "SELECT * FROM producto WHERE producto_id = $id";
    $result = $con->query($sql);
    $datos = $result->fetch_assoc();
    return $datos;
}

function getProductosConFiltro($categorias,$marcas,$min,$max,$moneda,$orden) {
    global $con;
    $sql = "SELECT * FROM producto WHERE 1=1";

    if (!empty($categorias)) {
        $categorias = implode(",", $categorias);
        $sql .= " AND categoria_id IN ($categorias)";
    }

    if (!empty($marcas)) {
        $marcas = implode(",", $marcas);
        $sql .= " AND marca_id IN ($marcas)";
    }

    if ($max>0) {
        $sql .= " AND precio*$moneda <= $max";
    }

    if ($min>0) {
        $sql .= " AND precio*$moneda >= $min";
    }

    $sql .= " ORDER BY precio $orden";
    // $precio = implode(",", $precio);
    // $sql = "SELECT * FROM producto WHERE categoria_id IN ($categorias) AND marca_id IN ($marcas)";
    $result = $con->query($sql);
    $datos = $result->fetch_all(MYSQLI_ASSOC);
    return $datos;
}

function getCategorias() {
    global $con;
    $sql = "SELECT * FROM categoria";
    $result = $con->query($sql);
    $datos = $result->fetch_all(MYSQLI_ASSOC);
    $rows = $result->num_rows;
    return [$rows, $datos];
}

function getCliente($email,$clave){
    global $con;
    $sql = "SELECT * FROM cliente WHERE correo = '$email' AND contrasena = '$clave'";
    $result = $con->query($sql);
    if($result->num_rows == 1){
        $datos = $result->fetch_assoc();
        return $datos;
    } else{
        return false;
    }
}

function getClienteEmail($email){
    global $con;
    $sql = "SELECT nombre FROM cliente WHERE correo = '$email'";
    $result = $con->query($sql);
    if($result->num_rows == 1){
        return true;
    }
}

function agregarCliente($nombre,$email,$telefono,$fecha_nacimiento,$nacionalidad,$contrasena){
    global $con;
    $fechaHoy = date('Y-m-d');
    $sql = "INSERT INTO `cliente`(`nombre`, `correo`, `contrasena`, `telefono`, `fecha_registro`, `fecha_nacimiento`, `nacionalidad`) VALUES ('$nombre','$email','$contrasena','$telefono','$fechaHoy','$fecha_nacimiento','$nacionalidad')";
    $con->query($sql);
    $last_id = $con->insert_id;
    // $datos = $result->fetch_assoc();
    return $last_id;
}

function crearCarrito($id){
    global $con;
    $fechaHoy = date('Y-m-d');
    $sql = "INSERT INTO `carrito`(`cliente_id`, `fecha_creacion`) VALUES ('$id','$fechaHoy')";
    $con->query($sql);
}

function crearWislist($id){
    global $con;
    $fechaHoy = date('Y-m-d');
    $sql = "INSERT INTO `wishlist`(`id_cliente`, `fecha_creacion`) VALUES ('$id','$fechaHoy')";
    $con->query($sql);
}

function agregarCarritoProducto($cliente_id,$producto_id,$cantidad){
    global $con;
    $sql = "INSERT INTO `carrito_producto`(`carrito_id`, `producto_id`, `cantidad`, `total_carrito`) VALUES ((SELECT carrito_id FROM carrito WHERE cliente_id = $cliente_id),'$producto_id','$cantidad',(SELECT precio FROM producto WHERE producto_id = $producto_id) * $cantidad)";
    $con->query($sql);
}

function agregarWishlistProducto($cliente_id,$producto_id){
    global $con;
    $sql = "SELECT * FROM wishlist_producto WHERE producto_id = $producto_id";
    $result = $con->query($sql);
    if(!$result->num_rows){
        $sql = "INSERT INTO `wishlist_producto`(`id_wishlist`, `producto_id`) VALUES ((SELECT id_wishlist FROM wishlist WHERE id_cliente = $cliente_id),'$producto_id')";
        $con->query($sql);
    }
}

function quitarWishlistProducto($cliente_id,$producto_id){
    global $con;
    $sql = "DELETE FROM `wishlist_producto` WHERE id_wishlist = (SELECT id_wishlist FROM wishlist WHERE id_cliente = $cliente_id) AND producto_id = $producto_id";
    $con->query($sql);
}

function buscarWishlist($producto_id){
    global $con;
    $sql = "SELECT * FROM wishlist_producto WHERE producto_id = $producto_id";
    $result = $con->query($sql);
    if(!$result->num_rows){
        return false;
    }
    return true;
}

function verWishlist($cliente_id){
    global $con;
    $sql = "SELECT * FROM wishlist_producto WHERE id_wishlist = (SELECT id_wishlist FROM wishlist WHERE id_cliente = $cliente_id)";
    $result = $con->query($sql);
    $datos = $result->fetch_all(MYSQLI_ASSOC);
    $rows = $result->num_rows;
    return [$rows,$datos];
}

function mostrarCarrito($cliente_id){
    global $con;
    $sql = "SELECT * FROM carrito_producto WHERE carrito_id = (SELECT carrito_id FROM carrito WHERE cliente_id = $cliente_id)";
    $result = $con->query($sql);
    $datos = $result->fetch_all(MYSQLI_ASSOC);
    $rows = $result->num_rows;
    return [$rows,$datos];
}

function eliminarArticuloCarrito($id){
    global $con;
    $sql = "DELETE FROM `carrito_producto` WHERE carrito_producto_id = '$id'";
    $con->query($sql);
}

function eliminarArticuloWhislist($id,$usuario_id){
    global $con;
    $sql = "DELETE FROM `wishlist_producto` WHERE producto_id = '$id' AND id_wishlist = (SELECT id_wishlist FROM wishlist WHERE id_cliente = $usuario_id)";
    $con->query($sql);
}

function buscarCarritoProducto($cliente_id,$producto_id,$cantidad){
    global $con;
    $sql = "SELECT * FROM carrito_producto WHERE carrito_id = (SELECT carrito_id FROM carrito WHERE cliente_id = $cliente_id) AND producto_id = '$producto_id'";
    $result = $con->query($sql);
    if($result->num_rows >= 1){
        $datos = $result->fetch_assoc();
        $cantidad = $cantidad + $datos['cantidad'];
        $sql = "UPDATE `carrito_producto` SET `cantidad`='$cantidad' WHERE carrito_id = (SELECT carrito_id FROM carrito WHERE cliente_id = $cliente_id) AND producto_id = '$producto_id'";
        $con->query($sql);
        return false;
    } else{
        return true;
    }
}

function getMonedas(){
    global $con;
    $sql = "SELECT moneda_corto FROM cambio";
    $result = $con->query($sql);
    $datos = $result->fetch_all();
    return $datos;
}

function getTipoCambio($moneda){
    global $con;
    $sql = "SELECT * FROM cambio WHERE moneda_corto = '$moneda'";
    $result = $con->query($sql);
    $datos = $result->fetch_assoc();
    return $datos;
}

function getMarcas(){
    global $con;
    $sql = "SELECT * FROM marca";
    $result = $con->query($sql);
    $datos = $result->fetch_all(MYSQLI_ASSOC);
    $rows = $result->num_rows;
    return [$rows, $datos];
}