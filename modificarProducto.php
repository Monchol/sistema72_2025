<?php
require 'funciones/conexion.php';
require 'funciones/productos.php';

$chequeo = modificarProducto();

include 'includes/header.php';

?>

<main class="container">
    <h1>Modificar Producto</h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se puede modificar el producto';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Producto modificado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>"><?= $mensaje ?></div>
</main>
<?php
include 'includes/footer.php';
?>