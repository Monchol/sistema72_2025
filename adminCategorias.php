<?php

require 'funciones/conexion.php';
require 'funciones/categorias.php';
$categorias = listarCategorias();
include 'includes/header.php';

?>

<main class="container p-5">
    <h1> Panel de administracion de marcas </h1>
    <a href="admin.php" class="btn btn-outline-secondary mb-3">
    Volver a principal
    </a>
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Categorias</th>
                <th colspan="2" class="d-flex gap-2 justify-content-end">
                    <a href="formAgregarCategoria.php" class="btn btn-success"> Agregar</a>
                </th>

            </tr>
        </thead>
        <tbody>
            <?php
            while ($categoria = mysqli_fetch_assoc($categorias)) {

                ?>
                <tr class="element-<?= $categoria['idCategoria']; ?>">
                    <td><?= $categoria['idCategoria']; ?></td>
                    <td><?= $categoria['catNombre']; ?></td>
                    <td class="d-flex gap-2 justify-content-end">
                        <form action="formModificarCategoria.php" method="get">
                            <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria']?>">
                            <input type="submit" class="btn btn-outline-secondary" value="Modificar">
                        </form>
                        <form action="formEliminarCategoria.php" method="post">
                            <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria']?>">
                            <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                        </form>
                    </td>
                </tr>

                <?php
            }
            ?>
        </tbody>
    </table>
</main>
<?php
include 'includes/footer.php';
?>