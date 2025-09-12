<?php

require 'funciones/conexion.php';
require 'funciones/marcas.php';
$marcas = listarMarcas();
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
                <th>Marca</th>
                <th colspan="2">
                    <a href="formAgregarMarca.php" class="btn btn-dark"> Agregar</a>
                </th>

            </tr>
        </thead>
        <tbody>
            <?php
            while ($marca = mysqli_fetch_assoc($marcas)) {

                ?>
                <tr>
                    <td><?= $marca['idMarca']; ?></td>
                    <td><?= $marca['mkNombre']; ?></td>
                    <td class="col-lg-4">
                        <form action="formModificarMarca.php" method="get">
                            <input name="idMarca" type="hidden" value="<?= $marca['idMarca'] ?>">
                            <input class="btn btn-outline-secondary" value="Modificar" type="submit">
                        </form>
                    </td>
                    <td>
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