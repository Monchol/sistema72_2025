<?php
require 'funciones/conexion.php';
require 'funciones/productos.php';
$productos = listarProductos();
include 'includes/header.php';

?>

<main class="container p-5">
    <h1> Panel de administracion de Productos </h1>
    <a href="admin.php" class="btn btn-outline-secondary mb-3">Volver a principal</a>
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
                <th colspan="2" class="d-flex justify-content-end"> <a href="formAgregarProducto.php" class="btn btn-success"> Agregar </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($producto = mysqli_fetch_assoc($productos)) {
                ?>
                <tr>
                    <td> <?= $producto['prdNombre'] ?></td>
                    <td> <?= $producto['prdPrecio'] ?></td>
                    <td> <?= $producto['prdPresentacion'] ?></td>
                    <td> <?= $producto['prdStock'] ?></td>
                    <td> <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail-vanilla" alt="Prodcuto:<?= $producto["idProducto"]?>"></td>
                    <td> <?= $producto['mkNombre'] ?></td>
                    <td> <?= $producto['catNombre'] ?></td>
                    <td class="d-flex gap-2 justify-content-end">
                        <form action="formModificarProducto.php" method="get" class="">
                            <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">
                            <input type="submit" class="btn btn-outline-secondary" value="Modificar">
                        </form>
                        <form action="eliminarProducto.php" method="post" class="">
                            <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">
                            <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <style>
        .img-thumbnail-vanilla {
            width: 40px !important;
            aspect-ratio: 1/1 !important;
        }
    </style>
</main>
<?php include 'includes/footer.php'; ?>