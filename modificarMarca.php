<?php
require 'funciones/conexion.php';
require 'funciones/marcas.php';

$chequeo = modificarMarca();

include 'includes/header.html';


?>

<main class="container">
    <h1>Modificar Marca</h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se puede modificar la marca';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Marca modificado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>" <?= $mensaje ?>></div>
</main>
<?php
include 'includes/footer.php';
?>