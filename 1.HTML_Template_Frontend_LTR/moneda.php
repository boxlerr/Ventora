<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_GET['mon'])){
    $_SESSION["moneda"] = $_GET['mon'];
}
    