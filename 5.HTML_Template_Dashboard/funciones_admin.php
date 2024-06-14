<?php
require_once("../conexion/connect.php");

// Función para obtener productos
function getProductos() {
    global $con; 
    $sql = "SELECT * FROM producto";
    $result = $con->query($sql);
    return $result;
}

function getVentas() {
    global $con; 
    $sql = "SELECT * FROM venta";
    $result = $con->query($sql);
    return $result;
}

function getEmpresas() {
    global $con; 
    $sql = "SELECT * FROM empresa";
    $result = $con->query($sql);
    return $result;
}

function getCategorias() {
    global $con; 
    $sql = "SELECT * FROM categoria";
    $result = $con->query($sql);
    return $result;
}

function getInventarios() {
    global $con; 
    $sql = "SELECT * FROM inventario";
    $result = $con->query($sql);
    return $result;
}

function getClientes() {
    global $con; 
    $sql = "SELECT * FROM cliente";
    $result = $con->query($sql);
    return $result;
}
?>
