<?php
session_start();
// Destruir todas las variables de sesión
$_SESSION = array();
// Finalizar la sesión
session_destroy();
// Redirigir a la página de inicio o a donde quieras después del cierre de sesión
header("Location: ../index.php");
exit();
?>
