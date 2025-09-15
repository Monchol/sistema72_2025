<?php
require 'funciones/conexion.php';
require 'funciones/productos.php';
require 'funciones/categorias.php';
require 'funciones/marcas.php';

$producto = verProductosPorID();
$marcas = listarMarcas();
$categorias = listarCategorias();
include 'includes/header.php';

?>
<main class="container d-flex justify-content-center">
    
    <form action="modificarProducto.php" method="POST" class="d-flex flex-column col-lg-6 col-md-9 col-sm-12 gap-3 m-5 p-5 border border-secondary rounded">
        <h1>Modificar Producto</h1>
        <div class="form-group d-none">
            <label class="form-label" for="idProducto">ID:</label>
            <input class="form-control" type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>" required>    
        </div>
        <div class="form-group">
            <label class="form-label" for="prdProducto">Nombre:</label>
            <input class="form-control" type="text" name="prdNombre" value="<?= $producto['prdNombre'] ?>" required>
        </div>
        <div class="form-group">
            <label for="prdPrecio">Precio:</label>
            <input class="form-control" type="number" name="prdPrecio" value="<?= $producto['prdPrecio'] ?>" required>
        </div>
        <div class="form-group">
            <label for="prdPresentacion">Presentacion:</label>
            <input class="form-control" type="text" name="prdPresentacion" value="<?= $producto['prdPresentacion'] ?>" required>
        </div>
        <div class="form-group">
            <label for="prdStock">Stock:</label>
            <input class="form-control" type="number" name="prdStock" value="<?= $producto['prdStock'] ?>" required>
        </div>
        <div class="form-grup">
            <label for="prdImagen">Imagen</label>
            <input class="form-control" type="file" name="prdImagen" value="<?= $producto['prdImagen'] ?>">
        </div>
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
        <div class="form-group">
            <label for="idCategoria">Categoria</label>
            <select class="form-control" name="idCategoria" id="idCategoria" required>
                <option value="">Seleccione una Categoria</option>
                <?php while ($categoria = mysqli_fetch_assoc($categorias)): ?>
                    <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
                <?php endwhile ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-secondary" name="" value="Modificar">
        </div>
    </form>
</main>
<?php include 'includes/footer.php';