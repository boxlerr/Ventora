<?php
require_once("../conexion/connect.php");

function getProductos() {
    global $con;
    $sql = "SELECT * FROM producto";
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
    $sql = "SELECT nombre FROM cliente WHERE correo = '$email' AND contrasena = '$clave'";
    $result = $con->query($sql);
    if($result->num_rows == 1){
        $datos = $result->fetch_assoc();
        return $datos;
    } else{
        return false;
    }
}