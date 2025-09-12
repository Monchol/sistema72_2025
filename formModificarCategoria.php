<?php
require 'funciones/conexion.php';
require 'funciones/categorias.php';

$categoria = verCategoriaPorId();

include 'includes/header.php';
?>

<main class="container">
    
    <form action="modificarCategoria.php" method="POST" class="d-flex flex-column col-lg-6 col-md-6 col-sm-9 gap-3 m-5 p-5 border border-secondary rounded">
        <h1>Modificar Categorias</h1>
        <div class="d-none">
            ID:
            <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria'] ?>" required>
        </div>
        <div class="form-group">
            <label for="catNombre" class="form-label">Categoria:</label>    
            <input class="form-control" type="text" name="catNombre" value="<?= $categoria['catNombre'] ?>" required>
        </div>
        <input class="btn btn-outline-secondary" type="submit" name="" value="Modificar">
    </form>
</main>

<?php
include 'includes/footer.php';
?>