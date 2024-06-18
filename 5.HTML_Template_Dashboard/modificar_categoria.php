<?php
require_once("../conexion/connect.php");

if ($con) {
    if (isset($_GET['categoria_id'])) {
        $categoria_id = $_GET['categoria_id'];

        $consulta = "SELECT categoria_id, nombre, descripcion, slug FROM categoria WHERE categoria_id='$categoria_id'";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            $fila = mysqli_fetch_array($resultado);
            echo "
                <div class='card'>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <form action='modificar_categoria_2.php' method='post' enctype='multipart/form-data' class='admin-form'>
                                <div class='form-group mb-3'>
                                    <h2>ID de la Categoría: {$fila['categoria_id']}</h2>
                                    <input type='hidden' name='categoria_id' value='{$fila['categoria_id']}' class='form-control mb-3' />
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='nombre'>Nombre de la Categoría</label>
                                    <input class='form-control mb-3' value='{$fila['nombre']}' id='nombre' type='text' name='nombre' />
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='descripcion'>Descripción</label>
                                    <input class='form-control mb-3' value='{$fila['descripcion']}' id='descripcion' type='text' name='descripcion' />
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='slug'>Slug</label>
                                    <input class='form-control mb-3' value='{$fila['slug']}' id='slug' type='text' name='slug' />
                                </div>
                                <input class='btn btn-primary' type='submit' value='Modificar Categoría' />
                            </form>
                        </div>
                    </div>
                </div>
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
