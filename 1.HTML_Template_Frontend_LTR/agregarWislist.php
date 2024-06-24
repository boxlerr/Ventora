<?php
include_once("consultas_bd.php");

if(isset($_POST['agregarWislist'])){
    if(isset($_POST['producto_id'])){
        $producto_id = mysqli_real_escape_string($con, $_POST['producto_id']);
        session_start();
        agregarWishlistProducto($_SESSION["usuario"],$producto_id);
        header("location: shop-grid.php");
        exit();
    }
}

if(isset($_GET['eliminar'])){
    $id=mysqli_real_escape_string($con, $_GET['eliminar']);
    eliminarArticuloCarrito($id);
    header("location: shop-cart.php");
}