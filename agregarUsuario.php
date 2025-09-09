<?php
require 'funciones/conexion.php';
require 'funciones/usuarios.php';
$chequeo = agregarUsuario();

include 'includes/header.html';
include 'includes/nav.php';
?>
<main class="container">
    <h1> Alta de nuevo usuario </h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se puede agregar un usuario';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Usuario agregado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
</main>
<?php include 'includes/footer.php';
?>