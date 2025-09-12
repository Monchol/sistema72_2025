<?php

require 'funciones/conexion.php';
require 'funciones/categorias.php';
$categorias = listarCategorias();
include 'includes/header.php';

?>

<main class="container">
    <h1> Panel de administracion de marcas </h1>
    <a href="admin.php" class="btn btn-outline-secondary m-3">
        VOLVER A PRINCIPAL
    </a>
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Categorias</th>
                <th colspan="2">
                    <a href="formAgregarCategoria.php" class="btn btn-dark"> Agregar</a>
                </th>

            </tr>
        </thead>
        <tbody>
            <?php
            while ($categoria = mysqli_fetch_assoc($categorias)) {

                ?>
                <tr>
                    <td><?= $categoria['idCategoria']; ?></td>
                    <td><?= $categoria['catNombre']; ?></td>
                    <td>
                        <form action="formModificarCategoria.php" method="get">
                            <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria']?>">
                            <input type="submit" class="btn btn-outline-secondary" value="Modificar">
                        </form>
                    </td>
                    <td>
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