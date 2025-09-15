<?php

require 'funciones/conexion.php';
require 'funciones/marcas.php';

$chequeo = eliminarMarca();

include 'includes/header.php';

?>

<main class="container">
    <h1>Baja de Categoria</h1>

    <?php
    $class = 'danger';
    $mensaje = 'No se puede eliminar la marca';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Marca eliminada correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>

</main>
<script src="js/goToIndex.js"></script>
<?php include 'includes/footer.php';
?>