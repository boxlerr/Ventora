<?php
require_once("../conexion/connect.php");

function getProductos() {
    global $con; // Acceder a la conexión global
    $sql = "SELECT * FROM producto";
    $result = $con->query($sql);
    return $result;
}

// Llamada a la función para mostrar los productos
getProductos();