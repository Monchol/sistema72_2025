<?php

require 'funciones/conexion.php';
require 'funciones/productos.php';

$chequeo = agregarCategoria();

include 'includes/header.html';
include 'includes/nav.php';

?>

<main class="container">
    <h1>Alta de nueva Categoria</h1>

    <?php
    $class = 'danger';
    $mensaje = 'No se puede agregar una categoria';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Categoria agregada correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>

</main>
<?php include 'includes/footer.php';
?>