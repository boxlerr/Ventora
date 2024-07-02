<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include '../conexion/connect.php';
    include_once("header_admin.php");    
    
    if (isset($_POST['product_name'], $_POST['product_description'], $_POST['product_slug'])) {
    
        $nombre = $con->real_escape_string($_POST['product_name']);
        $descripcion = $con->real_escape_string($_POST['product_description']);
        $slug = $con->real_escape_string($_POST['product_slug']);
        
        $sql = "INSERT INTO categoria (nombre, descripcion, slug) VALUES ('$nombre', '$descripcion', '$slug')";
        
        if ($con->query($sql) === TRUE) {
            $con->close();
            // Redirigir a page-categories.php después de la inserción exitosa
            header("Location: page-categories.php");
            exit();
        } else {
            $error = "Error al crear la categoría: " . $con->error;
            $con->close();
            header("Location: page-categories.php?error=" . urlencode($error));
            exit();
        }
    } else {
        $error = "Por favor completa todos los campos del formulario";
        $con->close();
        header("Location: page-categories.php?error=" . urlencode($error));
        exit();
    }
}
?>
