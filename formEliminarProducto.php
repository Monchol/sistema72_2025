<?php

require 'funciones/conexion.php';
require 'funciones/productos.php';

$chequeo = eliminarProducto();

include 'includes/header.php';

?>

<main class="container">
    <h1>Baja de Categoria</h1>

    <?php
    $class = 'danger';
    $mensaje = 'No se puede eliminar el prodcuto';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Producto eliminado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>

</main>
<script src="js/goToIndex.js"></script>
<?php include 'includes/footer.php';
?>
?>