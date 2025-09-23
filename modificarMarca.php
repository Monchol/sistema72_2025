<?php
require 'funciones/conexion.php';
require 'funciones/marcas.php';

$chequeo = modificarMarca();

include 'includes/header.php';


?>

<main class="container p-5">
    <h1>Modificar Marca</h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se puede modificar la marca';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Marca modificado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>"><?= $mensaje ?></div>
    <a href="adminMarcas.php" class="btn btn-outline-secondary">Volver</a>

</main>
<?php
include 'includes/footer.php';
?>