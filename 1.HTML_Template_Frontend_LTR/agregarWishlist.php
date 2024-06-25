<?php
include_once("consultas_bd.php");

if(isset($_POST['agregarWishlist'])){
    if(isset($_POST['producto_id'])){
        $producto_id = mysqli_real_escape_string($con, $_POST['producto_id']);
        session_start();
        agregarWishlistProducto($_SESSION["usuario"],$producto_id);
        header("location: shop-single-product-2.php?id=$producto_id");
        exit();
    }
}

if(isset($_POST['quitarWishlist'])){
    if(isset($_POST['producto_id'])){
        $producto_id = mysqli_real_escape_string($con, $_POST['producto_id']);
        session_start();
        quitarWishlistProducto($_SESSION["usuario"],$producto_id);
        header("location: shop-single-product-2.php?id=$producto_id");
        exit();
    }
}

if(isset($_POST['eliminar'])){
    $producto_id=mysqli_real_escape_string($con, $_POST['producto_id']);
    $usuario_id=mysqli_real_escape_string($con, $_POST['cliente_id']);
    eliminarArticuloWhislist($producto_id,$usuario_id);
    header("location: shop-wishlist.php");  
}