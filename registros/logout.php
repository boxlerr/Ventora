<?php

session_start();
//aca borramos las variables de sesion de los usuarios logueados
session_destroy();

header("Location: ../index.php");

?>