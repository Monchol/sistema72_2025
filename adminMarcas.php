<?php

require 'funciones/conexion.php';
require 'funciones/marcas.php';
$marcas = listarMarcas();
include 'includes/header.php';
?>

<main class="container p-5">
    <h1> Panel de administracion de Marcas </h1>
    <a href="admin.php" class="btn btn-outline-secondary mb-3">
        Volver a principal
    </a>
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Marca</th>
                <th colspan="2" class="d-flex gap-2 justify-content-end">
                    <a href="formAgregarMarca.php" class="btn btn-success"> Agregar</a>
                </th>

            </tr>
        </thead>
        <tbody>
            <?php
            while ($marca = mysqli_fetch_assoc($marcas)) {

                ?>
                <tr class="element-<?= $marca['idMarca']?>">
                    <td><?= $marca['idMarca']; ?></td>
                    <td><?= $marca['mkNombre']; ?></td>
                    <td class="d-flex gap-2 justify-content-end">
                        <form action="formModificarMarca.php" method="get">
                            <input name="idMarca" type="hidden" value="<?= $marca['idMarca'] ?>">
                            <input class="btn btn-outline-secondary" value="Modificar" type="submit">
                        </form>
                        <form action="formEliminarMarca.php" method="post">
                            <input name="idMarca" type="hidden" value="<?= $marca['idMarca'] ?>">
                            <input class="btn btn-outline-danger" value="Eliminar" type="submit">
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