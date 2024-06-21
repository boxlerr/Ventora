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

function agregarCarritoProducto($cliente_id,$producto_id,$cantidad){
    global $con;
    $sql = "INSERT INTO `carrito_producto`(`carrito_id`, `producto_id`, `cantidad`, `total_carrito`) VALUES ((SELECT carrito_id FROM carrito WHERE cliente_id = $cliente_id),'$producto_id','$cantidad',(SELECT precio FROM producto WHERE producto_id = $producto_id) * $cantidad)";
    $con->query($sql);
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
    }
    return true;
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