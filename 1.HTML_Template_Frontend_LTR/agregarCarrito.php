<?php
include_once("consultas_bd.php");

if(isset($_POST['agregarCarrito'])){
    if(isset($_POST['cantidad']) && isset($_POST['producto_id'])){
        $cantidad = mysqli_real_escape_string($con, $_POST['cantidad']);
        $producto_id = mysqli_real_escape_string($con, $_POST['producto_id']);
        // $cantidad = $_POST['cantidad'];
        // $producto_id = $_POST['producto_id'];
        session_start();
        $existe = buscarCarritoProducto($_SESSION["usuario"],$producto_id,$cantidad);
        if($existe){
            agregarCarritoProducto($_SESSION["usuario"],$producto_id,$cantidad);
        }
        header("location: shop-grid.php");
        exit();
    }
}

if(isset($_GET['eliminar'])){
    $id=mysqli_real_escape_string($con, $_GET['eliminar']);
    eliminarArticuloCarrito($id);
    header("location: shop-cart.php");
}