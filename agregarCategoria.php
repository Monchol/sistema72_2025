<?php

require 'funciones/conexion.php';
require 'funciones/categorias.php';

$chequeo = agregarCategorias();

include 'includes/header.php';

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