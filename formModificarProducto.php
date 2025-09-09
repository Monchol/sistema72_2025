<?php
require 'funciones/conexion.php';
require 'funciones/productos.php';

$producto = verProductosPorID();

include 'includes/header.php';

?>
<main class="container">
    <h1>Modificar Producto</h1>

    <form action="modificarProducto.php" method="POST">
        ID:
        <input type="text" name="idProducto" value="<?= $producto['idProducto'] ?>" required>
        Nombre:
        <input type="text" name="prdNombre" value="<?= $producto['prdNombre'] ?>" required>
        Precio:
        <input type="number" name="prdPrecio" value="<?= $producto['prdPrecio'] ?>" required>
        Presentacion:
        <input type="text" name="prdPresentacion" value="<?= $producto['prdPresentacion'] ?>" required>
        Stock:
        <input type="number" name="prdStock" value="<?= $producto['prdStock'] ?>" required>
        Imagen:
        <input type="file" name="prdImagen" value="<?= $producto['prdImagen'] ?>" required>
        Marca:
        <div class="form-group">
            <label for="idMarca">Marca</label>
            <select class="form-control" name="idMarca" id="idMarca" required>
                <option value="">Seleccione una Marca</option>
                <?php
                while ($marca = mysqli_fetch_assoc($marcas)) {
                    ?>
                    <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        Categoria:
        <div class="form-group">
            <label for="idCategoria">Categoria</label>
            <select class="form-control" name="idCategoria" id="idCategoria" required>
                <option value="">Seleccione una Categoria</option>
                <?php
                while ($categoria = mysqli_fetch_assoc($categorias)) {
                    ?>
                    <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <input type="submit" name="" value="MODIFICAR">
    </form>
</main>

<?php
include 'includes/footer.php';
?>