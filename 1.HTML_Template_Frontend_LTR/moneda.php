<?php
session_start();

if(isset($_GET['mon'])){
    $_SESSION["moneda"] = $_GET['mon'];
}

if(empty($_SESSION["moneda"])){
    $moneda = getTipoCambio('ARS');
}else{
    $moneda = getTipoCambio($_SESSION["moneda"]);
}      
    // $precioMod = round($importe * $moneda[5]); 
    // $precioFinal = round($precioMod * $numDias);