<?php
require 'funciones/conexion.php';
require 'funciones/categorias.php';

$categoria = verCategoriaPorID();

include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Modificar Categorias</h1>

    <form action="modificarCategoria.php" method="POST">
        ID:
        <input type="text" name="idCategoria" value="<?= $categoria['idCategoria'] ?>" required>
        Categoria:
        <input type="text" name="catNombre" value="<?= $usuario['catNombre'] ?>" required>
        <input type="submit" name="" value="MODIFICAR">
    </form>
</main>

<?php
include 'includes/footer.php';
?>