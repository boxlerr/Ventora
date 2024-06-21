<?php
if(empty($_SESSION["moneda"])){
    $moneda = getTipoCambio('ARS');
}else{
    $moneda = getTipoCambio($_SESSION["moneda"]);
}  