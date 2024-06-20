<?php
session_start();

if(isset($_GET['mon'])){
    $_SESSION["moneda"] = $_GET['mon'];
}
?>