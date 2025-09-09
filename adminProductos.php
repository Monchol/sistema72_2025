<?php
require 'funciones/conexion.php';
require 'funciones/productos.php';
$productos = listarProductos();
include 'includes/header.php';

?>

<main class="container">
    <h1> Panel de administracion de Productos </h1>
    <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a Principal</a>
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Presentacion</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th colspan="2"> <a href="formAgregarProducto.php" class="btn btn-dark"> Agregar </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($producto = mysqli_fetch_assocc($productos)) {
                ?>
                <tr>
                    <td> <?= $producto['prdNombre'] ?></td>
                    <td> <?= $producto['prdPrecio'] ?></td>
                    <td> <?= $producto['prdPresentacion'] ?></td>
                    <td> <?= $producto['prdStock'] ?></td>
                    <td> <img src="productos/<?= $producto['prdImagem'] ?>" class="img-thumbnail"></td>
                    <td> <?= $producto['mkNombre'] ?></td>
                    <td> <?= $producto['catNombre'] ?></td>
                    <td>
                        <a href="formModificarProducto.php?idProducto<?= $producto['idProducto'] ?>"
                            class="btn btn-outline-secondary"> Modificar </a>
                        <a href="formEliminarProducto.php?idProducto<?= $producto['idProducto'] ?>"
                            class="btn btn-outline-danger"> Eliminar </a>
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