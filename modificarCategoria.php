<?php
require 'funciones/conexion.php';
require 'funciones/categorias.php';

$chequeo = modificarCategorias();

include 'includes/header.php';


?>

<main class="container p-5">
    <h1>Modificar Categoria</h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se puede modificar la categoria';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Categoria modificado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>"><?= $mensaje ?></div>
    <a href="adminCategorias.php" class="btn btn-outline-secondary">Volver</a>
</main>
<?php
include 'includes/footer.php';
?>