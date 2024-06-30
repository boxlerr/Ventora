<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include '../conexion/connect.php';
    include_once("header_admin.php");    
    
    if (isset($_POST['product_name'], $_POST['product_description'], $_POST['product_slug'])) {
    
        $nombre = $con->real_escape_string($_POST['product_name']);
        $descripcion = $con->real_escape_string($_POST['product_description']);
        $slug = $con->real_escape_string($_POST['product_slug']);
        
        
        echo "Nombre: " . $nombre . "<br>";
        echo "Descripción: " . $descripcion . "<br>";
        echo "Slug: " . $slug . "<br>";
        
        
        $sql = "INSERT INTO categoria (nombre, descripcion, slug) VALUES ('$nombre', '$descripcion', '$slug')";
        
        
        
        if ($con->query($sql) === TRUE) {
            echo "Categoría creada exitosamente";
        } else {
            echo "Error al crear la categoría: " . $con->error;
        }
    } else {
        echo "Por favor completa todos los campos del formulario";
    }
    
    $con->close();
}
?>