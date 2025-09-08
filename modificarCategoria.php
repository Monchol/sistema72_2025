<?php
require 'funciones/conexion.php';
require 'funciones/categorias.php';

$chequeo = modificarCategoria();

include 'includes/header.html';


?>

<main class="container">
    <h1>Modificar Categoria</h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se puede modificar la categoria';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Categoria modificado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>" <?= $mensaje ?>></div>
</main>
<?php
include 'includes/footer.php';
?>