<?php
include_once("consultas_bd.php");

if(isset($_POST['agregarCarrito'])){
    if(isset($_POST['cantidad']) && isset($_POST['producto_id'])){
        $cantidad = $_POST['cantidad'];
        $producto_id = $_POST['producto_id'];
        session_start();
        agregarCarritoProducto($_SESSION["usuario"],$producto_id,$cantidad);
        header("location: shop-grid.php");
        exit();
    }
}