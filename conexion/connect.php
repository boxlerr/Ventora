<?php

$servidor= 'localhost';
$usuario='root';
$contrasena='';
$base_de_datos='vestore';
$puerto= '3306';

// hay que poner los cambios segun el host que usemos por ahora esta esto para usarlo desde el xamp

$con = mysqli_connect($servidor,$usuario,$contrasena,$base_de_datos,$puerto);
if (!$con) {
    die("Error al conectar: " . mysqli_connect_error());
}
?>