<?php
require 'funciones/conexion.php';
require 'funciones/categorias.php';

$categoria = listarCategorias();

include 'includes/header.php';

?>

<main class="container">
    <h1>Alta de nueva categoria</h1>

    <div class="alert alert-secondary p-8 col-8 mx-auto">
        <form class="col-12 gap-3 d-flex flex-column" action="agregarCategoria.php" method="POST" enctype="multipart/form-data">
            <div class="form-group col-12">
                <label for='catNombre'>Nombre de la Categoria:</label>
                <input type="text" name="catNombre" class="form-control" id="catNombre" required>
            </div>

            <input class='form-control' type="submit" button class="btn col-12 btn-dark mr-3 my-3 px-4"
                value="Agregar Categoria">
        </form>
    </div>
</main>
<?php include 'includes/footer.php'; ?>