<?php
// Verificar si se ha enviado el formulario
if (isset($_POST['submit'])) {
    // Incluir el archivo de conexión
    include 'connect.php';
    
    // Verificar y obtener datos del formulario
    if (isset($_POST['product_name'], $_POST['product_description'], $_POST['product_slug'])) {
        // Escapar los datos del formulario para prevenir inyecciones SQL
        $nombre = $con->real_escape_string($_POST['product_name']);
        $descripcion = $con->real_escape_string($_POST['product_description']);
        $slug = $con->real_escape_string($_POST['product_slug']);
        
        // Preparar la consulta SQL para insertar la categoría
        $sql = "INSERT INTO categorias (nombre, descripcion, slug) VALUES ('$nombre', '$descripcion', '$slug')";
        
        if ($con->query($sql) === TRUE) {
            echo "Categoría creada exitosamente";
        } else {
            echo "Error al crear la categoría: " . $con->error;
        }
    } else {
        echo "Por favor completa todos los campos del formulario";
    }
    
    // Cerrar conexión
    $con->close();
}
?>