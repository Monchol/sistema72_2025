<?php

require 'funciones/conexion.php';
require 'funciones/marcas.php';

$chequeo = agregarMarca();

include 'includes/header.php';

?>

<main class="container">
    <h1>Alta de nueva Marca</h1>

    <?php
    $class = 'danger';
    $mensaje = 'No se puede agregar una marca';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Marca agregada correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>

</main>
<?php include 'includes/footer.php';
?>