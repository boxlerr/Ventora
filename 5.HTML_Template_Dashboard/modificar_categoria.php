<?php
require_once("../conexion/connect.php");

if ($con) {
    if (isset($_GET['categoria'])) {
        $categoria_id = $_GET['categoria'];

        $consulta = "SELECT categoria_id, nombre, descripcion, slug FROM categoria WHERE categoria_id='$categoria_id'";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            $fila = mysqli_fetch_array($resultado);
            echo "
                <form action='modificar_categoria_2.php' method='post' enctype='multipart/form-data' class='admin-form'>
                    <div>
                        <h2>ID de la Categoría: {$fila['categoria_id']}</h2>
                        <input type='hidden' name='categoria_id' value='{$fila['categoria_id']}' />
                    </div>
                    <div>
                        <label class='admin-label' for='nombre'>Nombre de la Categoría</label>
                        <input class='admin-input' value='{$fila['nombre']}' id='nombre' type='text' name='nombre' />
                    </div>
                    <div>
                        <label class='admin-label' for='descripcion'>Descripción</label>
                        <input class='admin-input' value='{$fila['descripcion']}' id='descripcion' type='text' name='descripcion' />
                    </div>
                    <div>
                        <label class='admin-label' for='slug'>Slug</label>
                        <input class='admin-input' value='{$fila['slug']}' id='slug' type='text' name='slug' />
                    </div>
                    <input class='admin-submit' type='submit' value='Modificar Categoría' />
                </form>
            ";
        } else {
            echo "Error al recuperar los datos de la categoría.";
        }
    } else {
        echo "ID de categoría no proporcionado.";
    }
} else {
    echo "Error al conectar con la base de datos.";
}
?>
