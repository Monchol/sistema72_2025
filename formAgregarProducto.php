<?php
require 'funciones/conexion.php';
require 'funciones/marcas.php';
require 'funciones/categorias.php';
require 'funciones/productos.php';

$marcas = listarMarcas();
$categorias = listarCategorias();

include 'includes/header.php';
?>

<main class="container p-5">
    
    <div class="alert alert-secondary p-8 col-8 mx-auto">
        <h1> Alta de nuevo producto </h1>
        <form action="agregarProducto.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for='prdNombre'>Nombre del Producto:</label>
                <input type="text" name="prdNombre" class="form-control" id="prdNombre" required>
            </div>
            <div class="form-group">
                <label for='prdProducto'>Precio del Producto:</label>
                <input type="number" name="prdPrecio" class="form-control" id="prdPrecio" min="1" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="idMarca">Marca</label>
                <select class="form-control" name="idMarca" id="idMarca" required>
                <option value="" class="select-default">Seleccione una Marca</option>
                <?php while ($marca = mysqli_fetch_assoc($marcas)):?>
                        <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
                <?php endwhile?>
                    </select>
            </div>
            <div class="form-group">
                <label for="idCategoria">Categoria</label>
                <select class="form-control" name="idCategoria" id="idCategoria" required>
                    <option value="">Seleccione una Categoria</option>
                    <?php while($categoria = mysqli_fetch_assoc($categorias)):?>
                        <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
                    <?php endwhile?>
                </select>
            </div>

            <div class="form-group">
                <label for='prdNombre'>Presentacion del Producto:</label>
                <input type="text" name="prdPresentacion" class="form-control" id="prdPresentacion" required>
            </div>

            <div class="form-group">
                <label for='prdStock'>Stock del Producto:</label>
                <input type="number" name="prdStock" class="form-control" id="prdStock" required min="0">
            </div>


            <div class="form-group">
                <label for='prdImagen '>Imagen del Producto</label>
                <input type="file" name="prdImagen" class="form-control" id="prdImagen">
            </div>

            <button class="btn btn-dark mr-3 my-3 px-4" value="Agregar Producto">Agregar Producto</button>
        </form>
    </div>
    <script src="/js/verificarCategoriasMarcas.js"></script>
</main>
<?php include 'includes/footer.php'; ?>