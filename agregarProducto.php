<?php
require 'funciones/conexion.php';
require 'funciones/productos.php';
$chequeo = agregarProducto();

include 'includes/header.php';
?>
<main class="container p-5">
    <h1> Alta de nuevo Producto </h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se puede agregar un Producto';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Producto agregado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
    <a href="adminProductos.php" class="btn btn-outline-secondary">Volver</a>
</main>
<?php include 'includes/footer.php';
?>