<?php
require 'funciones/conexion.php';
require 'funciones/marcas.php';
require 'funciones/categorias.php';
require 'funciones/productos.php';

$marcas = listarMarcas();
$categoria = listarCategorias();

include 'includes/header.php';

?>

<main class="container">
    <h1> Alta de nueva marca</h1>

    <div class="alert alert-secondary p-8 col-8 mx-auto">
        <form action="agregarMarca.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for='mkNombre'>Nombre de la Marca:</label>
                <input type="text" name="mkNombre" class="form-control" id="mkNombre" required>
            </div>

            <button class="btn btn-dark mr-3 my-3 px-4" value="Agregar Marca">Agregar Marca</button>
        </form>
    </div>
</main>
<?php include 'includes/footer.php'; ?>