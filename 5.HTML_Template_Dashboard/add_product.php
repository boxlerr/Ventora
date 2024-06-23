<?php
require_once("../conexion/connect.php");

if($con != NULL) {
    if (isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['category']) && isset($_FILES['image'])) {
        $nombre = $_POST['product_name'];
        $descripcion = $_POST['description'];
        $precio = $_POST['price'];
        $categoria_id = $_POST['category'];

        $hora = time();
        $foto = $hora . '.jpg';
        if(move_uploaded_file($_FILES['image']['tmp_name'], "../img_productos/$foto")) {
            $imagen_url = "img/$foto";

            $consulta = "INSERT INTO producto(nombre, descripcion, precio, categoria_id, imagen_url) VALUES ('$nombre', '$descripcion', '$precio', '$categoria_id', '$imagen_url')";
            $respuesta = mysqli_query($con, $consulta);

            if ($respuesta) {
                header("Location: index.php");
                exit();
            } else {
                echo "<h1>Algo salió mal al insertar los datos</h1>";
            }
        } else {
            echo "<h1>Algo salió mal al cargar la imagen</h1>";
        }
    }
} else {
    echo "<h1>Algo salió mal con la conexión</h1>";
}


?>
