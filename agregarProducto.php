<?php
require 'funciones/conexion.php';
require 'funciones/Producto.php';
$chequeo = agregarProducto();

include 'includes/header.html';
include 'includes/nav.php';
?>
<main class="container">
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
</main>
<?php include 'includes/footer.php';
?>